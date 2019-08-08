<?php
// @codingStandardsIgnoreStart
use Bitrix\Crm\Integrity;

\CModule::IncludeModule('crm');
IncludeModuleLangFile(__FILE__);

Class CRoistatB24
{
    const ROISTAT_FIELD_NAME = 'roistat';
    const DEAL_PREFIX = 'deal_';
    const LEAD_PREFIX = 'lead_';

    /**
     * @var \CUserTypeManager
     */
    private $_CUserTypeManager;

    /**
     * @var array
     */
    private $_fieldsData = array();

    /**
     * @var string
     */
    private $_moduleVersion = null;

    public function __construct()
    {
        global $USER_FIELD_MANAGER;

        $arModuleVersion = array();
        $path = str_replace('\\', '/', __FILE__);
        $path = substr($path, 0, strlen($path) - strlen('/roistat.php'));
        include("{$path}/version.php");
        if (is_array($arModuleVersion) && array_key_exists('VERSION', $arModuleVersion))
        {
            $this->_moduleVersion = $arModuleVersion['VERSION'];
        }

        $this->_CUserTypeManager = $USER_FIELD_MANAGER;

        $CCrmLeadFields = new \CCrmFields($this->_CUserTypeManager, 'CRM_LEAD');
        $this->_fieldsData['CRM_LEAD'] = $CCrmLeadFields->GetFields();

        $CCrmDealFields = new \CCrmFields($this->_CUserTypeManager, 'CRM_DEAL');
        $this->_fieldsData['CRM_DEAL'] = $CCrmDealFields->GetFields();
    }

    /**
     * @return string
     */
    public function moduleVersion()
    {
        return $this->_moduleVersion;
    }

    /**
     * @param array $fieldsData
     * @return array
     */
    private function _ConvertFieldsDataToExportFormat(array $fieldsData)
    {
        $result = array();
        foreach ($fieldsData as $fieldData)
        {
            $result[] = array(
                'id'   => $fieldData['FIELD_NAME'],
                'name' => $fieldData['EDIT_FORM_LABEL'],
            );
        }
        foreach ($result as $key => $value)
        {
            if (array_key_exists('name', $value) && strtolower($value['name']) === self::ROISTAT_FIELD_NAME)
            {
                unset($result[$key]);
            }
        }
        return $result;
    }

    /**
     * Get promo code field id from CRM_LEAD|CRM_DEAL
     *
     * @param string $entityID
     * @return string
     */
    public function GetPromoCodeFieldIdByEntityID($entityID)
    {
        static $result = array();
        if (!array_key_exists($entityID, $result))
        {
            $fields = (array_key_exists($entityID, $this->_fieldsData)) ? $this->_fieldsData[$entityID] : array();
            foreach ($fields as $fieldID => $fieldData)
            {
                if (strtolower($fieldData['EDIT_FORM_LABEL']) !== self::ROISTAT_FIELD_NAME)
                {
                    continue;
                }
                $result[$entityID] = $fieldID;
            }
        }
        return (array_key_exists($entityID, $result)) ? $result[$entityID] : null;
    }

    /**
     * @param string $entityId
     * @param string $prefix
     * @return array
     */
    private function _GetStatusesByParams($entityId, $prefix)
    {
        $result = array();
        $statuses = $this->_loadStatusesData();
        foreach ($statuses as $statusId => $data) {
            if (strpos($statusId, $entityId) !== 0) {
                continue;
            }

            foreach ($data as $name => $label) {
                $result[] = array(
                    'id' =>  $prefix . $name,
                    'name' => $label,
                );
            }
        }
        return $result;
    }

    /**
     * @param string $id
     * @return string
     */
    private function _GetEnumValueByID($id)
    {
        static $result;
        if ($result === null)
        {
            $result = array();
            $CUserTypeEnum = new \CUserTypeEnum();
            $enumValues = $CUserTypeEnum->GetList(array());
            while ($enumValue = $enumValues->GetNext())
            {
                $result[$enumValue['ID']] = $enumValue['VALUE'];
            }
        }
        return (array_key_exists($id, $result)) ? $result[$id] : $id;
    }


    /**
     * @param int $dateModify
     * @return array
     */
    public function ExportOrdersData($dateModify)
    {
        $dateTime = new \DateTime('@'.$dateModify);
        $result = array('statuses' => array(), 'orders' => array(), 'fields' => array());

        $leadStatuses = $this->_GetStatusesByParams('STATUS', self::LEAD_PREFIX);
        $dealStatuses = $this->_GetStatusesByParams('DEAL_STAGE', self::DEAL_PREFIX);
        $result['statuses'] = array_merge($leadStatuses, $dealStatuses);

        $leadFields = $this->_ConvertFieldsDataToExportFormat($this->_fieldsData['CRM_LEAD']);
        $dealFields = $this->_ConvertFieldsDataToExportFormat($this->_fieldsData['CRM_DEAL']);
        $result['fields'] = array_merge($leadFields, $dealFields);

        $visitFieldIdInLead = $this->GetPromoCodeFieldIdByEntityID('CRM_LEAD');
        $visitFieldIdInDeal = $this->GetPromoCodeFieldIdByEntityID('CRM_DEAL');

        $usersIDs = array();
        $leadsList = CCrmLead::GetList(
            array('DATE_MODIFY' => 'DESC'),
            array(
                '>=DATE_MODIFY' => $dateTime->format('d.m.Y'),
            )
        );
        $leadFieldsByLeadIds = [];
        while ($lead = $leadsList->GetNext())
        {
            $leadId = $lead['ID'];
            $leadFields = $this->_GetAdditionalFieldData($lead, $this->_fieldsData['CRM_LEAD']);
            $leadFieldsByLeadIds[$leadId] = $leadFields;
            $newLead = array(
                'id'          => $leadId,
                'name'        => $lead['TITLE'],
                'date_create' => MakeTimeStamp($lead['DATE_CREATE'], "DD.MM.YYYY HH:MI:SS"),
                'status'      => self::LEAD_PREFIX.$lead['STATUS_ID'],
                'price'       => $lead['OPPORTUNITY'],
                'roistat'     => (array_key_exists($visitFieldIdInLead, $lead)) ? $lead[$visitFieldIdInLead] : null,
                'fields'      => $leadFields,
            );
            $newLead['fields']['LEAD_ID'] = $leadId;

            if (array_key_exists('ASSIGNED_BY_ID', $lead))
            {
                $newLead['fields'][GetMessage("ROISTAT_MANAGER")] = $lead['ASSIGNED_BY_ID'];
            }
            if (!in_array($lead['ASSIGNED_BY_ID'], $usersIDs))
            {
                $usersIDs[] = $lead['ASSIGNED_BY_ID'];
            }
            if (array_key_exists('SOURCE_ID', $lead))
            {
                $newLead['fields'][GetMessage("ROISTAT_SOURCE")] = $this->_loadStatusValueByEntityAndId('SOURCE', $lead['SOURCE_ID']);
            }
            $result['orders'][] = $newLead;
        }

        $leadsIDs = array();
        $ordersDeals = array();
        $dealsList = CCrmDeal::GetList(
            array('DATE_MODIFY' => 'DESC'),
            array(
                '>=DATE_MODIFY' => $dateTime->format('d.m.Y'),
            )
        );
        while ($deal = $dealsList->GetNext())
        {
            $dealId = self::DEAL_PREFIX.$deal['ID'];
            $newDeal = array(
                'id'          => $dealId,
                'name'        => $deal['TITLE'],
                'date_create' => MakeTimeStamp($deal['DATE_CREATE'], "DD.MM.YYYY HH:MI:SS"),
                'status'      => self::DEAL_PREFIX.$deal['STAGE_ID'],
                'price'       => $deal['OPPORTUNITY'],
                'roistat'     => array_key_exists($visitFieldIdInDeal, $deal) ? $deal[$visitFieldIdInDeal] : null,
                'client_id'   => array_key_exists('CONTACT_ID', $deal) ? $deal['CONTACT_ID'] : null,
                'fields'      => $this->_GetAdditionalFieldData($deal, $this->_fieldsData['CRM_DEAL']),
            );
            $newDeal['fields']['DEAL_ID'] = $dealId;

            if (array_key_exists('LEAD_ID', $deal) && intval($deal['LEAD_ID']) > 0)
            {
                $leadId = $deal['LEAD_ID'];
                $leadsIDs[] = $leadId;
                $newDeal['id'] = $this->_getIdForDeal($deal, $ordersDeals);
                $newDeal['fields']['LEAD_ID'] = $leadId;
                if (array_key_exists($leadId, $leadFieldsByLeadIds)) {
                    $newDeal['fields'] = array_merge($leadFieldsByLeadIds[$leadId], $newDeal['fields']);
                }
            }
            if (array_key_exists('ASSIGNED_BY_ID', $deal))
            {
                $newDeal['fields'][GetMessage("ROISTAT_MANAGER")] = $deal['ASSIGNED_BY_ID'];
            }
            if (!in_array($deal['ASSIGNED_BY_ID'], $usersIDs))
            {
                $usersIDs[] = $deal['ASSIGNED_BY_ID'];
            }
            if (array_key_exists('TYPE_ID', $deal))
            {
                $newDeal['fields'][GetMessage("ROISTAT_TYPE")] = $this->_loadStatusValueByEntityAndId('DEAL_TYPE', $deal['TYPE_ID']);
            }
            $ordersDeals[] = $newDeal;
        }

        $result['orders'] = array_merge($result['orders'], $ordersDeals);
        $createLeadDateByID = array();
        $convertedLeadList = CAllCrmLead::GetList(array('DATE_MODIFY' => 'DESC'), array('ID' => $leadsIDs, 'STATUS_ID' => 'CONVERTED'), array(), false);
        while ($convertedLead = $convertedLeadList->GetNext())
        {
            $createLeadDateByID[$convertedLead['ID']] = MakeTimeStamp($convertedLead['DATE_CREATE'], "DD.MM.YYYY HH:MI:SS");
        }

        $usersNamesByID = array();
        $dbResUsers = CUser::GetList($by='id', $order='asc', array('ID' => implode('|', $usersIDs)));
        while ($user = $dbResUsers->Fetch())
        {
            $usersNamesByID[$user['ID']] = "[{$user['ID']}] {$user['NAME']} {$user['LAST_NAME']}";
        }

        foreach ($result['orders'] as $index => $orderData)
        {
            $assignedManagerID = $result['orders'][$index]['fields'][GetMessage("ROISTAT_MANAGER")];
            $result['orders'][$index]['fields'][GetMessage("ROISTAT_MANAGER")] = $usersNamesByID[$assignedManagerID];

            if (!array_key_exists('LEAD_ID', $orderData['fields']))
            {
                continue;
            }
            if (!array_key_exists($orderData['fields']['LEAD_ID'], $createLeadDateByID))
            {
                continue;
            }
            $result['orders'][$index]['date_create'] = $createLeadDateByID[$orderData['fields']['LEAD_ID']];
        }
        return $this->_convertOrdersDataToUTF8($result);
    }

    /**
     * @param array $fieldsData
     * @param array $fieldsMetadata
     * @return array
     */
    private function _GetAdditionalFieldData(array $fieldsData, array $fieldsMetadata)
    {
        $visitFieldIdInLead = $this->GetPromoCodeFieldIdByEntityID('CRM_LEAD');
        $visitFieldIdInDeal = $this->GetPromoCodeFieldIdByEntityID('CRM_DEAL');

        $result = array();
        foreach ($fieldsData as $fieldID => $fieldValue)
        {
            $isAdditionalField = mb_substr(strtolower($fieldID), 0, 7, 'UTF-8') === 'uf_crm_';
            $isRoistatField = in_array($fieldID, array($visitFieldIdInLead, $visitFieldIdInDeal));
            $isEmptyString = mb_strlen($fieldValue) === 0;
            if ($isRoistatField || !$isAdditionalField || $isEmptyString || !array_key_exists($fieldID, $fieldsMetadata))
            {
                continue;
            }

            $fieldMetadata = $fieldsMetadata[$fieldID];
            $fieldType = $fieldMetadata['USER_TYPE_ID'];
            //$fieldName = $fieldMetadata['EDIT_FORM_LABEL'];
            if (!in_array($fieldType, array('string', 'integer', 'enumeration', 'boolean', 'double', 'crm_status', 'datetime')))
            {
                continue;
            }
            elseif ($fieldType === 'boolean')
            {
                $fieldValue = ((string)$fieldValue === '1') ? GetMessage('ROISTAT_YES') : GetMessage('ROISTAT_NO');
            }
            elseif ($fieldType === 'enumeration')
            {
                $fieldValue = $this->_GetEnumValueByID($fieldValue);
            }
            elseif ($fieldType === 'crm_status')
            {
                $normalValue = $this->_loadStatusValueByEntityAndId($fieldMetadata['SETTINGS']['ENTITY_TYPE'], $fieldValue);
                if ($normalValue !== null)
                {
                    $fieldValue = $normalValue;
                }
            }
            $result[$fieldID] = $fieldValue;
        }
        return $result;
    }

    /**
     * @param string $entityId
     * @param string $statusId
     * @return string
     */
    private function _loadStatusValueByEntityAndId($entityId, $statusId)
    {
        $data = $this->_loadStatusesData();
        if (array_key_exists($entityId, $data) && array_key_exists($statusId, $data[$entityId]))
        {
            return $data[$entityId][$statusId];
        }
        else
        {
            return null;
        }
    }

    /**
     * @return array
     */
    private function _loadStatusesData() {
        static $data;

        if ($data === null)
        {
            $data = array();
            $statuses = \CCrmStatus::GetList(array(), array());
            while ($status = $statuses->GetNext())
            {
                if (!array_key_exists($status['ENTITY_ID'], $data))
                {
                    $data[$status['ENTITY_ID']] = array();
                }
                $data[$status['ENTITY_ID']][$status['STATUS_ID']] = $status['NAME'];
            }
        }
        return $data;
    }

    /**
     * @param int $dateModify
     * @return array
     */
    public function ExportClientsData($dateModify)
    {
        $dateTime = new \DateTime('@'.$dateModify);
        $result = array();
        $contactsIDs = array();

        $contacts = \CCrmContact::GetList(
            array('DATE_MODIFY' => 'DESC'),
            array(
                '>=DATE_MODIFY' => $dateTime->format('d.m.Y'),
            )
        );
        while ($contact = $contacts->Fetch())
        {
            $contactsIDs[] = $contact['ID'];
            $newContact = array(
                'id'         => $contact['ID'],
                'name'       => $contact['FULL_NAME'],
                'phone'      => null,
                'email'      => null,
                'company'    => (array_key_exists('COMPANY_TITLE', $contact)) ? $contact['COMPANY_TITLE'] : null,
                'birth_date' => MakeTimeStamp($contact['BIRTHDATE'], "DD.MM.YYYY HH:MI:SS"),
                'fields'     => array(),
            );
            $result[] = $newContact;
        }

        $contactInformation = array();
        $fieldsValues = \CCrmFieldMulti::GetList(array('ID' => 'ASC'), array('ENTITY_ID' => 'CONTACT', 'ELEMENT_ID' => $contactsIDs));
        while ($fieldValue = $fieldsValues->Fetch())
        {
            if (!array_key_exists($fieldValue['ELEMENT_ID'], $contactInformation))
            {
                $contactInformation[$fieldValue['ELEMENT_ID']] = array();
            }
            if (!array_key_exists($fieldValue['TYPE_ID'], $contactInformation[$fieldValue['ELEMENT_ID']]))
            {
                $contactInformation[$fieldValue['ELEMENT_ID']][$fieldValue['TYPE_ID']] = array();
            }
            $contactInformation[$fieldValue['ELEMENT_ID']][$fieldValue['TYPE_ID']][] = $fieldValue['VALUE'];
        }
        foreach ($result as $index => $contactData)
        {
            if (!array_key_exists($contactData['id'], $contactInformation))
            {
                continue;
            }
            if (array_key_exists('EMAIL', $contactInformation[$contactData['id']]) && count($contactInformation[$contactData['id']]['EMAIL']) > 0)
            {
                $result[$index]['email'] = implode(',', $contactInformation[$contactData['id']]['EMAIL']);
            }
            if (array_key_exists('PHONE', $contactInformation[$contactData['id']]) && count($contactInformation[$contactData['id']]['PHONE']) > 0)
            {
                $result[$index]['phone'] = implode(',', $contactInformation[$contactData['id']]['PHONE']);
            }
        }
        return $this->_convertClientsDataToUTF8($result);
    }

    /**
     * @param string $title
     * @param string $text
     * @param string $name
     * @param string $phone
     * @param string $email
     * @param string $visit
     * @param array $additionalFields
     * @return string
     */
    public function AddLead($title, $text, $name, $phone, $email, $visit, array $additionalFields = array())
    {
        $createLead = array();
        foreach ($additionalFields as $fieldId => $fieldValue) {
            $createLead[$fieldId] = $fieldValue;
        }

        if ($title !== '')
        {
            $createLead['TITLE'] = $title;
        }
        if ($text !== '')
        {
            $createLead['COMMENTS'] = $text;
        }
        if ($name !== '')
        {
            $createLead['NAME'] = $name;
        }
        if ($phone !== '')
        {
            $createLead['FM']['PHONE'] = Array(
                'n1' => Array(
                    'VALUE'      => $phone,
                    'VALUE_TYPE' => 'WORK',
                ),
            );
        }
        if ($email !== '')
        {
            $createLead['FM']['EMAIL'] = Array(
                'n1' => Array(
                    'VALUE'      => $email,
                    'VALUE_TYPE' => 'WORK',
                ),
            );
        }
        $contactID = $this->_FindContactByParam($phone, $email);
        if ($contactID !== null)
        {
            $createLead['CONTACT_ID'] = $contactID;
        }
        if ($visit !== '')
        {
            $visitFieldIdInLead = $this->GetPromoCodeFieldIdByEntityID('CRM_LEAD');
            $createLead[$visitFieldIdInLead] = $visit;
        }

        $CAllCrmLead = new \CAllCrmLead();
        $newLeadID = $CAllCrmLead->Add($createLead);
        if ($newLeadID)
        {
            CCrmBizProcHelper::AutoStartWorkflows(
                CCrmOwnerType::Lead,
                $newLeadID,
                CCrmBizProcEventType::Create,
                $errors = array()
            );
            return array('status' => 'ok', 'order_id' => $newLeadID);
        }
        else
        {
            return array('status' => 'error', 'message' => $CAllCrmLead->LAST_ERROR);
        }
    }

    /**
     * @param string $phone
     * @param string $email
     * @return string
     */
    private function _FindContactByParam($phone, $email)
    {
        $result = null;
        $normalizedPhone = Integrity\DuplicateCommunicationCriterion::normalizePhone($phone);
        foreach (array('PHONE' => $normalizedPhone, 'EMAIL' => $email) as $entity => $value)
        {
            if (!is_string($value) || $value === '')
            {
                continue;
            }
            $criterion = new Integrity\DuplicateCommunicationCriterion($entity, $value);
            $matchesContacts = $criterion->find(\CCrmOwnerType::Contact, 1);
            if ($matchesContacts !== null)
            {
                $result = array_shift($matchesContacts->getEntityIDs());
                break;
            }
        }
        return $result;
    }

    /**
     * For OnAfterCrmDealAdd hook
     *
     * @param array $fields
     */
    public static function OnAfterCrmDealAddHandler(array &$fields)
    {
        if (array_key_exists('LEAD_ID', $fields) && intval($fields['LEAD_ID']) > 0)
        {
            $CLead = \CAllCrmLead::GetList(
                array('DATE_MODIFY' => 'DESC'),
                array('ID' => $fields['LEAD_ID']),
                array(),
                false
            );
            $lead = $CLead->Fetch();
            if ($lead)
            {
                $integration = new self();
                $leadPromoCodeFieldId = $integration->GetPromoCodeFieldIdByEntityID('CRM_LEAD');
                $dealPromoCodeFieldId = $integration->GetPromoCodeFieldIdByEntityID('CRM_DEAL');
                $CCrmDeal = new \CAllCrmDeal();
                $newFields[$dealPromoCodeFieldId] = $lead[$leadPromoCodeFieldId];
                $CCrmDeal->Update($fields['ID'], $newFields);
            }
        }
    }

    /**
     * @param array $data
     * @return array
     */
    private function _convertOrdersDataToUTF8(array $data)
    {
        $result = $data;
        if (strtoupper(LANG_CHARSET) === 'UTF-8')
        {
            return $result;
        }
        if (array_key_exists('orders', $result) && count($result['orders']) > 0)
        {
            foreach ($result['orders'] as $index => $order)
            {
                foreach ($order as $fieldName => $fieldValue)
                {
                    if (is_array($fieldValue))
                    {
                        foreach ($fieldValue as $key => $value)
                        {
                            $convertedKey = $this->_convertValueToUTF8($key);
                            $convertedValue = $this->_convertValueToUTF8($value);
                            $result['orders'][$index][$fieldName][$convertedKey] = $convertedValue;
                            if ($convertedKey !== $key) {
                                unset($result['orders'][$index][$fieldName][$key]);
                            }
                        }
                    }
                    else
                    {
                        $result['orders'][$index][$fieldName] = $this->_convertValueToUTF8($fieldValue);
                    }
                }
            }
        }
        if (array_key_exists('statuses', $result) && count($result['statuses']) > 0)
        {
            foreach ($result['statuses'] as $index => $status)
            {
                $id = $this->_convertValueToUTF8($result['statuses'][$index]['id']);
                $name = $this->_convertValueToUTF8($result['statuses'][$index]['name']);
                $result['statuses'][$index]['id'] = $id;
                $result['statuses'][$index]['name'] = $name;
            }
        }
        if (array_key_exists('fields', $result) && count($result['fields']) > 0)
        {
            foreach ($result['fields'] as $index => $field)
            {
                $id = $this->_convertValueToUTF8($result['fields'][$index]['id']);
                $name = $this->_convertValueToUTF8($result['fields'][$index]['name']);
                $result['fields'][$index]['id'] = $id;
                $result['fields'][$index]['name'] = $name;
            }
        }
        return $result;
    }

    /**
     * @param array $data
     * @return array
     */
    private function _convertClientsDataToUTF8(array $data)
    {
        $result = $data;
        if (strtoupper(LANG_CHARSET) === 'UTF-8')
        {
            return $result;
        }
        foreach ($result as $index => $client)
        {
            foreach ($result[$index] as $fieldName => $fieldValue)
            {
                if (is_array($fieldValue))
                {
                    continue;
                }
                $result[$index][$fieldName] = $this->_convertValueToUTF8($fieldValue);
            }
        }
        return $result;
    }

    /**
     * @param string $value
     * @return string
     */
    private function _convertValueToUTF8($value)
    {
        return iconv(LANG_CHARSET, 'UTF-8', $value);
    }

    /**
     * @param array $deal
     * @param array $ordersDeals
     * @return string
     */
    private function _getIdForDeal(array $deal, array $ordersDeals) {
        $leadId = $deal['LEAD_ID'];
        foreach($ordersDeals as $orderDeal) {
            if ($orderDeal['id'] === $leadId) {
                return self::DEAL_PREFIX.$deal['ID'];
            }
        }
        return $leadId;
    }
}
// @codingStandardsIgnoreEnd
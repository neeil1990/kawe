<?php // @codingStandardsIgnoreStart

IncludeModuleLangFile(__FILE__);

\CModule::IncludeModule('crm');
include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/roistat.b24/classes/general/roistat.php");

Class roistat_b24 extends CModule
{
    var $MODULE_ID = "roistat.b24";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_GROUP_RIGHTS = "Y";
    var $MODULE_CSS;

    public function __construct()
    {
        $arModuleVersion = array();
        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        include($path . "/version.php");

        if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
        {
            $this->MODULE_VERSION = $arModuleVersion["VERSION"];
            $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        }
        $this->MODULE_NAME = GetMessage("ROISTAT_MODULE_NAME");
        $this->MODULE_DESCRIPTION = GetMessage("ROISTAT_MODULE_DESCRIPTION");
        $this->MODULE_CSS = "/bitrix/modules/roistat.b24/styles.css";
        $this->PARTNER_NAME = "roistat";
        $this->PARTNER_URI = "http://roistat.com";
    }

    public function InstallDB()
    {
        $Croistat = new \CRoistatB24();
        if ($Croistat->GetPromoCodeFieldIdByEntityID('CRM_LEAD') === null)
        {
            $this->AddCustomField('CRM_LEAD');
        }
        if ($Croistat->GetPromoCodeFieldIdByEntityID('CRM_DEAL') === null)
        {
            $this->AddCustomField('CRM_DEAL');
        }
    }

    /**
     * @return bool
     */
    public function InstallEvents()
    {
        RegisterModuleDependences("crm", "OnAfterCrmDealAdd", "roistat.b24", "CRoistatB24", "OnAfterCrmDealAddHandler");
        return true;
    }

    /**
     * @return bool
     */
    public function UnInstallEvents()
    {
        UnRegisterModuleDependences("crm", "OnAfterCrmDealAdd", "roistat.b24", "CRoistatB24", "OnAfterCrmDealAddHandler");
        return true;
    }

    /**
     * @return bool
     */
    public function InstallFiles()
    {
        CopyDirFiles($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/roistat.b24/install/admin", $_SERVER["DOCUMENT_ROOT"] . "/bitrix/admin", true);
        return true;
    }

    /**
     * @return bool
     */
    public function UnInstallFiles()
    {
        DeleteDirFiles($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/roistat.b24/install/admin", $_SERVER["DOCUMENT_ROOT"] . "/bitrix/admin");
        return true;
    }

    public function DoInstall()
    {
        if (!IsModuleInstalled("roistat.b24"))
        {
            $this->InstallDB();
            $this->InstallEvents();
            $this->InstallFiles();
        }
        RegisterModule("roistat.b24");
    }

    public function DoUninstall()
    {
        $this->UnInstallEvents();
        $this->UnInstallFiles();
        UnRegisterModule("roistat.b24");
    }

    /**
     * @return array
     */
    public function GetModuleRightList()
    {
        return array(
            "reference_id" => array("D", "R", "W"),
            "reference" => array(
                "[D] " . GetMessage("ROISTAT_DENIED"),
                "[R] " . GetMessage("ROISTAT_READ"),
                "[W] " . GetMessage("ROISTAT_WRITE")),
        );
    }

    /**
     * CRM_LEAD|CRM_DEAL
     *
     * @param string $entityID
     * @return bool
     */
    private function AddCustomField($entityID)
    {
        global $USER_FIELD_MANAGER;
        $hash = strtoupper(substr(uniqid(), 0, 10));
        $CCrmLeadFields = new \CCrmFields($USER_FIELD_MANAGER, $entityID);
        $arFieldParam    = array(
            'ENTITY_ID'         => $entityID,
            'FIELD_NAME'        => 'UF_CRM_'.$hash,
            'USER_TYPE_ID'      => 'string',
            'XML_ID'            => 'XML_ID_DEV2DAY_FIELD1',
            'SORT'              => 500,
            'MULTIPLE'          => 'N',
            'MANDATORY'         => 'N',
            'SHOW_FILTER'       => 'I',
            'SHOW_IN_LIST'      => '',
            'EDIT_IN_LIST'      => '',
            'IS_SEARCHABLE'     => 'Y',
            'SETTINGS'          => array(
                'SIZE'          => '20',
                'ROWS'          => '1',
                'MIN_LENGTH'    => '0',
                'MAX_LENGTH'    => '0',
                'REGEXP'        => '',
            ),
            'EDIT_FORM_LABEL'   => array('ru' => CRoistatB24::ROISTAT_FIELD_NAME),
            'LIST_COLUMN_LABEL' => array('ru' => CRoistatB24::ROISTAT_FIELD_NAME),
            'LIST_FILTER_LABEL' => array('ru' => CRoistatB24::ROISTAT_FIELD_NAME),
            'HELP_MESSAGE'      => array('ru' => ''),
        );

        $dbResLanguages = \CLanguage::GetList($by = '', $order = '');
        while ($arLanguage = $dbResLanguages->Fetch())
        {
            $arFieldParam['EDIT_FORM_LABEL'][$arLanguage['LID']] = CRoistatB24::ROISTAT_FIELD_NAME;
            $arFieldParam['LIST_COLUMN_LABEL'][$arLanguage['LID']] = CRoistatB24::ROISTAT_FIELD_NAME;
            $arFieldParam['LIST_FILTER_LABEL'][$arLanguage['LID']] = CRoistatB24::ROISTAT_FIELD_NAME;
        }
        return $CCrmLeadFields->AddField($arFieldParam);
    }
}
// @codingStandardsIgnoreEnd
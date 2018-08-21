<?

IncludeModuleLangFile(__FILE__);
class BillSotbit
{

    const MODULE_ID = 'sotbit.bill';
    const CACHE_TIME_TOOLS = 1800;

    public function getDemo()
    {
        $module_id = "sotbit.bill";
        $sotbit_DEMO = CModule::IncludeModuleEx($module_id);
        if($sotbit_DEMO==3)
        {
            return false;
        }
        else return true;
    }

    function OnEmailHandler(&$arFields, &$arTemplate)
	{
        CModule::includeModule('sale');
        if(isset($arFields['ORDER_REAL_ID']) && $arFields['ORDER_REAL_ID'] > 0)
        {
            $order = \Bitrix\Sale\Order::load($arFields['ORDER_REAL_ID']);
            $eventName = $arTemplate['EVENT_NAME'];
            $paymentCollection = $order->getPaymentCollection();
            $files = array();
            if(count($paymentCollection) > 0)
            {
                foreach ($paymentCollection as $payment)
                {
                    if (!$payment->isPaid())
                    {
                        $psID = $payment->getPaymentSystemId();
                        $action = CSalePaySystem::GetByID($psID);
                        if ($action['ACTION_FILE'] == 'billsotbit')
                        {
                            $service = \Bitrix\Sale\PaySystem\Manager::getObjectById($payment->getPaymentSystemId());
                            if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/upload/bill_pdf')) mkdir($_SERVER['DOCUMENT_ROOT'].'/upload/bill_pdf');
                            $service->showTemplate($payment, 'template_pdf_file');
                            $pdf = md5($order->getId() . '|' . $order->getField('DATE_INSERT')->getTimestamp()) . '.pdf';
                            $filePath = $_SERVER['DOCUMENT_ROOT'] . '/upload/bill_pdf/' . $pdf;
                            $arFile = CFile::MakeFileArray($filePath);
                            $arFile['MODULE_ID'] = 'sotbit.bill';
                            $fid = CFile::SaveFile($arFile , "sotbit.bill");
                            array_push($files, $fid);
                            unlink($filePath);
                        }
                    }
                }
                if (!empty($files))
                {
                    $events = unserialize(COption::GetOptionString('sotbit.bill', 'EVENTS'));
                    if(in_array($eventName, $events))
                    {
                        $arTemplate['FILE'] = $files;
                    }
                }
            }
        }
    }
}
?>
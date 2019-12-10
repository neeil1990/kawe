<?php

IncludeModuleLangFile(__FILE__);

class prime_roistatbitrixcms extends CModule {

    var $MODULE_ID = "prime.roistatbitrixcms";

    //при обявлении класса код выполняеться сразу
    function __construct(){

    $arModuleVersion = array();
    include(__DIR__.'/version.php');

    $this->MODULE_ID = 'prime.roistatbitrixcms';
    $this->MODULE_VERSION = $arModuleVersion['VERSION'];
    $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];

    $this->MODULE_NAME = "RoiStat Leads";
    $this->MODULE_DESCRIPTION = "Модуль для быстрой интеграции с системой сквозной аналитики ROISTAT";
    $this->PARTNER_NAME = "Prime";
    $this->PARTNER_URI = "prime-ltd.su";

    }

    function DoInstall(){
        global $APPLICATION;
        RegisterModule($this->MODULE_ID);

        RegisterModuleDependences('main', 'OnBeforeEventSend', $this->MODULE_ID, 'RoiStat','send');

        $APPLICATION->IncludeAdminFile($this->MODULE_NAME,$_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/prime.roistatbitrixcms/install/step.php");
    }

    function DoUninstall(){
        global $APPLICATION;
        UnRegisterModule($this->MODULE_ID);

        UnRegisterModuleDependences('main', 'OnBeforeEventSend', $this->MODULE_ID, 'RoiStat','send');

        $APPLICATION->IncludeAdminFile($this->MODULE_NAME,$_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/prime.roistatbitrixcms/install/unstep.php");
    }

}
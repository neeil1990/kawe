<?php
IncludeModuleLangFile(__FILE__);

class artrix_imageoptimizer extends CModule
{
    var $MODULE_ID = "artrix.imageoptimizer";
    var $PARTNER_NAME;
    var $PARTNER_URI = "http://artrix.ru";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;
    var $MODULE_CSS;

    function artrix_imageoptimizer()
    {
        $arModuleVersion = array();

        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        include($path."/version.php");

        if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
        {
            $this->MODULE_VERSION = $arModuleVersion["VERSION"];
            $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        }

        $this->PARTNER_NAME = GetMessage("ARTRIX_OPTIMIZE_ARTRIX");
        $this->MODULE_NAME = GetMessage("ARTRIX_OPTIMIZE_OPTIMIZATION_MODULE");
        $this->MODULE_DESCRIPTION = "";
		$this->PARTNER_NAME = GetMessage("ARTRIX_OPTIMIZE_ARTRIX");
        $this->PARTNER_URI = "http://artrix.ru";
    }

    function InstallFiles($arParams = array())
    {
		CopyDirFiles(
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/admin/",
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/admin",
			true, true
		);
		CopyDirFiles(
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/css",
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/css",
			true, true
		);
		CopyDirFiles(
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/tools",
			$_SERVER["DOCUMENT_ROOT"]."/bitrix/tools",
			true, true
		);
        return true;
    }
    
    function InstallDB()
    {
        global $APPLICATION;
        global $DB;
        global $DBType;
        global $errors;
		
		if (!$DB->Query("SELECT 'x' FROM artrix_image_settings", true))
			$errors = $DB->RunSQLBatch($_SERVER["DOCUMENT_ROOT"].'/bitrix/modules/'.$this->MODULE_ID.'/install/db/'.strtolower($DB->type).'/install.sql');
		
		if (!empty($errors))
		{
			$APPLICATION->ThrowException(implode("", $errors));
			return false;
		}
        return true;
    }

    
    
    function UnInstallDB($arParams = array())
    {
        global $APPLICATION, $DB, $errors;
		$errors = $DB->RunSQLBatch($_SERVER["DOCUMENT_ROOT"].'/bitrix/modules/'.$this->MODULE_ID.'/install/db/'.strtolower($DB->type).'/uninstall.sql');
        return true;
    }
    
    
    function UnInstallFiles()
    {
		DeleteDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/admin/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/admin");
        DeleteDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/css/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/css");
        DeleteDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/js/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/js");
        DeleteDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$this->MODULE_ID."/install/tools/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/tools");
        return true;
    }

    function DoInstall(){
        global $DOCUMENT_ROOT, $APPLICATION;
        $this->InstallFiles();
        $this->InstallDB();
        RegisterModule("artrix.imageoptimizer");
    }
    function DoUninstall(){
        global $DOCUMENT_ROOT, $APPLICATION;
        $this->UnInstallFiles();
        $this->UnInstallDB();
        UnRegisterModule("artrix.imageoptimizer");
    }
}
?>
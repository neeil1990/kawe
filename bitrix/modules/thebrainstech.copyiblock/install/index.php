<?php
// Код установки и удаления модуля с основными параметрами.



//подключение языкового файла
IncludeModuleLangFile(__FILE__);

class thebrainstech_copyiblock extends CModule {

    var $MODULE_ID = "thebrainstech.copyiblock";

    //при обявлении класса код выполняеться сразу
    function __construct(){

    $arModuleVersion = array();
    include(__DIR__.'/version.php');

    $this->MODULE_ID = 'thebrainstech.copyiblock';
    $this->MODULE_VERSION = $arModuleVersion['VERSION'];
    $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];

    $this->MODULE_NAME = GetMessage('THEBRAINSE_COPYIBLOCK_MODULE_NAME');
    $this->MODULE_DESCRIPTION = GetMessage('THEBRAINSE_COPYIBLOCK_MODULE_DESC');
    $this->PARTNER_NAME = GetMessage('THEBRAINSE_COPYIBLOCK_PARTNER_NAME');
    $this->PARTNER_URI = GetMessage('THEBRAINSE_COPYIBLOCK_PARTNER_URL');

    }

    function DoInstall(){
        global $APPLICATION;
        RegisterModule($this->MODULE_ID);
        RegisterModuleDependences('main', 'OnAdminContextMenuShow', 'thebrainstech.copyiblock', 'TheBrains','showBtn');
        RegisterModuleDependences('main', 'OnAdminContextMenuShow', 'thebrainstech.copyiblock', 'TheBrains', 'actionBtn');
        $APPLICATION->IncludeAdminFile(GetMessage('THEBRAINSE_COPYIBLOCK_MODULE_INSTALL'),$_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/thebrainstech.copyiblock/install/step.php");
    }

    function DoUninstall(){
        global $APPLICATION;
        UnRegisterModule($this->MODULE_ID);
        UnRegisterModuleDependences('main', 'OnAdminContextMenuShow', 'thebrainstech.copyiblock', 'TheBrains','showBtn');
        UnRegisterModuleDependences('main', 'OnAdminContextMenuShow', 'thebrainstech.copyiblock', 'TheBrains', 'actionBtn');
        $APPLICATION->IncludeAdminFile(GetMessage('THEBRAINSE_COPYIBLOCK_MODULE_UNINSTALL'),$_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/thebrainstech.copyiblock/install/unstep.php");
    }

}
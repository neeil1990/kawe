<?php

use Bitrix\Main\Event;
use Bitrix\Main\EventManager;
use Bitrix\Main\EventResult;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;

if (class_exists('asd_iblock')) {
	return;
}

class asd_iblock extends CModule {

	var $MODULE_ID = 'asd.iblock';
	public $MODULE_VERSION;
	public $MODULE_VERSION_DATE;
	public $MODULE_NAME;
	public $MODULE_DESCRIPTION;
	public $PARTNER_NAME;
	public $PARTNER_URI;
	public $MODULE_GROUP_RIGHTS = 'N';

	public function __construct() {

		$arModuleVersion = array();

		include(__DIR__.'/version.php');

		if (is_array($arModuleVersion) && array_key_exists('VERSION', $arModuleVersion)) {
			$this->MODULE_VERSION = $arModuleVersion['VERSION'];
			$this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
		}

		$this->PARTNER_NAME = Loc::getMessage("ASD_PARTNER_NAME");
		$this->PARTNER_URI = 'http://www.d-it.ru/solutions/modules/';

		$this->MODULE_NAME = Loc::getMessage('ASD_IBLOCK_MODULE_NAME');
		$this->MODULE_DESCRIPTION = Loc::getMessage('ASD_IBLOCK_MODULE_DESCRIPTION');
	}

	public function DoInstall() {
		if (!$this->checkSystemRequirements()) {
			return;
		}

		$eventManager = EventManager::getInstance();
		$eventManager->registerEventHandlerCompatible('main', 'OnAdminListDisplay', 'asd.iblock', 'CASDiblockInterface', 'OnAdminListDisplayHandler');
		$eventManager->registerEventHandlerCompatible('main', 'OnAdminContextMenuShow', 'asd.iblock', 'CASDiblockInterface', 'OnAdminContextMenuShow');
		$eventManager->registerEventHandlerCompatible('main', 'OnAdminSubListDisplay', 'asd.iblock', 'CASDiblockInterface', 'OnAdminSubListDisplayHandler');
		$eventManager->registerEventHandlerCompatible('main', 'OnBeforeProlog', 'asd.iblock', 'CASDiblockAction', 'OnBeforePrologHandler');
		$eventManager->registerEventHandlerCompatible('main', 'OnAdminContextMenuShow', 'asd.iblock', 'CASDiblockInterface', 'OnAdminContextMenuShowHandler');
		$eventManager->registerEventHandlerCompatible('main', 'OnAdminTabControlBegin', 'asd.iblock', 'CASDiblockInterface', 'OnAdminTabControlBeginHandler');
		$eventManager->registerEventHandlerCompatible('iblock', 'OnAfterIBlockUpdate', 'asd.iblock', 'CASDiblockAction', 'OnAfterIBlockUpdateHandler');
		$eventManager->registerEventHandlerCompatible('iblock', 'OnIBlockPropertyBuildList', 'asd.iblock', 'CASDiblockPropCheckbox', 'GetUserTypeDescription');
		$eventManager->registerEventHandlerCompatible('iblock', 'OnIBlockPropertyBuildList', 'asd.iblock', 'CASDiblockPropCheckboxNum', 'GetUserTypeDescription');
		$eventManager->registerEventHandlerCompatible('iblock', 'OnIBlockPropertyBuildList', 'asd.iblock', 'CASDiblockPropPalette', 'GetUserTypeDescription');
		$eventManager->registerEventHandlerCompatible('iblock', 'OnIBlockPropertyBuildList', 'asd.iblock', 'CASDiblockPropSection', 'GetUserTypeDescription');
		unset($eventManager);

		CopyDirFiles($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/asd.iblock/install/admin/', $_SERVER['DOCUMENT_ROOT'].'/bitrix/admin/', true, true);
		CopyDirFiles($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/asd.iblock/install/js/', $_SERVER['DOCUMENT_ROOT'].'/bitrix/js/', true, true);
		CopyDirFiles($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/asd.iblock/install/panel/', $_SERVER['DOCUMENT_ROOT'].'/bitrix/panel/', true, true);
		CopyDirFiles($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/asd.iblock/install/tools/', $_SERVER['DOCUMENT_ROOT'].'/bitrix/tools/', true, true);
		ModuleManager::registerModule('asd.iblock');
		$this->ShowForm('OK', Loc::getMessage('ASD_MOD_INST_OK'));
	}

	public function DoUninstall() {
		$result = true;
		$event = new Event($this->MODULE_ID, 'OnModuleUnInstall');
		$event->send();
		$resultList = $event->getResults();
		if (!empty($resultList) && is_array($resultList)) {
			$errors = [];
			/** @var EventResult $eventResult */
			foreach ($resultList as $eventResult) {
				if ($eventResult->getType() === EventResult::ERROR) {
					$errors[] = Loc::getMessage(
						'ASD_ERR_MODULE_UNINSTALL_BLOCKED',
						['#MODULE_ID#' => (string)$eventResult->getModuleId()]
					);
				}
			}
			unset($eventResult);
			if (!empty($errors)) {
				$this->ShowForm('ERROR', implode('; ', $errors));
				$result = false;
			}
			unset($errors);
		}
		unset($resultList, $event);
		if (!$result) {
			return;
		}

		$eventManager = EventManager::getInstance();
		$eventManager->unRegisterEventHandler('main', 'OnAdminListDisplay', 'asd.iblock', 'CASDiblockInterface', 'OnAdminListDisplayHandler');
		$eventManager->unRegisterEventHandler('main', 'OnAdminContextMenuShow', 'asd.iblock', 'CASDiblockInterface', 'OnAdminContextMenuShow');
		$eventManager->unRegisterEventHandler('main', 'OnAdminSubListDisplay', 'asd.iblock', 'CASDiblockInterface', 'OnAdminSubListDisplayHandler');
		$eventManager->unRegisterEventHandler('main', 'OnBeforeProlog', 'asd.iblock', 'CASDiblockAction', 'OnBeforePrologHandler');
		$eventManager->unRegisterEventHandler('main', 'OnAdminContextMenuShow', 'asd.iblock', 'CASDiblockInterface', 'OnAdminContextMenuShowHandler');
		$eventManager->unRegisterEventHandler('main', 'OnAdminTabControlBegin', 'asd.iblock', 'CASDiblockInterface', 'OnAdminTabControlBeginHandler');
		$eventManager->unRegisterEventHandler('iblock', 'OnAfterIBlockUpdate', 'asd.iblock', 'CASDiblockAction', 'OnAfterIBlockUpdateHandler');
		$eventManager->unRegisterEventHandler('iblock', 'OnIBlockPropertyBuildList', 'asd.iblock', 'CASDiblockPropCheckbox', 'GetUserTypeDescription');
		$eventManager->unRegisterEventHandler('iblock', 'OnIBlockPropertyBuildList', 'asd.iblock', 'CASDiblockPropCheckboxNum', 'GetUserTypeDescription');
		$eventManager->unRegisterEventHandler('iblock', 'OnIBlockPropertyBuildList', 'asd.iblock', 'CASDiblockPropPalette', 'GetUserTypeDescription');
		$eventManager->unRegisterEventHandler('iblock', 'OnIBlockPropertyBuildList', 'asd.iblock', 'CASDiblockPropSection', 'GetUserTypeDescription');
		unset($eventManager);

		DeleteDirFiles($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/asd.iblock/install/admin", $_SERVER['DOCUMENT_ROOT']."/bitrix/admin");
		DeleteDirFilesEx('/bitrix/js/asd.iblock/');
		DeleteDirFilesEx('/bitrix/panel/asd.iblock/');
		DeleteDirFilesEx('/bitrix/tools/asd.iblock/');

		ModuleManager::unRegisterModule('asd.iblock');
		$this->ShowForm('OK', Loc::getMessage('ASD_MOD_UNINST_OK'));
	}

	private function ShowForm($type, $message, $buttonName='') {
		global $APPLICATION;

		$buttonName = (string)$buttonName;
		if ($buttonName == '') {
			$buttonName = Loc::getMessage('ASD_MOD_BACK');
		}

		$keys = array_keys($GLOBALS);
		for($i=0, $intCount = count($keys); $i < $intCount; $i++) {
			if($keys[$i]!='i' && $keys[$i]!='GLOBALS' && $keys[$i]!='strTitle' && $keys[$i]!='filepath') {
				global ${$keys[$i]};
			}
		}

		$APPLICATION->SetTitle(Loc::getMessage('ASD_IBLOCK_MODULE_NAME'));
		include($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_admin_after.php');
		$message = new CAdminMessage(array('MESSAGE' => $message, 'TYPE' => $type));
		echo $message->Show();
		unset($message);
		?>
		<form action="<?= $APPLICATION->GetCurPage()?>" method="get">
		<p>
			<input type="hidden" name="lang" value="<? echo LANGUAGE_ID; ?>" />
			<input type="submit" value="<?=$buttonName; ?>" />
		</p>
		</form>
		<?
		include($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/epilog_admin.php');
		die();
	}

	protected function checkSystemRequirements(): bool
	{
		$result = true;
		foreach ($this->getRequiredModules() as $moduleId => $needVersion)
		{
			if (!ModuleManager::isModuleInstalled($moduleId))
			{
				$this->ShowForm('ERROR', Loc::getMessage('ASD_NEED_MODULES', ['#MODULE#' => $moduleId]));
				$result = false;
				continue;
			}
			if (is_string($needVersion))
			{
				$currentVersion = ModuleManager::getVersion($moduleId);
				if ($currentVersion === false)
				{
					$this->ShowForm('ERROR', Loc::getMessage(
						'ASD_ERR_MODULE_VERSION_ABSENT',
						['#MODULE_ID#' => $moduleId]
					));
					$result = false;
				}
				elseif (!version_compare($currentVersion, $needVersion, '>='))
				{
					$this->ShowForm('ERROR', Loc::getMessage(
						'ASD_ERR_MODULE_MIN_VERSION',
						[
							'#MODULE_ID#' => $moduleId,
							'#VERSION#' => $needVersion
						]
					));
					$result = false;
				}
				unset($currentVersion);
			}
		}
		return $result;
	}

	/**
	 * @return array
	 */
	protected function getRequiredModules(): array
	{
		return [
			'main' => '14.0.3',
			'iblock' => '16.0.1'
		];
	}
}
<?php
if (!$USER->IsAdmin())
	return;

use Bitrix\Main\Loader;
use Bitrix\Main\Web\Uri;
use Bitrix\Main\Application;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

Loader::includeModule('imyie.orderminprice');

$request = Application::getInstance()->getContext()->getRequest();
$uriString = $request->getRequestUri();
$uri = new Uri($uriString);
$redirect = $uri->getUri();

$aTabs = array(
	array(
		"DIV" => "imyie_tab1",
		"TAB" => Loc::getMessage("IMYIE.ORDER_MIN_PRICE.SETTINGS"),
		"ICON" => "settings",
		"TITLE" => Loc::getMessage("IMYIE.ORDER_MIN_PRICE.TITLE"),
	),
);
$arAllOptions = array(
	// watermart file
	'main' => array(
		array("on", Loc::getMessage("IMYIE.ORDER_MIN_PRICE.ON"), '', array('checkbox', 'Y')),
		array("min_price", Loc::getMessage("IMYIE.ORDER_MIN_PRICE.MIN_PRICE"), '', array('text', '')),
		array("error_message", Loc::getMessage("IMYIE.MORE_WATERMARK.ERROR_MESSAGE"), '', array('text', '')),
	),
);

if ((isset($_REQUEST['save']) || isset($_REQUEST['apply'])) && check_bitrix_sessid()) {
	__AdmSettingsSaveOptions('imyie.orderminprice', $arAllOptions['main']);
	LocalRedirect($redirect);
}

$tabControl = new CAdminTabControl("tabControl", $aTabs);

?><form method="post" action="<?=$redirect?>" name="imyie_omp"><?
	echo bitrix_sessid_post();

	$tabControl->Begin();

	$tabControl->BeginNextTab();

	__AdmSettingsDrawList('imyie.orderminprice', $arAllOptions["main"]);

	$tabControl->Buttons(array());
	$tabControl->End();

?></form>

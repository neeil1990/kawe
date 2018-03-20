<?php
if (!$USER->IsAdmin())
	return;

IncludeModuleLangFile(__FILE__);

CModule::IncludeModule('imyie.morewatermark');
CModule::IncludeModule('iblock');

$arrIBlocks = array();
$arIBlocks = array();
$arIBlocks[0] = GetMessage('IMYIE.MORE_WATERMARK.IBLOCKS_EMPTY');
$arrPropList = array();
$res = CIBlock::GetList(array(), array('ACTIVE' => 'Y'), true);
while ($arFields = $res->Fetch()) {
	$arrIBlocks[] = $arFields;
	$arIBlocks[$arFields['ID']] = '['.$arFields['ID'].'] '.$arFields['NAME'];
	// properties
	$resProp = CIBlockProperty::GetList(array("sort"=>"asc", "name"=>"asc"),array("IBLOCK_ID"=>$arFields['ID']));
	$arrPropList[$arFields['ID']] = array();
	while($propFields = $resProp->GetNext()){
		if($propFields['PROPERTY_TYPE']!='F')
			continue;
		$arrPropList[$arFields['ID']][] = $propFields;
	}
}
$arIBlocksOpt = explode(',', COption::GetOptionString('imyie.morewatermark', 'iblocks', ''));

$aTabs = array(
	array(
		"DIV" => "imyie_tab1",
		"TAB" => GetMessage("IMYIE.MORE_WATERMARK.SETTINGS"),
		"ICON" => "settings",
		"TITLE" => GetMessage("IMYIE.MORE_WATERMARK.TITLE"),
	),
);
$arWMMethodList = array(
	1 => GetMessage("IMYIE.MORE_WATERMARK.METHOOD.MET1"),
	2 => GetMessage("IMYIE.MORE_WATERMARK.METHOOD.MET2"),
);
$arWMPosition = array(
	'tl' => GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_POSITION_t1"),
	'tc' => GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_POSITION_tc"),
	'tr' => GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_POSITION_tr"),
	'ml' => GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_POSITION_ml"),
	'mc' => GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_POSITION_mc"),
	'mr' => GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_POSITION_mr"),
	'bl' => GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_POSITION_bl"),
	'bc' => GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_POSITION_bc"),
	'br' => GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_POSITION_br"),
);
$arAllOptions = array(
	// main settings
	'wm_main_settings' => array(
		array("watermart_methood", GetMessage("IMYIE.MORE_WATERMARK.METHOOD"), '', array("selectbox", $arWMMethodList)),
	),
	// watermart file
	'wm_settings_file' => array(
		array("use_watermart_file", GetMessage("IMYIE.MORE_WATERMARK.USE_WATERMARK_FILE"), '', array("checkbox", 'Y')),
		array("watermart_file_position", GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_POSITION"), '', array("selectbox", $arWMPosition)),
		array("watermart_file_alpha", GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_FILE_ALPHA"), '', array("text")),
	),
	// watermart text
	'wm_settings_text' => array(
		array("use_watermart_text", GetMessage("IMYIE.MORE_WATERMARK.USE_WATERMARK_TEXT"), '', array("checkbox", 'Y')),
		array("watermart_text", GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_TEXT"), '', array("text")),
		array("watermart_text_position", GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_POSITION"), '', array("selectbox", $arWMPosition)),
		array("watermart_text_size", GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_TEXT_SIZE"), '', array("text")),
		array("watermart_text_color", GetMessage("IMYIE.MORE_WATERMARK.WATERMARK_TEXT_COLOR"), '', array("text")),
	),
	'data' => array(
		array("iblocks", GetMessage("IMYIE.MORE_WATERMARK.IBLOCKS"), '', array("multiselectbox", $arIBlocks)),
	),
);
if (is_array($arIBlocksOpt) && count($arIBlocksOpt) > 0 && $arIBlocksOpt[0] != 0){
	foreach ($arrIBlocks as $arFields){
		if(!in_array($arFields['ID'],$arIBlocksOpt))
			continue;

		$arAllOptions['iblock_'.$arFields['ID']] = array(
			array('set_ib'.$arFields['ID'].'_prev_pic', GetMessage('IMYIE.MORE_WATERMARK.DATA_PREVIEW_PICTURE'), '', array("checkbox", 'Y')),
			array('set_ib'.$arFields['ID'].'_det_pic', GetMessage('IMYIE.MORE_WATERMARK.DATA_DETAIL_PICTURE'), '', array("checkbox", 'Y')),
		);

		if (is_array($arrPropList[$arFields['ID']]) && count($arrPropList[$arFields['ID']]) > 0) {
			foreach($arrPropList[$arFields['ID']] as $propField){
				$arAllOptions['iblock_'.$arFields['ID']][] = array('set_ib'.$arFields['ID'].'_prop'.$propField['ID'], '['.$propField['ID'].'] ['.$propField['CODE'].'] '.$propField['NAME'], '', array("checkbox", 'Y'));
			}
		}
	}
}

if( (isset($_REQUEST["save"]) || isset($_REQUEST["apply"])) && check_bitrix_sessid()){
	__AdmSettingsSaveOptions('imyie.morewatermark',$arAllOptions['wm_settings_file']);
	COption::SetOptionString('imyie.morewatermark', 'watermark_file', $_REQUEST['watermark_file']);
	__AdmSettingsSaveOptions('imyie.morewatermark',$arAllOptions['wm_settings_text']);
	COption::SetOptionString('imyie.morewatermark', 'watermark_text_font', $_REQUEST['watermark_text_font']);
	__AdmSettingsSaveOptions('imyie.morewatermark',$arAllOptions['data']);
	foreach($arrIBlocks as $arFields){
		if(!in_array($arFields['ID'],$arIBlocksOpt))
			continue;
		__AdmSettingsSaveOptions('imyie.morewatermark',$arAllOptions['iblock_'.$arFields['ID']]);
	}
	LocalRedirect( $APPLICATION->GetCurPageParam() );
}

$tabControl = new CAdminTabControl("tabControl", $aTabs);

?><form method="post" action="<?=$APPLICATION->GetCurPage()?>?mid=<?=urlencode($mid)?>&amp;lang=<?=LANGUAGE_ID?>" name="imyie_wm"><?
	echo bitrix_sessid_post();

	$tabControl->Begin();

	$tabControl->BeginNextTab();

	__AdmSettingsDrawRow('imyie.morewatermark', GetMessage('IMYIE.MORE_WATERMARK.WM_MAIN_SETTINGS'));
	__AdmSettingsDrawList('imyie.morewatermark', $arAllOptions['wm_main_settings']);
	__AdmSettingsDrawRow('imyie.morewatermark', GetMessage('IMYIE.MORE_WATERMARK.WM_SETTINGS'));
	__AdmSettingsDrawList('imyie.morewatermark', $arAllOptions['wm_settings_file']);
	?><tr><?
		?><td><?=GetMessage('IMYIE.MORE_WATERMARK.WATERMARK_FILE')?></td><?
		?><td><?
			$watermark_file = COption::GetOptionString('imyie.morewatermark', 'watermark_file', '');
			?><input type="text" name="watermark_file" value="<?=$watermark_file?>" /><?
			?><input type="button" value="<?=GetMessage("IMYIE.MORE_WATERMARK.BTN_FILE_DIALOG")?>" OnClick="WMFile_FileDialog()"><?
			CAdminFileDialog::ShowScript(
				array(
					"event" => "WMFile_FileDialog",
					"arResultDest" => array("FORM_NAME" => "imyie_wm", "FORM_ELEMENT_NAME" => "watermark_file"),
					"arPath" => array("PATH" => ""),
					"select" => 'F',// F - file only, D - folder only
					"operation" => 'O',// O - open, S - save
					"showUploadTab" => true,
					"showAddToMenuTab" => false,
					"fileFilter" => 'png',
					"allowAllFiles" => true,
					"SaveConfig" => true,
				)
			);
		?></td><?
	?></tr><?
	?><tr><td colspan="2"><hr /></td></tr><?
	__AdmSettingsDrawList('imyie.morewatermark', $arAllOptions['wm_settings_text']);
	?><tr><?
		?><td><?=GetMessage('IMYIE.MORE_WATERMARK.WATERMARK_TEXT_FONT')?></td><?
		?><td><?
			$watermark_text_font = COption::GetOptionString('imyie.morewatermark', 'watermark_text_font', '');
			?><input type="text" name="watermark_text_font" value="<?=$watermark_text_font?>" /><?
			?><input type="button" value="<?=GetMessage("IMYIE.MORE_WATERMARK.BTN_FILE_DIALOG")?>" OnClick="WMText_FileDialog()"><?
			CAdminFileDialog::ShowScript(
				array(
					"event" => "WMText_FileDialog",
					"arResultDest" => array("FORM_NAME" => "imyie_wm", "FORM_ELEMENT_NAME" => "watermark_text_font"),
					"arPath" => array("PATH" => "/bitrix/fonts/"),
					"select" => 'F',// F - file only, D - folder only
					"operation" => 'O',// O - open, S - save
					"showUploadTab" => true,
					"showAddToMenuTab" => false,
					"fileFilter" => 'ttf',
					"allowAllFiles" => true,
					"SaveConfig" => true,
				)
			);
		?></td><?
	?></tr><?

	__AdmSettingsDrawRow('imyie.morewatermark', GetMessage('IMYIE.MORE_WATERMARK.DATA'));
	__AdmSettingsDrawList('imyie.morewatermark', $arAllOptions['data']);

	$arIBlocksOpt = explode(',',COption::GetOptionString('imyie.morewatermark', 'iblocks', '') );
	if (is_array($arIBlocksOpt) && count($arIBlocksOpt)>0 && $arIBlocksOpt[0]!=0){
		?><tr><?
			?><td colspan="2"><?

				foreach($arrIBlocks as $arFields){
					if(!in_array($arFields['ID'],$arIBlocksOpt))
						continue;
					?><table class="internal" style="min-width:250px;float:left;margin-right:20px;margin-bottom:20px;"><?
						?><tbody><?
							__AdmSettingsDrawRow('imyie.morewatermark', $arFields['NAME']);
							__AdmSettingsDrawList('imyie.morewatermark', $arAllOptions['iblock_'.$arFields['ID']]);
						?></tbody><?
					?></table><?
				}

			?></td><?
		?></tr><?
	} else {
		__AdmSettingsDrawRow('imyie.morewatermark', array('note'=>GetMessage('IMYIE.MORE_WATERMARK.EMPTY_IBLOCKS')));
	}

	$tabControl->Buttons(array());
	$tabControl->End();

?></form>
<?
$module_id = 'arturgolubev.lazyload';

$module_name = str_replace('.', '_', $module_id);
$MODULE_NAME = strtoupper($module_name);

IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/options.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$module_id."/options.php");

global $USER, $APPLICATION;
if (!$USER->IsAdmin()) return;

$APPLICATION->SetAdditionalCSS("/bitrix/css/arturgolubev.lazyload/style.css");

$arEffects = array(
	"fadeIn" => GetMessage($MODULE_NAME . "_FADE_IN_ENABLE"),
	"show" => GetMessage($MODULE_NAME . "_FADE_IN_DISABLED"),
);

$arAutoLoading = array(
	"disabled" => GetMessage($MODULE_NAME . "_SIMPLE_DISABLE"),
	"enabled" => GetMessage($MODULE_NAME . "_SIMPLE_ENABLE"),
);

$arPreloaderImage = array();
$arPreloaderImage["loading"] = "/bitrix/images/arturgolubev.lazyload/loaders/loading.gif";
$arPreloaderImage["loading2"] = "/bitrix/images/arturgolubev.lazyload/loaders/loading2.gif";
$arPreloaderImage["loading3"] = "/bitrix/images/arturgolubev.lazyload/loaders/loading3.gif";
$arPreloaderImage["loading4"] = "/bitrix/images/arturgolubev.lazyload/loaders/loading4.gif";
$arPreloaderImage["loading5"] = "/bitrix/images/arturgolubev.lazyload/loaders/loading5.gif";

$arPreloaderImageSize = array(
	"pw64" => "64x64",
	"pw32" => "32x32",
	"pw16" => "16x16",
);

$arOptions = array(
    "main" => array(
        array("enable", GetMessage($MODULE_NAME . "_ENABLE"), "N", array("checkbox")),
        array("jquery", GetMessage($MODULE_NAME . "_JQUERY"), "N", array("checkbox")),
        array("selectors", GetMessage($MODULE_NAME . "_SELECTORS"), "", array("textarea", 5, 40)),
        // array("active_buttons", GetMessage($MODULE_NAME . "_ACTIVE_BUTTONS"), "", array("textarea", 5, 40)),
        // array("note" =>  GetMessage($MODULE_NAME . "_ACTIVE_BUTTONS_NOTE")),
        array("page_exceptions", GetMessage($MODULE_NAME . "_PAGE_EXCEPTION"), "", array("textarea", 5, 40)),
    ),
	"visual" => array(
		array("effect_type", GetMessage($MODULE_NAME . "_EFFECT_TYPE"), "", array("selectbox", $arEffects)),
		array("effect_speed", GetMessage($MODULE_NAME . "_EFFECT_SPEED"), "500", array("text")),
		
		GetMessage($MODULE_NAME . "_PRELOADER_SETTING"),
        array("disable_preloader", GetMessage($MODULE_NAME . "_DISABLE_PRELOADER"), "N", array("checkbox")),
        array("preloader_image", GetMessage($MODULE_NAME . "_PRELOADER_IMAGE"), "N", array("selectbox", $arPreloaderImage)),
        array("preloader_image_size", GetMessage($MODULE_NAME . "_PRELOADER_IMAGE_SIZE"), "N", array("selectbox", $arPreloaderImageSize)),
        array("preloader_for_all", GetMessage($MODULE_NAME . "_SHOW_PRELOADER_FOR_ALL"), "N", array("checkbox")),
		
		GetMessage($MODULE_NAME . "_ADDITIONAL_FEATURES"),
		array("auto_loading", GetMessage($MODULE_NAME . "_AUTO_LOADING"), "disabled", array("selectbox", $arAutoLoading)),
	),
	"system" => array(
        array("debug", GetMessage($MODULE_NAME . "_DEBUG"), "N", array("checkbox")),
	),
);



$arTabs = array(
    array("DIV" => "edit_main", "TAB" => GetMessage("MAIN_TAB_SET"), "TITLE" => GetMessage("MAIN_TAB_TITLE_SET"), "OPTIONS"=>"main"),
    array("DIV" => "edit_visual", "TAB" => GetMessage($MODULE_NAME."_VISUAL_TAB_SET"), "TITLE" => GetMessage($MODULE_NAME."_VISUAL_TAB_SET"), "OPTIONS"=>"visual"),
    array("DIV" => "edit_system", "TAB" => GetMessage($MODULE_NAME."_SYSTEM_SETTINGS"), "TITLE" => GetMessage($MODULE_NAME."_SYSTEM_SETTINGS"), "OPTIONS"=>"system"),
);
$tabControl = new CAdminTabControl("tabControl", $arTabs);

// ****** SaveBlock
if($REQUEST_METHOD=="POST" && strlen($Update.$Apply)>0 && check_bitrix_sessid())
{
	CAdminNotify::Add(array('MESSAGE' => GetMessage($MODULE_NAME."_CLEAR_CACHE"),  'TAG' => $module_name."_clear_cache", 'MODULE_ID' => $module_id, 'ENABLE_CLOSE' => 'Y'));
	
	foreach ($arOptions as $aOptGroup) {
		foreach ($aOptGroup as $option) {
			__AdmSettingsSaveOption($module_id, $option);
		}
	}
	
    if (strlen($Update) > 0 && strlen($_REQUEST["back_url_settings"]) > 0)
        LocalRedirect($_REQUEST["back_url_settings"]);
    else
        LocalRedirect($APPLICATION->GetCurPage() . "?mid=" . urlencode($mid) . "&lang=" . urlencode(LANGUAGE_ID) . "&back_url_settings=" . urlencode($_REQUEST["back_url_settings"]) . "&" . $tabControl->ActiveTabParam());
}
?>

<?if(!CModule::IncludeModule($module_id)){?>
	<div class="adm-info-message-wrap adm-info-message-red">
		<div class="adm-info-message">
			<div class="adm-info-message-title"><?//=GetMessage($MODULE_NAME . "_ALLOW_URL_FOPEN_NOT_FOUND")?></div>
			<?=GetMessage("ARTURGOLUBEV_LAZYLOAD_DEMO_IS_EXPIRED")?>
			<div class="adm-info-message-icon"></div>
		</div>
	</div>
<?}?>

<form method="post" action="<?echo $APPLICATION->GetCurPage()?>?mid=<?=urlencode($mid)?>&amp;lang=<?=LANGUAGE_ID?>">
	<?$tabControl->Begin();?>
	
	<?foreach($arTabs as $key=>$tab):
		$tabControl->BeginNextTab();
			if(!class_exists('DOMDocument')):?>
			<tr>
				<td colspan="2">
					<div class="adm-info-message-wrap">
						<div class="adm-info-message">
							<?=GetMessage($MODULE_NAME . "_DOMD_NOT_FOUND")?>
						</div>
					</div>
				</td>
			</tr>
			<?endif;
			
			$settingList = $arOptions[$tab["OPTIONS"]];
			
			foreach ($settingList as $Option) {
				if($Option[0] == 'preloader_image'):
					$optionValue = COption::GetOptionString($module_id,$Option[0]);
				?>
				<tr>
					<td class="adm-detail-content-cell-l"><?=$Option[1]?></td>
					<td class="adm-detail-content-cell-r">
						<?foreach($Option["3"]["1"] as $bg_key=>$bg_src):?>
							<div style="display:inline-block; text-align:center;">
								<label for="<?=$Option[0]?>_<?=$bg_key?>" class="ag-pw32 agll0708bg" style="width: 48px; height: 48px; margin: 5px; display: inline-block; background-image: url(<?=$bg_src?>);"></label>
								<br>
								<input type="radio" <?if($optionValue == $bg_key) echo 'checked';?> id="<?=$Option[0]?>_<?=$bg_key?>" value="<?=$bg_key?>" name="<?=$Option[0]?>">
							</div>
						<?endforeach;?>
					</td>
				</tr>
				<?
				else:
					__AdmSettingsDrawRow($module_id, $Option);
				endif;
			}
	endforeach;?>
	
	<?$tabControl->Buttons();?>
		<input type="submit" name="Update" value="<?=GetMessage("MAIN_SAVE")?>" title="<?=GetMessage("MAIN_OPT_SAVE_TITLE")?>">
		
		<input type="submit" name="Apply" value="<?=GetMessage("MAIN_OPT_APPLY")?>" title="<?=GetMessage("MAIN_OPT_APPLY_TITLE")?>">
		
		<?if(strlen($_REQUEST["back_url_settings"])>0):?>
			<input type="hidden" name="back_url_settings" value="<?=htmlspecialchars($_REQUEST["back_url_settings"])?>">
		<?endif?>
		
		<?=bitrix_sessid_post();?>
	<?$tabControl->End();?>
</form>

<?=BeginNote();?>
	<?=GetMessage($MODULE_NAME."_SETTING_DOP_INFO");?>
<?=EndNote();?>
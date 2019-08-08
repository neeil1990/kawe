<?
$module_id = 'arturgolubev.lazyload';

$module_name = str_replace('.', '_', $module_id);
$MODULE_NAME = strtoupper($module_name);

IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/options.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/".$module_id."/options.php");

global $USER, $APPLICATION;
if (!$USER->IsAdmin()) return;

$arEffects = array();
$arEffects["fadeIn"] = GetMessage($MODULE_NAME . "_FADE_IN_ENABLE");
$arEffects["show"] = GetMessage($MODULE_NAME . "_FADE_IN_DISABLED");

$arOptions = array(
    "main" => array(
        array("enable", GetMessage($MODULE_NAME . "_ENABLE"), "N", array("checkbox")),
        array("jquery", GetMessage($MODULE_NAME . "_JQUERY"), "N", array("checkbox")),
        array("selectors", GetMessage($MODULE_NAME . "_SELECTORS"), "", array("textarea", 5, 40)),
        array("active_buttons", GetMessage($MODULE_NAME . "_ACTIVE_BUTTONS"), "", array("textarea", 5, 40)),
        array("note" =>  GetMessage($MODULE_NAME . "_ACTIVE_BUTTONS_NOTE")),
        array("page_exceptions", GetMessage($MODULE_NAME . "_PAGE_EXCEPTION"), "", array("textarea", 5, 40)),
        GetMessage($MODULE_NAME . "_SYSTEM_SETTINGS"),
        array("debug", GetMessage($MODULE_NAME . "_DEBUG"), "N", array("checkbox")),
    ),
	"visual" => array(
		array("effect_type", GetMessage($MODULE_NAME . "_EFFECT_TYPE"), "", array("selectbox", $arEffects)),
		array("effect_speed", GetMessage($MODULE_NAME . "_EFFECT_SPEED"), "500", array("text")),
	),
);



$arTabs = array(
    array("DIV" => "edit1", "TAB" => GetMessage("MAIN_TAB_SET"), "TITLE" => GetMessage("MAIN_TAB_TITLE_SET"), "OPTIONS"=>"main"),
    array("DIV" => "edit2", "TAB" => GetMessage($MODULE_NAME."_VISUAL_TAB_SET"), "TITLE" => GetMessage($MODULE_NAME."_VISUAL_TAB_SET"), "OPTIONS"=>"visual"),
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
				__AdmSettingsDrawRow($module_id, $Option);
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
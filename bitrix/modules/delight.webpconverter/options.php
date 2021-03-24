<?
if (!$USER->IsAdmin())
    return;

\Bitrix\Main\UI\Extension::load("ui.hint");
IncludeModuleLangFile(__FILE__);

$MODULE_ID = "delight.webpconverter";

$arAllOptions = array(
    array(
		"name" => "enabled",
		"title" =>GetMessage("DELIGHT_WEBP_SETTINGS_ENABLED"),
		"default_value" => "Y",
		"type" => array("checkbox", "Y"),
	),
	array(
		"name" => "attributes",
		"title" =>GetMessage("DELIGHT_WEBP_SETTINGS_ATTRIBUTES"),
		"default_value" => "data-src\nsrc",
		"type" => array("textarea", 5, 50),
		"hint" => GetMessage("DELIGHT_WEBP_SETTINGS_ATTRIBUTES_HINT"),
		"attrs" => "oninput='FilterField(this);'",
	),
	array(
		"name" => "limitation_url",
		"title" =>GetMessage("DELIGHT_WEBP_SETTINGS_LIMITATION_URL"),
		"default_value" => "",
		"type" => array("textarea", 5, 50),
		"hint" => GetMessage("DELIGHT_WEBP_SETTINGS_LIMITATION_URL_HINT"),
		"attrs" => "",
	),
	GetMessage("DELIGHT_WEBP_SETTINGS_SERVICE_INFORMATION")
);
$aTabs = array(
    array("DIV" => "edit1", "TAB" => GetMessage("MAIN_TAB_SET"), "ICON" => "ib_settings", "TITLE" => GetMessage("MAIN_TAB_TITLE_SET")),
);
$tabControl = new CAdminTabControl("tabControl", $aTabs);
$check_conversion = DelightWebpConverter::CheckConvertionMethods();
if ($REQUEST_METHOD == "POST" && strlen($Update . $Apply . $RestoreDefaults) > 0 && check_bitrix_sessid()) {
    if (strlen($RestoreDefaults) > 0) {
        COption::RemoveOption($MODULE_ID);
    } else {
        foreach ($arAllOptions as $arOption) {
            $val = $_REQUEST[$arOption["name"]];
            if (isset($arOption["type"]) && isset($arOption["type"][0]) && $arOption["type"][0] == "checkbox" && $val != "Y")
                $val = "N";
			if($arOption["name"] == "attributes"){
				$val = trim(str_replace(" ","",$val));
				if(!preg_match('/^[\da-z-_\s]*$/i', $val)){
					continue;
				}
				if(empty($val)){
					$val = $arOption["default_value"];
				}
			}
            \Bitrix\Main\Config\Option::set($MODULE_ID, $arOption["name"], $val);
        }
    }
	DelightWebpConverter::HandlingCheckConvertionMethods($check_conversion);

    if (strlen($Update) > 0 && strlen($_REQUEST["back_url_settings"]) > 0)
        LocalRedirect($_REQUEST["back_url_settings"]);
    else
        LocalRedirect($APPLICATION->GetCurPage() . "?mid=" . urlencode($mid) . "&lang=" . urlencode(LANGUAGE_ID) . "&back_url_settings=" . urlencode($_REQUEST["back_url_settings"]) . "&" . $tabControl->ActiveTabParam());
}

$tabControl->Begin();
?>
<form method="post" name="delight_webpconverter_settings" id="delight_webpconverter_settings" action="<? echo $APPLICATION->GetCurPage() ?>?mid=<?= urlencode($mid) ?>&amp;lang=<? echo LANGUAGE_ID ?>">
	<? $tabControl->BeginNextTab(); ?>
	<?
	foreach ($arAllOptions as $arOption) {
		if (count($arOption) == 1) { ?>
			<tr class="heading">
				<td colspan="2"><?=$arOption?></td>
			</tr>
		<? } else {
			$val = \Bitrix\Main\Config\Option::get($MODULE_ID, $arOption["name"], $arOption["default_value"]);
			$type = $arOption["type"];
			?>
				<tr>
					<td width="40%" nowrap <? if ($type[0] == "textarea") echo 'class="adm-detail-valign-top"' ?>>
						<label for="<? echo htmlspecialcharsbx($arOption["name"]) ?>"><? echo $arOption["title"] ?>:</label>
						<? if(isset($arOption["hint"])){ ?>
							<span data-hint="<?=$arOption["hint"]?>" class="ui-hint"><span class="ui-hint-icon"></span></span>
						<? } ?>
					</td>
					<td width="60%">
						<? if ($type[0] == "checkbox"): ?>
							<input type="checkbox" id="<? echo htmlspecialcharsbx($arOption["name"]) ?>" name="<? echo htmlspecialcharsbx($arOption["name"]) ?>" value="Y"<? if ($val == "Y") echo" checked"; ?>>
						<? elseif ($type[0] == "text"): ?>
							<input type="text" size="<? echo $type[1] ?>" maxlength="255" value="<? echo htmlspecialcharsbx($val) ?>" name="<? echo htmlspecialcharsbx($arOption["name"]) ?>">
						<? elseif ($type[0] == "textarea"): ?>
							<textarea rows="<? echo $type[1] ?>" cols="<? echo $type[2] ?>" name="<? echo htmlspecialcharsbx($arOption["name"]) ?>" <? echo htmlspecialcharsbx($arOption["attrs"]) ?>><? echo htmlspecialcharsbx($val) ?></textarea>
						<? elseif ($type[0] == "selectbox"): ?>
							<select name="<? echo htmlspecialcharsbx($arOption["name"]) ?>">
								<? foreach ($type[1] as $t_key=>$t_val) { ?>
									<option value="<?=htmlspecialcharsbx($t_key);?>" <?=(htmlspecialcharsbx($val) == htmlspecialcharsbx($t_key)) ? "selected" : "" ?>>
										<?=htmlspecialcharsbx($t_val);?>
									</option>
								<? } ?>
							</select>
						<? endif ?>
					</td>
				</tr>
			<?
		}
	}
	if(isset($check_conversion["success"])){
		?><tr><td colspan="2"><div style="border: 1px solid; border-color: #c4ced2 #dce7ed #dce7ed;padding:15px;background-color:#fff;">
			<? if($check_conversion["success"] === false){
				?><strong><?=GetMessage("DELIGHT_WEBP_SETTINGS_CONVERTER_TEST")?></strong> <?=GetMessage("DELIGHT_WEBP_SETTINGS_CONVERTER_TEST_FAIL")?><br/><? 
				echo GetMessage("DELIGHT_WEBP_SETTINGS_CONVERTATION_ERROR_TITLE")."</br>";
				?>
				<ul style="font-size:14px; margin-top:5px;">
					<li><a href="https://www.php.net/manual/ru/book.image.php" target="_blank"><i>GD (<?=GetMessage("DELIGHT_WEBP_SETTINGS_CONVERTER_GD_NEED_VERSION")?>)</i></a></li>
					<li><a href="https://github.com/libvips/php-vips-ext" target="_blank"><i>vips</i></a></li>
					<li><a href="https://github.com/Imagick/imagick" target="_blank"><i>imagick</i></a></li>
					<li><a href="https://www.php.net/manual/en/book.gmagick.php" target="_blank"><i>gmagick</i></a></li>
				</ul>
				<? echo GetMessage("DELIGHT_WEBP_SETTINGS_LIBRARY_HOSTING_UPDATE");
			} else {
				foreach($check_conversion["converters"] as $converter){
					if($converter["success"]){
						if($converter["name"] == "gd"){
							$gd_version = mb_substr(filter_var(gd_info()["GD Version"], FILTER_SANITIZE_NUMBER_INT), 0, 2);
							if($gd_version < 22){
								echo "<strong>".GetMessage("DELIGHT_WEBP_SETTINGS_CONVERTER_TEST_FAIL_GD")."</strong><br/>";
								echo GetMessage("DELIGHT_WEBP_SETTINGS_CONVERTER_GD_CURRENT_VERSION").gd_info()["GD Version"]."</br>".GetMessage("DELIGHT_WEBP_SETTINGS_CONVERTER_GD_NEED_VERSION")."<br/>".GetMessage("DELIGHT_WEBP_SETTINGS_CONVERTER_GD_ALTERNATIVE")."<br/>";
								?>
								<ul style="font-size:14px; margin-top:5px;">
									<li><a href="https://github.com/libvips/php-vips-ext" target="_blank"><i>vips</i></a></li>
									<li><a href="https://github.com/Imagick/imagick" target="_blank"><i>imagick</i></a></li>
									<li><a href="https://www.php.net/manual/en/book.gmagick.php" target="_blank"><i>gmagick</i></a></li>
								</ul>
								<?=GetMessage("DELIGHT_WEBP_SETTINGS_LIBRARY_HOSTING_UPDATE")?>
								<?
								break;
							}
						}
						?><strong><?=GetMessage("DELIGHT_WEBP_SETTINGS_CONVERTER_TEST")?></strong> <?=GetMessage("DELIGHT_WEBP_SETTINGS_CONVERTER_TEST_SUCCESS")?><br/>
						<strong><?=GetMessage("DELIGHT_WEBP_SETTINGS_CURRENT_CONVERTER")?></strong> <?=$converter["name"]?><br/><?
					}
				}
			}
		?></div></td></tr><?
	}
	?>
    <? $tabControl->Buttons(); ?>
		<input type="submit" name="Update" value="<?= GetMessage("DELIGHT_WEBP_SETTINGS_SAVE") ?>" title="<?= GetMessage("DELIGHT_WEBP_SETTINGS_SAVE") ?>" class="adm-btn-save">
		<input type="submit" name="Apply" value="<?= GetMessage("DELIGHT_WEBP_SETTINGS_APPLY") ?>" title="<?= GetMessage("DELIGHT_WEBP_SETTINGS_APPLY") ?>">
		<? if (strlen($_REQUEST["back_url_settings"]) > 0): ?>
			<input type="button" name="Cancel" value="<?= GetMessage("DELIGHT_WEBP_SETTINGS_CANCEL") ?>" title="<?= GetMessage("DELIGHT_WEBP_SETTINGS_CANCEL") ?>" onclick="window.location = '<? echo htmlspecialcharsbx(CUtil::addslashes($_REQUEST["back_url_settings"])) ?>'">
			<input type="hidden" name="back_url_settings" value="<?= htmlspecialcharsbx($_REQUEST["back_url_settings"]) ?>">
		<? endif ?>
		<input type="submit" name="RestoreDefaults" title="<? echo GetMessage("DELIGHT_WEBP_RESTORE_DEFAULTS") ?>" OnClick="return confirm('<? echo AddSlashes(GetMessage("DELIGHT_WEBP_RESTORE_DEFAULTS_WARNING")) ?>')" value="<? echo GetMessage("DELIGHT_WEBP_RESTORE_DEFAULTS") ?>">
		<?= bitrix_sessid_post(); ?>
    <? $tabControl->End(); ?>
</form>
<script>
    BX.ready(function() {
        BX.UI.Hint.init(BX('delight_webpconverter_settings'));
    });
	function FilterField(object){
		object.value = object.value.replace(/(?![\da-z-_\n])./i,'');
	}
</script>
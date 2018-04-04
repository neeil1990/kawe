<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if ($arResult["NEED_AUTH"] == "Y")
{
	$APPLICATION->AuthForm("");
}
elseif (strlen($arResult["FatalError"]) > 0)
{
	?>
	<span class='errortext'><?=$arResult["FatalError"]?></span><br /><br />
	<?
}
else
{
	if(strlen($arResult["ErrorMessage"])>0)
	{
		?>
		<span class='errortext'><?=$arResult["ErrorMessage"]?></span><br /><br />
		<?
	}

	if ($arResult["ShowForm"] == "Input")
	{
		?>
		<form method="post" name="form1" action="<?=POST_FORM_ACTION_URI?>" enctype="multipart/form-data">
			<table class="sonet-message-form data-table" cellspacing="0" cellpadding="0">
				<?foreach ($arResult["Subscribe"] as $feature => $arFeature):

					if ($feature == "system_friends" && (CModule::IncludeModule("extranet") && CExtranet::IsExtranetSite() || $arResult["FriendsAllowed"] != "Y")):
						?><input type="hidden" name="<?= $feature ?>_active" value="<?= ($arFeature["Active"] ? ($arFeature["MailEvent"] ? "M" : "S") : "N"); ?>"><?
					else:
						?>
						<tr>
							<td align="right">
								<?= str_replace("#NAME#", $arFeature["SubscribeName"], GetMessage("SONET_C4_FUNC_TITLE")) ?>:
							</td>
							<td>
								<select name="<?= $feature ?>_active">
									<option value="N"><?= GetMessage("SONET_C3_NOWHERE") ?></option>
									<option value="S"<?= (($arFeature["Active"] && $arFeature["MailEvent"] != "Y") ? " selected" : "") ?>><?= GetMessage("SONET_C3_ON_SITE") ?></option>
									<option value="M"<?= (($arFeature["Active"] && $arFeature["MailEvent"] == "Y") ? " selected" : "") ?>><?= GetMessage("SONET_C3_ON_MAIL") ?></option>
								</select>
							</td>
						</tr>
						<?
					endif;

				endforeach;?>
			</table>
			<br><br>
			<input type="hidden" name="SONET_USER_ID" value="<?= $arParams["USER_ID"] ?>">
			<input type="hidden" name="SONET_GROUP_ID" value="<?= $arParams["GROUP_ID"] ?>">
			<?=bitrix_sessid_post()?>
			<br />
			<input type="submit" name="save" value="<?= GetMessage("SONET_C4_SUBMIT") ?>">
			<input type="reset" name="cancel" value="<?= GetMessage("SONET_C4_T_CANCEL") ?>" OnClick="window.location='<?= ($_REQUEST['backurl'] ? htmlspecialchars(CUtil::addslashes($_REQUEST['backurl'])) : (($arParams["PAGE_ID"] == "group_subscribe") ? $arResult["Urls"]["Group"] : $arResult["Urls"]["User"])) ?>'">
		</form>
		<?
	}
	else
	{
		?>
		<?if ($arParams["PAGE_ID"] == "group_subscribe"):?>
			<?= GetMessage("SONET_C4_GR_SUCCESS") ?>
			<br><br>
			<a href="<?= $arResult["Urls"]["Group"] ?>"><?= $arResult["Group"]["NAME"]; ?></a>
		<?else:?>
			<?= GetMessage("SONET_C4_US_SUCCESS") ?>
			<br><br>
			<a href="<?= $arResult["Urls"]["User"] ?>"><?= $arResult["User"]["NAME_FORMATTED"]; ?></a>
		<?endif;?>
		<br><br>
		<a href="<?= $arResult["Urls"]["MySubscribe"] ?>"><?= GetMessage("SONET_C4_T_MY_SUBSCR"); ?></a>
		<?
	}
}
?>
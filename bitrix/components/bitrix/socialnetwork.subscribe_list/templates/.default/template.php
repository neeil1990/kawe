<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if ($arResult["NEED_AUTH"] == "Y")
{
	$APPLICATION->AuthForm("");
}
elseif (strlen($arResult["FatalError"])>0)
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
	?>
	<?= GetMessage("SONET_C30_T_SHOW") ?>&nbsp;
	<?if (StrLen($arParams["ENTITY_TYPE"]) > 0):?><a href="<?= $arResult["Urls"]["ViewAll"]; ?>"><?else:?><b><?endif;?><?= GetMessage("SONET_C30_T_SHOW_ALL") ?><?if (StrLen($arParams["ENTITY_TYPE"]) > 0):?></a><?else:?></b><?endif;?>,&nbsp;
	<?
	if (strlen($arResult["Urls"]["ViewGroups"]) > 0):
		if ($arParams["ENTITY_TYPE"] != SONET_ENTITY_GROUP):
			?><a href="<?= $arResult["Urls"]["ViewGroups"]; ?>"><?
		else:
			?><b><?
		endif;
		?><?= GetMessage("SONET_C30_T_SHOW_GROUP") ?><?
		if ($arParams["ENTITY_TYPE"] != SONET_ENTITY_GROUP):
			?></a><?
		else:
			?></b><?
		endif;
		?>,&nbsp;<?
	endif;

	if ($arParams["ENTITY_TYPE"] != SONET_ENTITY_USER):?><a href="<?= $arResult["Urls"]["ViewUsers"]; ?>"><?else:?><b><?endif;?><?= GetMessage("SONET_C30_T_SHOW_USER") ?><?if ($arParams["ENTITY_TYPE"] != SONET_ENTITY_USER):?></a><?else:?></b><?endif;?>
	<br><br>
	<?if (StrLen($arResult["NAV_STRING"]) > 0):?>
		<?=$arResult["NAV_STRING"]?><br /><br />
	<?endif;?>
	<table width="100%" class="sonet-user-profile-friends data-table">
		<tr>
			<th><?= GetMessage("SONET_C30_T_USER") ?></th>
			<th><?= GetMessage("SONET_C30_T_TOTAL") ?></th>
			<th><?= GetMessage("SONET_C30_T_ACTIONS") ?></th>
		</tr>
		<?$ind = 0;?>
		<?if ($arResult["Events"]):?>
			<?foreach ($arResult["Events"] as $eventKey => $event):?>
				<tr>
					<td valign="top" nowrap>
						<?
						if ($event["ENTITY_TYPE"] == SONET_ENTITY_GROUP)
						{
							$name = "<a href=\"".$event["GroupUrl"]."\">".$event["Group"]["NAME"]."</a>";
							echo Str_Replace("#NAME#", $name, GetMessage("SONET_C334_GR"));
						}
						else
						{
							echo GetMessage("SONET_C334_US1");
							
							$APPLICATION->IncludeComponent("bitrix:main.user.link",
								'',
								array(
									"ID" => $event["User"]["ID"],
									"HTML_ID" => "subscribe_list_".$event["User"]["ID"],
									"NAME" => $event["User"]["~NAME"],
									"LAST_NAME" => $event["User"]["~LAST_NAME"],
									"SECOND_NAME" => $event["User"]["~SECOND_NAME"],
									"LOGIN" => $event["User"]["~LOGIN"],
									"USE_THUMBNAIL_LIST" => "N",
									"PROFILE_URL" => $event["UserUrl"],
									"PATH_TO_SONET_MESSAGES_CHAT" => $arParams["~PATH_TO_MESSAGES_CHAT"],
									"PATH_TO_SONET_USER_PROFILE" => $arParams["~PATH_TO_USER"],
									"PATH_TO_VIDEO_CALL" => $arParams["~PATH_TO_VIDEO_CALL"],
									"SHOW_FIELDS" => $arParams["SHOW_FIELDS_TOOLTIP"],
									"USER_PROPERTY" => $arParams["USER_PROPERTY_TOOLTIP"],
									"DATE_TIME_FORMAT" => $arParams["DATE_TIME_FORMAT"],
									"SHOW_YEAR" => $arParams["SHOW_YEAR"],
									"CACHE_TYPE" => $arParams["CACHE_TYPE"],
									"CACHE_TIME" => $arParams["CACHE_TIME"],
									"NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],
									"SHOW_LOGIN" => $arParams["SHOW_LOGIN"],
									"PATH_TO_CONPANY_DEPARTMENT" => $arParams["~PATH_TO_CONPANY_DEPARTMENT"],
									"INLINE" => "Y",
								),
								false,
								array("HIDE_ICONS" => "Y")
							);
						}
						?>
					</td>
					<td valign="top">
						<?
						foreach ($event["Items"] as $item)
						{
							echo "<b>".GetMessage("SONET_C30_T_".$item["EVENT_ID"].(($event["ENTITY_TYPE"] == SONET_ENTITY_GROUP) ? "1" : ""))."</b>";
							echo " - ";
							echo (($item["MAIL_EVENT"] == "Y") ? GetMessage("SONET_C334_SITE") : GetMessage("SONET_C334_MAIL"));
							echo "<br>";
						}
						?>
					</td>
					<td valign="top" nowrap>
						<a href="<?= $event["EditUrl"] ?>"><?= GetMessage("SONET_C334_CHANGE") ?></a>
					</td>
				</tr>
				<?$ind++;?>
			<?endforeach;?>
		<?else:?>
			<tr>
				<td colspan="4"><?= GetMessage("SONET_C30_T_EMPTY") ?></td>
			</tr>
		<?endif;?>
	</table>
	<br />
	<?if (StrLen($arResult["NAV_STRING"]) > 0):?>
		<?=$arResult["NAV_STRING"]?>
		<br /><br />
	<?endif;?>
	<?
}
?>
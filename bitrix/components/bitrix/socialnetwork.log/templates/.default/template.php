<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
CUtil::InitJSCore(array("popup"));

if ($arResult["NEED_AUTH"] == "Y")
{
	$APPLICATION->AuthForm("");
}
elseif (strlen($arResult["FatalError"])>0)
{
	?><span class='errortext'><?=$arResult["FatalError"]?></span><br /><br /><?
}
else
{
	CAjax::Init();
	CUtil::InitJSCore(array("ajax", "window", "tooltip"));
	?><script language="JavaScript">
	<!--
		BX.message({
			sonetLGetPath: '<?=CUtil::JSEscape('/bitrix/components/bitrix/socialnetwork.log/ajax.php')?>',
			sonetLSetPath: '<?=CUtil::JSEscape('/bitrix/components/bitrix/socialnetwork.log/ajax.php')?>',
			sonetLSessid: '<?=bitrix_sessid_get()?>',
			sonetLLangId: '<?=CUtil::JSEscape(LANGUAGE_ID)?>',
			sonetLSiteId: '<?=CUtil::JSEscape(SITE_ID)?>',
			sonetLNoSubscriptions: '<?=CUtil::JSEscape(GetMessage("SONET_C30_NO_SUBSCRIPTIONS"))?>',
			sonetLInherited: '<?=CUtil::JSEscape(GetMessage("SONET_C30_INHERITED"))?>',
			sonetLDialogClose: '<?=CUtil::JSEscape(GetMessage("SONET_C30_DIALOG_CLOSE_BUTTON"))?>',
			sonetLDialogSubmit: '<?=CUtil::JSEscape(GetMessage("SONET_C30_DIALOG_SUBMIT_BUTTON"))?>',
			sonetLDialogCancel: '<?=CUtil::JSEscape(GetMessage("SONET_C30_DIALOG_CANCEL_BUTTON"))?>',
			sonetLDialogUT_Y: '<?=CUtil::JSEscape(GetMessage("SONET_C30_DIALOG_UT_BUTTON_Y"))?>',
			sonetLDialogUT_N: '<?=CUtil::JSEscape(GetMessage("SONET_C30_DIALOG_UT_BUTTON_N"))?>',
			sonetLTransportTitle: '<?=CUtil::JSEscape(GetMessage("SONET_C30_DIALOG_TRANSPORT_TITLE"))?>',
			sonetLTransportUnsubscribe: '<?=CUtil::JSEscape(GetMessage("SONET_C30_DIALOG_TRANSPORT_UNSUBSCRIBE"))?>',
			sonetLVisibleTitle_Y: '<?=CUtil::JSEscape(GetMessage("SONET_C30_DIALOG_VISIBLE_TITLE_Y"))?>',
			sonetLVisibleTitle_N: '<?=CUtil::JSEscape(GetMessage("SONET_C30_DIALOG_VISIBLE_TITLE_N"))?>',
			sonetLTransportTitle_M: '<?=CUtil::JSEscape(GetMessage("SONET_C30_DIALOG_TRANSPORT_M"))?>',
			sonetLTransportTitle_X: '<?=CUtil::JSEscape(GetMessage("SONET_C30_DIALOG_TRANSPORT_X"))?>'
		});	
	//-->
	</script>
	<?
	if(strlen($arResult["ErrorMessage"])>0)
	{
		?><span class='errortext'><?=$arResult["ErrorMessage"]?></span><br /><br /><?
	}
	
	unset($arResult["ActiveFeatures"]["all"]);
	if ($arParams["SHOW_EVENT_ID_FILTER"] == "Y" && !empty($arResult["ActiveFeatures"]))
	{
		?>
		<div id="bx_sl_filter_hidden" class="sonet-log-filter" style="display: block;">
			<div class="sonet-log-filter-lt">
				<div class="sonet-log-filter-rt"></div>
			</div>
			<div id="bx_sl_filter_content">
				<span class="sonet-log-filter-lamp <?=($arResult["IS_FILTERED"] ? "sonet-log-filter-lamp-a" : "sonet-log-filter-lamp-na") ?>"></span>
				<span class="sonet-log-filter-title"><?=GetMessage("SONET_C30_T_FILTER_TITLE");?></span>
				<a id="sonet_log_filter_show" href="javascript:void(0)" onclick="__logFilterShow(); return false;"><?=GetMessage("SONET_C30_T_FILTER_SHOW");?></a>
			</div>
			<div class="sonet-log-filter-lb">
				<div class="sonet-log-filter-rb"></div>
			</div>
		</div>

		<div id="bx_sl_filter" class="sonet-log-filter" style="display: none;">
			<div class="sonet-log-filter-lt">
				<div class="sonet-log-filter-rt"></div>
			</div>
			<div id="bx_sl_filter_content">
				<span class="sonet-log-filter-lamp <?=($arResult["IS_FILTERED"] ? "sonet-log-filter-lamp-a" : "sonet-log-filter-lamp-na") ?>"></span>
				<span class="sonet-log-filter-title"><?=GetMessage("SONET_C30_T_FILTER_TITLE");?></span>
				<a id="sonet_log_filter_hide" href="javascript:void(0)" onclick="__logFilterShow(); return false;"><?=GetMessage("SONET_C30_T_FILTER_HIDE");?></a>
			<div class="sonet-log-filter-line"></div>
			<form method="GET" name="log_filter">
			<script type="text/javascript">
				var arFltFeaturesID = new Array();
			</script>
			<div class="log-filter-title"><?=GetMessage("SONET_C30_T_FILTER_FEATURES_TITLE")?></div>
			<? 
			$max_cols = 5;
			?>
			<table cellspacing="0" border="0">
			<tr>
				<? 
				$bCheckedAll = true;
				$cnt_cols = 1;
				
				foreach ($arResult["ActiveFeatures"] as $featureID => $featureName):
				
					if ($cnt_cols > $max_cols)
					{
						$cnt_cols = 1;
						?></tr><tr><?
					}
					?>
					<td width="<?=intval(100/$max_cols)?>%" valign="top">
						<script type="text/javascript">
							arFltFeaturesID.push('<?=$featureID?>');
						</script>
						<?
						if (!$featureName)
							$featureName = GetMessage(toUpper("SONET_C30_T_FEATURE_".$arParams["ENTITY_TYPE"]."_".$featureID));
							
						if (array_key_exists("flt_event_id", $_REQUEST) && in_array($featureID, $_REQUEST["flt_event_id"]) || empty($arParams["EVENT_ID"]) || in_array("all", $arParams["EVENT_ID"]))
							$bChecked = true;
						else
						{
							$bChecked = false;
							$bCheckedAll = false;
						}
						?>
						<div class="sonet-log-filter-checkbox"><nobr><input type="checkbox" id="flt_event_id_<?=$featureID?>" name="flt_event_id[]" value="<?=$featureID?>" <?=($bChecked ? "checked" : "")?> onclick="__logFilterClick('<?=$featureID?>')"> <label for="flt_event_id_<?=$featureID?>"><?=$featureName?></label></nobr></div>
					</td>
					<?
					$cnt_cols++;

				endforeach;
				
				for ($i = $cnt_cols; $i <= $max_cols; $i++)
				{
					?><td width="<?=intval(100/$cnt_cols)?>%" valign="top">&nbsp;</td><?
				}
				?>
			</tr>
			</table>
			<div class="sonet-log-filter-line"></div>
			<table cellspacing="0" border="0">
			<tr>
				<td valign="top">
				<div style="width: 200px;">
					<div class="sonet-log-filter-createdby-title"><?=GetMessage("SONET_C30_T_FILTER_CREATED_BY");?>:</div>
					<? 
					if (IsModuleInstalled("intranet")):
						?>
						<?
						$GLOBALS["APPLICATION"]->IncludeComponent('bitrix:intranet.user.selector', '', array(
							'INPUT_NAME' => "flt_created_by_id",
							'INPUT_NAME_STRING' => "flt_created_by_string",
							'INPUT_NAME_SUSPICIOUS' => "flt_created_by_suspicious",
							'INPUT_VALUE_STRING' => htmlspecialcharsback($_REQUEST["flt_created_by_string"]),
							'EXTERNAL' => 'A',
							'MULTIPLE' => 'N',
							),
							false,
							array("HIDE_ICONS" => "Y")
						);
						?>
						<?
					else:
						?>
						<?
						$APPLICATION->IncludeComponent("bitrix:socialnetwork.user_search_input", ".default", array(
								"TEXT" => 'size="20"',
								"EXTRANET" => "I",
								"NAME_TEMPLATE" => $arParams["NAME_TEMPLATE"],
								"SHOW_LOGIN" => $arParams["SHOW_LOGIN"]
							)
						);								
						?>
						<?
					endif;
					?>
				</div>
				</td>
				<td valign="top">
				<div class="sonet-log-filter-date-title"><?=GetMessage("SONET_C30_T_FILTER_DATE");?>:</div>
					<select name="flt_date_datesel" onchange="__logOnDateChange(this)">
					<?
					foreach($arResult["DATE_FILTER"] as $k=>$v):
						?>
						<option value="<?=$k?>"<?if($_REQUEST["flt_date_datesel"] == $k) echo ' selected="selected"'?>><?=$v?></option>
						<?
					endforeach;
					?>
					</select>
					<span class="sonet-log-filter-date-days-span" style="display:none">
						<input type="text" name="flt_date_days" value="<?=htmlspecialchars($_REQUEST["flt_date_days"])?>"  class="sonet-log-filter-date-days" size="2" /> <?echo GetMessage("SONET_C30_DATE_FILTER_DAYS")?>
					</span>
					<span class="sonet-log-filter-date-from-span" style="display:none">
						<input type="text" name="flt_date_from" value="<?=(array_key_exists("LOG_DATE_FROM", $arParams) ? $arParams["LOG_DATE_FROM"] : "")?>" class="sonet-log-filter-date-interval" />
						<?
						$APPLICATION->IncludeComponent(
							"bitrix:main.calendar",
							"",
							array(
								"SHOW_INPUT"	=> "N",
								"INPUT_NAME"	=> "flt_date_from",
								"INPUT_VALUE"	=> (array_key_exists("LOG_DATE_FROM", $arParams) ? $arParams["LOG_DATE_FROM"] : ""),
								"FORM_NAME"		=> "log_filter",
							),
							$component,
							array("HIDE_ICONS"	=> true)
						);?>
					</span>
					<span class="sonet-log-filter-date-hellip-span" style="display:none">&hellip;</span>
					<span class="sonet-log-filter-date-to-span" style="display:none">
						<input type="text" name="flt_date_to" value="<?=(array_key_exists("LOG_DATE_TO", $arParams) ? $arParams["LOG_DATE_TO"] : "")?>" class="sonet-log-filter-date-interval" />
						<?
						$APPLICATION->IncludeComponent(
							"bitrix:main.calendar",
							"",
							array(
								"SHOW_INPUT"	=> "N",
								"INPUT_NAME"	=> "flt_date_to",
								"INPUT_VALUE"	=> (array_key_exists("LOG_DATE_TO", $arParams) ? $arParams["LOG_DATE_TO"] : ""),
								"FORM_NAME"		=> "log_filter",
							),
							$component,
							array("HIDE_ICONS"	=> true)
						);?>
					</span>
					<script type="text/javascript">
						BX.ready(function(){__logOnDateChange(document.forms['log_filter'].flt_date_datesel)});
					</script>
				</td>
			</tr>
			</table>
			<?
			if (array_key_exists("flt_show_hidden", $_REQUEST) && $_REQUEST["flt_show_hidden"] == "Y")
				$bChecked = true;
			else
				$bChecked = false;
			?>
			<div><nobr><input type="checkbox" id="flt_show_hidden" name="flt_show_hidden" value="Y" <?=($bChecked ? "checked" : "")?> onclick="__logFilterClick('<?=$featureID?>')"> <label for="flt_show_hidden"><?=GetMessage("SONET_C30_T_SHOW_HIDDEN")?></label></nobr></div>
			<div class="sonet-log-filter-line"></div>
			<div class="sonet-log-filter-submit"><input type="submit" name="log_filter_submit" value="<?=GetMessage("SONET_C30_T_SUBMIT")?>"></div>
			<input type="hidden" id="flt_event_id_all" name="flt_event_id_all" value="<?=($bCheckedAll ? "Y" : "")?>">
			</form>
		
			</div>
			<div class="sonet-log-filter-lb">
				<div class="sonet-log-filter-rb"></div>
			</div>
		</div>

		<div class="sonet-profile-line"></div>		
		<br><br>
		<?
		if(IntVal($arResult["MICROBLOG_USER_ID"]) > 0)
		{	
			?>
			<div style="float:right; text-align:right;">
				<div id="microblog-link"><div class="sonet-log-item-content-icon sonet-log-item-content-icon-blog-post-micro" onclick="WriteMicroblog(true);"></div><a href="javascript:WriteMicroblog(true);"><?=GetMessage("SONET_C30_mb_show")?></a></div>
				<div id="microblog-link-hide" style="display:none;"><a href="javascript:WriteMicroblog(false);"><?=GetMessage("SONET_C30_mb_hide")?></a></div>
				<div id="microblog-form" style="display:none;">
					<?
					$APPLICATION->IncludeComponent(
						"bitrix:blog.post.edit",
						"micro",
						Array(
							"ID"						=> "new",
							"PATH_TO_BLOG"				=> $APPLICATION->GetCurPageParam(),
							"PATH_TO_POST"				=> $arParams["PATH_TO_USER_MICROBLOG_POST"],
							"PATH_TO_SMILE" 			=> $arParams["PATH_TO_BLOG_SMILE"], 
							"SET_TITLE"					=> "N",
							"GROUP_ID"					=> $arParams["BLOG_GROUP_ID"],
							"USER_ID"					=> $arResult["MICROBLOG_USER_ID"],
							"SET_NAV_CHAIN" 			=> "N", 
							"USE_SOCNET" 				=> "Y",
							"MICROBLOG" => "Y",
						),
						$component
					);
					?>
				</div>
			</div>
			<div id="microblog-cont"></div>
			<?
		}
		
		if (
			strlen($arParams["ENTITY_TYPE"]) > 0
			&& (
				intval($arParams["GROUP_ID"]) > 0
				|| intval($arParams["USER_ID"]) > 0
			)
		)
		{
			?><div style="float: right;"><?
			
			$APPLICATION->IncludeComponent(
				"bitrix:socialnetwork.log.rss.link",
				"",
				Array(
					"PATH_TO_RSS" => $arParams["~PATH_TO_LOG_RSS"],
					"PATH_TO_RSS_MASK" => $arParams["~PATH_TO_LOG_RSS_MASK"],
					"ENTITY_TYPE" => $arParams["ENTITY_TYPE"],
					"ENTITY_ID" => ($arParams["ENTITY_TYPE"] == SONET_ENTITY_GROUP ? $arParams["GROUP_ID"] : $arParams["USER_ID"]),
					"EVENT_ID" => $arParams["EVENT_ID"]
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?></div><?
		}
	}

	if ($arResult["EventsNew"] && is_array($arResult["EventsNew"]) && count($arResult["EventsNew"]) > 0)
	{
		$ind = 0;
		$day_cnt = 0;
		?>
		<script type="text/javascript">
			var arDays = [];
		</script>
		<div id="sonet_log_items" class="show-hidden-<?=($arResult["SHOW_HIDDEN"] ? "Y" : "N")?>">
		<?
		foreach ($arResult["EventsNew"] as $date => $arEvents)
		{
			if (
				$arResult["PAGE_NUMBER"] == 1
				&& $ind > ($arParams["PAGE_SIZE"] / 2)
			)
				$bDateOpen = false;
			else	
				$bDateOpen = true;

			?><span onclick="__logDayShow('<?=$day_cnt?>'); return false;" onmouseover="__logDateOver(this);" onmouseout="__logDateOut(this);" class="sonet-log-date">
				<span class="sonet-log-header-center" nowrap><span class="sonet-log-header-day"><nobr><?= $date ?></nobr></span></span>
				<span class="sonet-log-header-center"><span class="sonet-log-header-day-counter"><span id="sonet_log_day_counter_<?=$day_cnt?>" style="display: <?=(!$bDateOpen ? "block" : "none")?>;">(<?=count($arEvents)?>)</span></span></span>
				<span class="sonet-log-header-center">
					<span class="sonet-log-date-hide">
						<a class="sonet-log-date-switch sonet-log-date-switch-show" style="display: <?=(!$bDateOpen ? "inline-block" : "none")?>;" id="sonet_log_date_switch_show_<?=$day_cnt?>"><?= GetMessage("SONET_C30_T_MESSAGE_SHOW") ?></a>
						<a class="sonet-log-date-switch sonet-log-date-switch-hide" style="display: <?=(!$bDateOpen ? "none" : "inline-block")?>;" id="sonet_log_date_switch_hide_<?=$day_cnt?>"><?= GetMessage("SONET_C30_T_MESSAGE_HIDE") ?></a>
					</span>
				</span>
			</span>
			<div class="sonet-log-date-line"></div>
			<div class="sonet-log-date-items"><?

			foreach ($arEvents as $arEvent)
			{
				if (!empty($arEvent["EVENT"]))
				{
					?>
					<div class="sonet-log-item <?
					if (
						array_key_exists("CREATED_BY", $arEvent)
						&& array_key_exists("TOOLTIP_FIELDS", $arEvent["CREATED_BY"])
						&& array_key_exists("ID", $arEvent["CREATED_BY"]["TOOLTIP_FIELDS"])
					)
					{
						?>sonet-log-item-createdby-<?=$arEvent["CREATED_BY"]["TOOLTIP_FIELDS"]["ID"]?> <?
					}
					if (
						array_key_exists("ENTITY_TYPE", $arEvent["EVENT"])
						&& strlen($arEvent["EVENT"]["ENTITY_TYPE"]) > 0
						&& array_key_exists("ENTITY_ID", $arEvent["EVENT"])
						&& intval($arEvent["EVENT"]["ENTITY_ID"]) > 0
					)
					{
						?>sonet-log-item-where-<?=$arEvent["EVENT"]["ENTITY_TYPE"]?>-<?=$arEvent["EVENT"]["ENTITY_ID"]?>-all <?
						if (
							array_key_exists("EVENT_ID", $arEvent["EVENT"])
							&& strlen($arEvent["EVENT"]["EVENT_ID"]) > 0
						)
						{
							?>sonet-log-item-where-<?=$arEvent["EVENT"]["ENTITY_TYPE"]?>-<?=$arEvent["EVENT"]["ENTITY_ID"]?>-<?=str_replace("_", '-', $arEvent["EVENT"]["EVENT_ID"])?> <?

							if ($arEvent["EVENT"]["EVENT_ID_FULLSET"])
							{
								?>sonet-log-item-where-<?=$arEvent["EVENT"]["ENTITY_TYPE"]?>-<?=$arEvent["EVENT"]["ENTITY_ID"]?>-<?=str_replace("_", '-', $arEvent["EVENT"]["EVENT_ID_FULLSET"])?> <?
							}
						}
					}

					if (
						array_key_exists("IS_IMPORTANT", $arEvent["EVENT_FORMATTED"])
						&& $arEvent["EVENT_FORMATTED"]["IS_IMPORTANT"]
					)
					{
						?> sonet-log-item-important<?
					}

					if (
						array_key_exists("ENTITY_TYPE", $arEvent["EVENT"])
						&& $arEvent["VISIBLE"] == "N"
					)
					{
						?> sonet-log-item-hidden<?
					}
					?>" id="sonet_log_day_item_<?=$ind?>" style="display: <?=($bDateOpen ? "block" : "none")?>;" onmouseover="__logItemOver(this);" onmouseout="__logItemOut(this);">
						<div class="sonet-log-item-inner">
							<?
							if (
								array_key_exists("CREATED_BY", $arEvent)
								&& is_array($arEvent["CREATED_BY"])
							)
							{
								?><div class="sonet-log-item-avatar" <?
								if (
									array_key_exists("AVATAR_SRC", $arEvent)
									&& strlen($arEvent["AVATAR_SRC"]) > 0
								)
								{
									?>style="background: url('<?=$arEvent["AVATAR_SRC"]?>') no-repeat 0 0;"<?
								}
								?>></div><?
							}
							else
							{
								?><div class="sonet-log-item-no-avatar"></div><?
							}
							?>
							<div class="sonet-log-item-body">
								<div class="sonet-log-item-header"><?
								if (
									array_key_exists("CREATED_BY", $arEvent)
									&& is_array($arEvent["CREATED_BY"])
									&& array_key_exists("TOOLTIP_FIELDS", $arEvent["CREATED_BY"])
									&& is_array($arEvent["CREATED_BY"]["TOOLTIP_FIELDS"])								
								)
								{
									?><span class="sonet-log-item-createdby"><?
									$GLOBALS["APPLICATION"]->IncludeComponent("bitrix:main.user.link",
														'',
														$arEvent["CREATED_BY"]["TOOLTIP_FIELDS"],
														false,
														array("HIDE_ICONS" => "Y")
													);
									?></span><?
								}
								
								if (
									array_key_exists("EVENT_FORMATTED", $arEvent)
									&& array_key_exists("IS_IMPORTANT", $arEvent["EVENT_FORMATTED"])
									&& $arEvent["EVENT_FORMATTED"]["IS_IMPORTANT"]
								)
								{
										?><span class="sonet-log-item-important-title"><?
										if (
											array_key_exists("ENTITY", $arEvent)
											&& array_key_exists("FORMATTED", $arEvent["ENTITY"])
											&& array_key_exists("NAME", $arEvent["ENTITY"]["FORMATTED"])											
											&& strlen($arEvent["ENTITY"]["FORMATTED"]["NAME"]) > 0
										)
										{
											if (
												array_key_exists("URL", $arEvent["ENTITY"]["FORMATTED"])
												&& strlen($arEvent["ENTITY"]["FORMATTED"]["URL"]) > 0
											)
											{
												?><a href="<?=$arEvent["ENTITY"]["FORMATTED"]["URL"]?>"><?=$arEvent["ENTITY"]["FORMATTED"]["NAME"]?></a><?
											}
											else
											{
												?><?=$arEvent["ENTITY"]["FORMATTED"]["NAME"]?><?
											}
										}
										?></span><?		
								}
								else
								{
									if (
										array_key_exists("EVENT_FORMATTED", $arEvent)
										&& is_array($arEvent["EVENT_FORMATTED"])
										&& array_key_exists("TITLE", $arEvent["EVENT_FORMATTED"])
										&& strlen($arEvent["EVENT_FORMATTED"]["TITLE"]) > 0
									)
									{
										?><span class="sonet-log-item-title"><?							
										echo $arEvent["EVENT_FORMATTED"]["TITLE"];
										?></span><?								
									}
								}

								?><span class="sonet-log-item-hide"><?
									if (!array_key_exists("IS_MESSAGE_SHORT", $arEvent["EVENT_FORMATTED"]) || !$arEvent["EVENT_FORMATTED"]["IS_MESSAGE_SHORT"])
									{
										?>
										<a class="sonet-log-message-switch sonet-log-message-switch-show" href="javascript:__logSwitchBody(<?=$ind ?>);" style="display: inline-block;" id="sonet_log_message_switch_show_<?=$ind?>"><?= GetMessage("SONET_C30_T_MESSAGE_SHOW") ?></a>
										<a class="sonet-log-message-switch sonet-log-message-switch-hide" href="javascript:__logSwitchBody(<?=$ind ?>);" style="display: none;" id="sonet_log_message_switch_hide_<?=$ind?>"><?= GetMessage("SONET_C30_T_MESSAGE_HIDE") ?></a>
										<?
									}
								?></span>
								</div>
								<div class="sonet-log-item-content">
								<?
								if (strlen($arEvent["EVENT_FORMATTED"]["MESSAGE"]) > 0):
								
									if (in_array($arEvent["EVENT"]["EVENT_ID"], array("blog_post", "blog_post_micro", "blog_comment", "forum", "tasks", "wiki")))
									{
										if ($arEvent["EVENT"]["EVENT_ID"] == "forum")
										{
											$type = "M";
											if (strlen($arEvent["EVENT"]["PARAMS"]) > 0)
											{
												$arFieldsParams = explode("&", $arEvent["EVENT"]["PARAMS"]);
												if (is_array($arFieldsParams) && count($arFieldsParams) > 0)
												{
													foreach ($arFieldsParams as $tmp)
													{
														list($key, $value) = explode("=", $tmp);
														if ($key == "type")
														{
															$type = $value;
															break;
														}
													}
												}
											}
											$icon_id = $arEvent["EVENT"]["EVENT_ID"]."-".($type == "T" ? "topic" : "message");
										}
										else
											$icon_id = str_replace("_", "-", $arEvent["EVENT"]["EVENT_ID"]);
										?>
										<div title="<?=GetMessage("SONET_C30_ICON_TITLE_".$icon_id)?>" class="sonet-log-item-content-icon sonet-log-item-content-icon-<?=$icon_id?>"></div>
										<div class="sonet-log-item-content-body">
											<div id="sonet_log_message_short_<?=$ind ?>" class="<?(!array_key_exists("IS_MESSAGE_SHORT", $arEvent["EVENT_FORMATTED"]) || !$arEvent["EVENT_FORMATTED"]["IS_MESSAGE_SHORT"] ? "sonet-log-message-short" : "sonet-log-message-full")?> sonet-log-message-show">
												<?= substr(HTMLToTxt(htmlspecialcharsback($arEvent["EVENT_FORMATTED"]["MESSAGE"]), "", array("/(<img\s[^>]*>)/is", "/(<a\s[^>]*>)/is", "/(<\/a>)/is")), 0, 1000); ?>
											</div>
											<div id="sonet_log_message_full_<?=$ind ?>" class="sonet-log-message-full sonet-log-message-hide">
												<?= CSocNetTextParser::closetags(htmlspecialcharsback($arEvent["EVENT_FORMATTED"]["MESSAGE"])); ?>
											</div>
										</div>
										<?
									}
									elseif (in_array($arEvent["EVENT"]["EVENT_ID"], array("files")))
									{
										$file_ext = GetFileExtension($arEvent["EVENT"]["TITLE"]);
										?>
										<div class="sonet-log-message-full">
											<span class="sonet-log-file-icon sonet-log-file-icon-<?=$file_ext?>"></span><?
											if (
												array_key_exists("URL", $arEvent["EVENT"])
												&& strlen($arEvent["EVENT"]["URL"]) > 0
											)
											{
												?><span class="sonet-log-file-name"><a href="<?=$arEvent["EVENT"]["URL"]?>"><?=$arEvent["EVENT"]["TITLE"]?></a></span><?
											}
											else
											{
												?><span class="sonet-log-file-name"><?=$arEvent["EVENT"]["TITLE"]?></span><?
											}
										?></div>
										<?									
									}
									elseif (in_array($arEvent["EVENT"]["EVENT_ID"], array("system_groups")))
									{
										?>
										<div class="sonet-log-message-full">
											<span class="sonet-log-systemgroups-icon sonet-log-systemgroups-icon-<?=str_replace("_", "-", $arEvent["EVENT"]["TITLE"])?>"></span><span class="sonet-log-systemgroups-message sonet-log-systemgroups-message-<?=str_replace("_", "-", $arEvent["EVENT"]["TITLE"])?>"><?=$arEvent["EVENT_FORMATTED"]["MESSAGE"]?></span>
										</div>
										<?									
									}
									elseif (in_array($arEvent["EVENT"]["EVENT_ID"], array("system_friends")))
									{
										?>
										<div class="sonet-log-message-full">
											<span class="sonet-log-systemfriends-icon sonet-log-systemfriends-icon-<?=str_replace("_", "-", $arEvent["EVENT"]["TITLE"])?>"></span><span class="sonet-log-systemfriends-message sonet-log-systemfriends-message-<?=str_replace("_", "-", $arEvent["EVENT"]["TITLE"])?>"><?=$arEvent["EVENT_FORMATTED"]["MESSAGE"]?></span>
										</div>
										<?									
									}
									elseif (in_array($arEvent["EVENT"]["EVENT_ID"], array("system")))
									{
										?>
										<div class="sonet-log-message-full">
											<span class="sonet-log-system-icon sonet-log-system-icon-<?=str_replace("_", "-", $arEvent["EVENT"]["TITLE"])?>"></span><span class="sonet-log-system-message sonet-log-system-message-<?=str_replace("_", "-", $arEvent["EVENT"]["TITLE"])?>"><?=$arEvent["EVENT_FORMATTED"]["MESSAGE"]?></span>
										</div>
										<?									
									}
									elseif (
										array_key_exists("IS_IMPORTANT", $arEvent["EVENT_FORMATTED"])
										&& $arEvent["EVENT_FORMATTED"]["IS_IMPORTANT"]
									)
									{
										?>
										<div class="sonet-log-message-title"><?
										if (
											array_key_exists("URL", $arEvent["EVENT_FORMATTED"])
											&& strlen($arEvent["EVENT_FORMATTED"]["URL"]) > 0
										)
										{
											?><a href="<?=$arEvent["EVENT_FORMATTED"]["URL"]?>"><?=$arEvent["EVENT"]["TITLE"]?></a><?
										}
										else
										{
											?><?=$arEvent["EVENT"]["TITLE"]?><?
										}
										?></div>
										<div id="sonet_log_message_short_<?=$ind ?>" class="<?(!array_key_exists("IS_MESSAGE_SHORT", $arEvent["EVENT_FORMATTED"]) || !$arEvent["EVENT_FORMATTED"]["IS_MESSAGE_SHORT"] ? "sonet-log-message-short" : "sonet-log-message-full")?> sonet-log-message-show">
											<?= substr(HTMLToTxt(htmlspecialcharsback($arEvent["EVENT_FORMATTED"]["MESSAGE"]), "", array("/(<img\s[^>]*>)/is", "/(<a\s[^>]*>)/is", "/(<\/a>)/is")), 0, 1000); ?>
										</div>
										<div id="sonet_log_message_full_<?=$ind ?>" class="sonet-log-message-full sonet-log-message-hide">
											<?= CSocNetTextParser::closetags(htmlspecialcharsback($arEvent["EVENT_FORMATTED"]["MESSAGE"])); ?>
										</div>
										<?
									}	
									else
									{
										?>
										<div id="sonet_log_message_short_<?=$ind ?>" class="<?(!array_key_exists("IS_MESSAGE_SHORT", $arEvent["EVENT_FORMATTED"]) || !$arEvent["EVENT_FORMATTED"]["IS_MESSAGE_SHORT"] ? "sonet-log-message-short" : "sonet-log-message-full")?> sonet-log-message-show">
											<?= substr(HTMLToTxt(htmlspecialcharsback($arEvent["EVENT_FORMATTED"]["MESSAGE"]), "", array("/(<img\s[^>]*>)/is", "/(<a\s[^>]*>)/is", "/(<\/a>)/is")), 0, 1000); ?>
										</div>
										<div id="sonet_log_message_full_<?=$ind ?>" class="sonet-log-message-full sonet-log-message-hide">
											<?= CSocNetTextParser::closetags(htmlspecialcharsback($arEvent["EVENT_FORMATTED"]["MESSAGE"])); ?>
										</div>
										<?
									}
								endif;
								?>
								</div>
								<div class="sonet-log-item-footer"><span class="sonet-log-item-time"><?=$arEvent["LOG_TIME_FORMAT"]?></span><?

								if (
									array_key_exists("ENTITY", $arEvent)
									&& is_array($arEvent["ENTITY"])
									&& 
									(
										$arEvent["EVENT"]["ENTITY_TYPE"] != SONET_SUBSCRIBE_ENTITY_USER
										|| $arEvent["EVENT"]["ENTITY_ID"] != $arEvent["EVENT"]["USER_ID"]
									)
									&& 
									(
										!array_key_exists("EVENT_FORMATTED", $arEvent)
										|| !$arEvent["EVENT_FORMATTED"]["IS_IMPORTANT"]
									)
								)
								{
									if (
										array_key_exists("TOOLTIP_FIELDS", $arEvent["ENTITY"])
										&& is_array($arEvent["ENTITY"]["TOOLTIP_FIELDS"])
									)
									{
										?><span class="sonet-log-item-where-pre"><?
										echo $GLOBALS["arSocNetAllowedSubscribeEntityTypesDesc"][SONET_SUBSCRIBE_ENTITY_USER]["TITLE_ENTITY"];
										?> </span><?
										?><span class="sonet-log-item-where"><?
										$GLOBALS["APPLICATION"]->IncludeComponent("bitrix:main.user.link",
															'',
															$arEvent["ENTITY"]["TOOLTIP_FIELDS"],
															false,
															array("HIDE_ICONS" => "Y")
														);
										?></span><?
									}
									elseif (
										array_key_exists("FORMATTED", $arEvent["ENTITY"])
										&& is_array($arEvent["ENTITY"]["FORMATTED"])
										&& array_key_exists("NAME", $arEvent["ENTITY"]["FORMATTED"])
										&& strlen($arEvent["ENTITY"]["FORMATTED"]["NAME"]) > 0
									)
									{
										if (
											array_key_exists("TYPE_NAME", $arEvent["ENTITY"]["FORMATTED"])
											&& strlen($arEvent["ENTITY"]["FORMATTED"]["TYPE_NAME"]) > 0
										)
										{
											?><span class="sonet-log-item-where-pre"><?
											echo $arEvent["ENTITY"]["FORMATTED"]["TYPE_NAME"];
											?> </span><?
										}
										?><span class="sonet-log-item-where"><?
										if (
											array_key_exists("URL", $arEvent["ENTITY"]["FORMATTED"])
											&& strlen($arEvent["ENTITY"]["FORMATTED"]["URL"]) > 0
										)
											echo '<a href="'.$arEvent["ENTITY"]["FORMATTED"]["URL"].'">'.$arEvent["ENTITY"]["FORMATTED"]["NAME"].'</a>';
										else
											echo $arEvent["ENTITY"]["FORMATTED"]["NAME"];
										?></span><?
									}
								}
								?><span class="sonet-log-item-transport"><span id="sonet_log_transport_<?=$ind ?>"></span><a class="sonet-log-transport" href="javascript:__logShowTransportDialog(<?=$ind ?>, '<?=$arEvent["EVENT"]["ENTITY_TYPE"] ?>', <?=$arEvent["EVENT"]["ENTITY_ID"] ?>, '<?=$arEvent["EVENT"]["EVENT_ID"] ?>', <?=($arEvent["EVENT"]["EVENT_ID_FULLSET"] ? "'".$arEvent["EVENT"]["EVENT_ID_FULLSET"]."'" : "false")?>, '<?=$arEvent["EVENT"]["USER_ID"] ?>')"><?=GetMessage("SONET_C30_DIALOG_TRANSPORT_LINK")?></a><span id="sonet_log_transport_icons_<?=$ind ?>"><?
								// actual transport
								if (
									array_key_exists("TRANSPORT", $arEvent)
									&& is_array($arEvent["TRANSPORT"])
								)
								{
									foreach($arEvent["TRANSPORT"] as $transport)
									{
										if ($transport == "N")
											continue;
											
										?><a title="<?=GetMessage("SONET_C30_DIALOG_TRANSPORT_".$transport)?>" class="sonet-log-transport" href="javascript:__logShowTransportDialog(<?=$ind ?>, '<?=$arEvent["EVENT"]["ENTITY_TYPE"] ?>', <?=$arEvent["EVENT"]["ENTITY_ID"] ?>, '<?=$arEvent["EVENT"]["EVENT_ID"] ?>', <?=($arEvent["EVENT"]["EVENT_ID_FULLSET"] ? "'".$arEvent["EVENT"]["EVENT_ID_FULLSET"]."'" : "false")?>, '<?=$arEvent["EVENT"]["USER_ID"] ?>')"><span class="sonet-log-transport-label sonet-log-transport-<?=$transport?>"></span></a><?
									}
								}
								?></span></span>
								</div>
							</div>
						</div>
						<div class="sonet-log-item-visible">
							<a title="<?=GetMessage("SONET_C30_VISIBLE_SHOWHIDE")?>" onmouseover="__logVisibleOver(this);" onmouseout="__logVisibleOut(this);" class="sonet-log-visible" href="javascript:__logShowVisibleDialog(<?=$ind ?>, '<?=$arEvent["EVENT"]["ENTITY_TYPE"] ?>', <?=$arEvent["EVENT"]["ENTITY_ID"] ?>, '<?=$arEvent["EVENT"]["EVENT_ID"] ?>', <?=($arEvent["EVENT"]["EVENT_ID_FULLSET"] ? "'".$arEvent["EVENT"]["EVENT_ID_FULLSET"]."'" : "false")?>, '<?=$arEvent["EVENT"]["USER_ID"] ?>', '<?=$arEvent["VISIBLE"]?>')"></a>
							<div id="sonet_log_visible_<?=$ind ?>"></div>									
						</div>
					</div>
					<?
				}
				
				// day counter	++
				?>
				<script type="text/javascript">
					if (!arDays[<?=$day_cnt?>])
						arDays[<?=$day_cnt?>] = [];
					arDays[<?=$day_cnt?>][arDays[<?=$day_cnt?>].length++] = <?=$ind?>;
				</script>			
				<?

				$ind++;
			}
			$day_cnt++;
			
			?></div><?
		}
		?>
		</div>
		<?
		if ($arParams["SHOW_NAV_STRING"] != "N" && StrLen($arResult["NAV_STRING"]) > 0)
		{
			?><div class="sonet-log-nav"><?
			echo $arResult["NAV_STRING"];
			?></div><?
		}
	}
	else
	{
		if ($arParams["SUBSCRIBE_ONLY"] == "Y")
			echo GetMessage("SONET_C30_T_NO_UPDATES");
		else
			echo GetMessage("SONET_C30_T_NO_UPDATES_NO_SUBSCRIBE");
	}
}
?>
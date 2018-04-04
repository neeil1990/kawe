<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if(strlen($arResult["FATAL_ERROR"])>0)
{
	?>
	<span class='errortext'><?=$arResult["FATAL_ERROR"]?></span><br /><br />
	<?
}
else
{
	if(strlen($arResult["ERROR_MESSAGE"])>0)
	{
		?>
		<span class='errortext'><?=$arResult["ERROR_MESSAGE"]?></span><br /><br />
		<?
	}
	
	if($arResult["bEdit"]=="Y")
	{
		?>
		<form method="post" name="form1" action="<?=POST_FORM_ACTION_URI?>" enctype="multipart/form-data">
		<table class="sonet-user-table">
		<colgroup span="3">
			<col />
			<col class="value" />
			<col class="descr" />
		</colgroup>
		<tr>
			<td nowrap><b><?=GetMessage("SONET_P_USER_ALIAS")?></b></td>
			<td><input type=text size="47" name="ALIAS" value="<?=$arResult["User"]["ALIAS"]?>"></td>
			<td nowrap><?=GetMessage("SONET_P_USER_ALIAS_COM")?></td>
		</tr>
		<tr>
			<td nowrap><b><?=GetMessage("SONET_P_USER_ABOUT")?></b></td>
			<td><textarea name="DESCRIPTION" style="width:98%" rows="5"><?=$arResult["User"]["DESCRIPTION"]?></textarea></td>
			<td nowrap><?=GetMessage("SONET_P_USER_ABOUT_COM")?></td>
		</tr>
		<tr>
			<td nowrap><b><?=GetMessage("SONET_P_USER_SITE")?></b></td>
			<td><input type=text size="47" name="PERSONAL_WWW" value="<?=$arResult["User"]["PERSONAL_WWW"]?>"></td>
			<td nowrap><?=GetMessage("SONET_P_USER_SITE_COM")?></td>
		</tr>
		<tr>
			<td nowrap><b><?=GetMessage("SONET_P_USER_SEX")?></b></td>
			<td>
				<select name="PERSONAL_GENDER">
					<?
					foreach($arResult["arSex"] as $k => $v)
					{
					?>
						<option value="<?=$k?>"<?if($k==$arResult["User"]["PERSONAL_GENDER"]) echo " selected";?>><?=$v?></option>
					<?
					}
					?>
				</select>
			</td>
			<td nowrap>&nbsp;</td>
		</tr>
		<tr>
			<td nowrap><b><?=GetMessage("SONET_P_USER_BIRTHDAY")?></b></td>
			<td><?
			$APPLICATION->IncludeComponent(
				'bitrix:main.calendar',
				'',
				array(
					'SHOW_INPUT' => 'Y',
					'FORM_NAME' => 'form1',
					'INPUT_NAME' => 'PERSONAL_BIRTHDAY',
					'INPUT_VALUE' => $arResult["arUser"]["PERSONAL_BIRTHDAY"],
					'SHOW_TIME' => 'N'
				),
				null,
				array('HIDE_ICONS' => 'Y')
			);?></td>
			<td nowrap><?=GetMessage("SONET_P_USER_BIRTHDAY_COM")?> (<?=FORMAT_DATE?>).</td>
		</tr>
		<tr>
			<td nowrap><b><?=GetMessage("SONET_P_USER_PHOTO")?></b></td>
			<td>
				<input name="PERSONAL_PHOTO" size="30" type="file"><br />
				<label><input name="PERSONAL_PHOTO_del" value="Y" type="checkbox"><?=GetMessage("SONET_P_DELETE_FILE");?></label>
				<?if ($arResult["User"]["PERSONAL_PHOTO_ARRAY"]!==false):?>
					<br /><?=$arResult["User"]["PERSONAL_PHOTO_IMG"]?>
				<?endif?>
			</td>
			<td nowrap><?=GetMessage("SONET_P_USER_PHOTO_COM")?></td>
		</tr>
		<tr>
			<td nowrap><b><?=GetMessage("SONET_P_USER_AVATAR")?></b></td>
			<td>
				<input name="AVATAR" size="30" type="file"><br />
				<label><input name="AVATAR_del" value="Y" type="checkbox"><?=GetMessage("SONET_P_DELETE_FILE");?></label>
				<?if ($arResult["User"]["AVATAR_ARRAY"]!==false):?>
					<br /><?=$arResult["User"]["AVATAR_IMG"]?>
				<?endif?>
			</td>
			<td nowrap>&nbsp;</td>
		</tr>
		<tr>
			<td nowrap><b><?=GetMessage("SONET_P_USER_INTERESTS")?></b></td>
			<td><textarea name="INTERESTS" style="width:98%" rows="5"><?=$arResult["User"]["INTERESTS"]?></textarea></td>
			<td nowrap><?=GetMessage("SONET_P_USER_INTERESTS_COM")?></td>
		</tr>
		<?// ********************* User properties ***************************************************?>
		<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
			<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
			<tr><td>
				<?if ($arUserField["MANDATORY"]=="Y"):?>
					<span class="required">*</span>
				<?endif;?>
				<b><?=$arUserField["EDIT_FORM_LABEL"]?>:</b></td><td>
					<?$APPLICATION->IncludeComponent(
						"bitrix:system.field.edit", 
						$arUserField["USER_TYPE"]["USER_TYPE_ID"], 
						array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField), null, array("HIDE_ICONS"=>"Y"));?></td><td></td></tr>
			<?endforeach;?>
		<?endif;?>
		
		<?// ******************** /User properties ***************************************************?>
		<tr>
			<td nowrap><b><?=GetMessage("SONET_P_USER_LAST_AUTH")?></b></td>
			<td><?=$arResult["User"]["LAST_VISIT"]?>&nbsp;</td>
			<td nowrap>&nbsp;</td>
		</tr>
		</table>
		<input type="hidden" name="BLOG_USER_ID" value="<?=$arResult["BlogUser"]["ID"]?>">
		<input type="hidden" name="ID" value="<?=$arParams["ID"]?>">
		<?=bitrix_sessid_post()?>
		<input type="hidden" name="mode" value="edit">
		<br />
		<input type="submit" name="save" value="<?=GetMessage("SONET_P_USER_SAVE")?>">
		<input type="reset" name="cancel" value="<?=GetMessage("SONET_P_USER_CANCEL")?>" OnClick="window.location='<?=$arResult["urlToCancel"]?>'">
		</form>
		<?
	}
	else
	{
		?>
		<table>
		<tr>
			<td valign="top">
				<table>
					<tr>
						<td>
							<?=$arResult["User"]["PERSONAL_PHOTO_IMG"]?>
						</td>
					</tr>
					<tr>
						<td>
							<a href="">Друзья</a><br>
							<a href="">Отправить сообщение</a><br>
							<a href="">Убрать из друзей</a><br>
						</td>
					</tr>
					<tr>
						<td>
							<br><br>
						</td>
					</tr>

					<tr class="sonet_tr_h3">
						<td colspan="2">
							<table width="100%">
								<tr>
									<td class="sonet_h3">
										Друзья
									</td>
									<td align="right">
										<?
										if (strlen($arResult["urlToEdit"]) > 0)
										{
											?>
											<a href="">Редактировать</a>
											<?
										}
										?>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
						</td>
					</tr>

					<tr class="sonet_tr_h3">
						<td colspan="2">
							<table width="100%">
								<tr>
									<td class="sonet_h3">
										Группы
									</td>
									<td align="right">
										<?
										if (strlen($arResult["urlToEdit"]) > 0)
										{
											?>
											<a href="">Редактировать</a>
											<?
										}
										?>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td>
						</td>
					</tr>

				</table>
			</td>
			<td valign="top" width="5">
				&nbsp;
			</td>
			<td valign="top">
				<table>
					<tr>
						<td colspan="2" class="sonet_name">
							<?=$arResult["User"]["NAME"]?> <?=$arResult["User"]["LAST_NAME"]?>
						</td>
					</tr>
					<?if(strlen($arResult["User"]["PERSONAL_GENDER"])>0):?>
					<tr>
						<td nowrap><?=GetMessage("SONET_P_USER_SEX")?></td>
						<td><?=$arResult["arSex"][$arResult["User"]["PERSONAL_GENDER"]]?>&nbsp;</td>
					</tr>
					<?endif;?>
					<?if(strlen($arResult["User"]["PERSONAL_BIRTHDAY"])>0):?>
					<tr>
						<td nowrap><?=GetMessage("SONET_P_USER_BIRTHDAY")?></td>
						<td><?=$arResult["User"]["PERSONAL_BIRTHDAY"]?>&nbsp;</td>
					</tr>
					<?endif;?>
					<?if(strlen($arResult["User"]["PERSONAL_LOCATION"])>0):?>
					<tr>
						<td nowrap>Родной город:</td>
						<td><?=$arResult["User"]["PERSONAL_LOCATION"]?></td>
					</tr>
					<?endif;?>
					<?if(strlen($arResult["User"]["PERSONAL_PROFESSION"])>0):?>
					<tr>
						<td nowrap>Профессия:</td>
						<td><?=$arResult["User"]["PERSONAL_PROFESSION"]?>&nbsp;</td>
					</tr>
					<?endif;?>

					<tr>
						<td colspan="2">
							<br><br>
						</td>
					</tr>

					<tr class="sonet_tr_h3">
						<td colspan="2">
							<table width="100%">
								<tr>
									<td class="sonet_h3">
										Информация
									</td>
									<td align="right">
										<?
										if (strlen($arResult["urlToEdit"]) > 0)
										{
											?>
											<a href="<?=$arResult["urlToEdit"]?>">Редактировать</a>
											<?
										}
										?>
									</td>
								</tr>
							</table>
						</td>
					</tr>

					<tr>
						<td colspan="2">&nbsp;
						</td>
					</tr>
					<tr>
						<td colspan="2" class="sonet_h5">
							Контактная информация
						</td>
					</tr>
					<?if ($arResult["CURRENT_USER_PERMS"]["VIEWCONTACTS"]):?>
						<?if(strlen($arResult["User"]["PERSONAL_WWW"])>0):?>
						<tr>
							<td nowrap>Персональный веб-сайт:</td>
							<td><?=$arResult["User"]["PERSONAL_WWW"]?>&nbsp;</td>
						</tr>
						<?endif;?>
						<?if(strlen($arResult["USER_PROPERTIES"]["DATA"]["UF_1C_PHONE_INNER"])>0):?>
						<tr>
							<td nowrap><?=$arResult["USER_PROPERTIES"]["DATA"]["UF_1C_PHONE_INNER"]["EDIT_FORM_LABEL"]?>:</td>
							<td><?$APPLICATION->IncludeComponent(
							"bitrix:system.field.view", 
							$arResult["USER_PROPERTIES"]["DATA"]["UF_1C_PHONE_INNER"]["USER_TYPE"]["USER_TYPE_ID"], 
							array("arUserField" => $arResult["USER_PROPERTIES"]["DATA"]["UF_1C_PHONE_INNER"]), null, array("HIDE_ICONS"=>"Y"));?>&nbsp;</td>
						</tr>
						<?endif;?>
						<?if(strlen($arResult["User"]["PERSONAL_WWW"])>0):?>
						<tr>
							<td nowrap>Персональный веб-сайт:</td>
							<td><?=$arResult["User"]["PERSONAL_WWW"]?>&nbsp;</td>
						</tr>
						<?endif;?>
					<?else:?>
						<tr>
							<td nowrap>&nbsp;</td>
							<td>Контактная информация недоступна.&nbsp;</td>
						</tr>
					<?endif;?>

					<tr>
						<td colspan="2">&nbsp;
						</td>
					</tr>
					<tr>
						<td colspan="2" class="sonet_h5">
							Личная информация
						</td>
					</tr>
					<?if(count($arResult["User"]["Hobby"])>0):?>
					<tr>
						<td nowrap><?=GetMessage("SONET_P_USER_INTERESTS")?></td>
						<td nowrap><?
							foreach($arResult["User"]["Hobby"] as $k => $v)
							{
								if($k!=0)
									echo ", ";
								?><a href="<?=$v["link"]?>"><?=$v["name"]?></a><?
							}
							?>
						</td>
					</tr>
					<?endif;?>
					<?// ********************* User properties ***************************************************?>
					<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
						<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
						<td nowrap><?=$arUserField["EDIT_FORM_LABEL"]?>:</td><td>
								<?$APPLICATION->IncludeComponent(
									"bitrix:system.field.view", 
									$arUserField["USER_TYPE"]["USER_TYPE_ID"], 
									array("arUserField" => $arUserField), null, array("HIDE_ICONS"=>"Y"));?></td></tr>			
						<?endforeach;?>
					<?endif;?>

					<tr>
						<td colspan="2">
							<br><br>
						</td>
					</tr>
					<tr class="sonet_tr_h3">
						<td colspan="2">
							<table width="100%">
								<tr>
									<td class="sonet_h3">
										Стена
									</td>
									<td align="right">
										<?
										if (strlen($arResult["urlToEdit"]) > 0)
										{
											?>
											<a href="">Редактировать</a>
											<?
										}
										?>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							
						</td>
					</tr>
				</table>
			</td>
		</tr>
		</table>
		<?
	}
}
?>
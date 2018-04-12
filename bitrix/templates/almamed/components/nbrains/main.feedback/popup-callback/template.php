<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback-p" id="callback">

	<span class="button b-close"><span>&times;</span></span>

	<h1 class="mfeedback-p-head">
		Заказать звонок
	</h1>


<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}

if(strlen($arResult["OK_MESSAGE"]) > 0):?>

	<div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div>

<? else: ?>

	<form action="<?=POST_FORM_ACTION_URI?>" method="POST" enctype="multipart/form-data">

<?=bitrix_sessid_post()?>

	<? foreach($arResult['USER_FIELD'] as $field):?>

		<?if($field['PROPERTY_TYPE'] == "S" and !$field["USER_TYPE"] and $field['CODE'] != "URL"):?>
		<div class="mf-name">
			<input type="text" placeholder="<?=$field['NAME']?><?=($field['IS_REQUIRED'] == "Y") ? "*" : ""?>" name="<?=$field['CODE']?>" value="<?=$arResult[$field['CODE']]?>">
		</div>
		<? else: ?>
		<div class="mf-name">
			<textarea name="<?=$field['CODE']?>" rows="10" placeholder="<?=$field['NAME']?><?=($field['IS_REQUIRED'] == "Y") ? "*" : ""?>"><?=$arResult[$field['CODE']]?></textarea>
		</div>
		<? endif; ?>

	<? endforeach; ?>

	<div class="mf-name">
		<?$APPLICATION->IncludeComponent("bitrix:main.userconsent.request", "userconsent.request", Array(
		"ID" => "1",
		"IS_CHECKED" => "Y",
		"AUTO_SAVE" => "N",
		"IS_LOADED" => "Y",
		),
	false
	);?>
	</div>



	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
	</div>
	<?endif;?>

		
	<div class="mfeedback-p-footer">
		<input type="hidden" name="URL" value="<?=$_SERVER['SERVER_NAME'].$APPLICATION->GetCurPage();?>">
		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
		<input type="submit" name="submit" class="subscribe__btn" value="<?=GetMessage("MFT_SUBMIT")?>">
	</div>


</form>

<? endif; ?>

</div>


<?if(!empty($arResult["ERROR_MESSAGE"]) OR strlen($arResult["OK_MESSAGE"]) > 0):?>
	<script>
		$(function(){
			$('#callback').bPopup({
				zIndex:1000
			});
		});

	</script>
<?endif;?>

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
<div class="mfeedback">


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

		<?if($field['PROPERTY_TYPE'] == "S" and !$field["USER_TYPE"]):?>
		<div class="mf-name">
			<div class="mf-text">
				<?=$field['NAME']?>

				<?if($field['IS_REQUIRED'] == "Y"):?>
					<span class="mf-req">*</span>
				<?endif?>
			</div>
			<input type="text" name="<?=$field['CODE']?>" value="<?=$arResult[$field['CODE']]?>">
		</div>
		<? else: ?>
		<div class="mf-name">
			<div class="mf-text">
				<?=$field['NAME']?>

				<?if($field['IS_REQUIRED'] == "Y"):?>
					<span class="mf-req">*</span>
				<?endif?>
			</div>
			<textarea name="<?=$field['CODE']?>" rows="10"><?=$arResult[$field['CODE']]?></textarea>
		</div>
		<? endif; ?>

	<? endforeach; ?>

    <?if($arParams["USE_CAPTCHA"] == "Y"):?>
        <div class="mf-name">
            <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
            <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
        </div>

        <div class="mf-name">
            <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
            <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
            <input type="text" name="captcha_word" size="30" maxlength="50" value="">
        </div>
    <?endif;?>

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

	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<input type="submit" name="submit" class="subscribe__btn" value="<?=GetMessage("MFT_SUBMIT")?>">
</form>

<? endif; ?>

</div>

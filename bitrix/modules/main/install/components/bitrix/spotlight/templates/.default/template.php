<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

/** @var array $arResult*/
/** @var \CBitrixComponentTemplate $this*/

$frame = $this->createFrame()->begin("");

if ($arResult["IS_AVAILABLE"]):
	CJSCore::Init("spotlight");
?>


<script>
BX.ready(function() {
	var spotlight = BX.SpotLight.Manager.create(<?=CUtil::phpToJsObject($arResult["OPTIONS"], false, false, true)?>);
	spotlight.show();
});
</script>

<?
endif;
$frame->end();
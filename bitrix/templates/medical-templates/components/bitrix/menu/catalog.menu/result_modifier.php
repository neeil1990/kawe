<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

$page = $APPLICATION->GetCurPage();
$code = explode('/', $page);
$dbRes = CIBlockSection::GetList(array(), ["IBLOCK_ID" => IBLOCK_CATALOG, "CODE" => $code[2]], false, array("ID", "UF_*"));
if ($arCurSection = $dbRes->Fetch())
	$arResult['PROPERTIES'] = $arCurSection;
//determine if child selected

$bWasSelected = false;
$arParents = array();
$depth = 1;

foreach($arResult as $i => $arMenu)
{
	$depth = $arMenu['DEPTH_LEVEL'];

	if($arMenu['IS_PARENT'] == true)
	{
		$arParents[$arMenu['DEPTH_LEVEL']-1] = $i;
	}
	elseif($arMenu['SELECTED'] == true)
	{
		$bWasSelected = true;
		break;
	}
}

if($bWasSelected)
{
	for($i=0; $i<$depth-1; $i++)
		$arResult[$arParents[$i]]['CHILD_SELECTED'] = true;
}
?>

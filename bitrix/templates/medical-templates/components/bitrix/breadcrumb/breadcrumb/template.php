<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;


//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

$strReturn .= '<div class="breadcrumb"><div class="container"><ol class="breadcrumb__list">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	$title = ($index > 0) ? $title : "";
	$icon = (!$index) ? "icon-home" : "";

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li class="breadcrumb__item">
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url" class="'.$icon.'">
					<span>'.$title.'</span>
				</a>
			</li>';
	}
	else
	{
		$strReturn .= '
			<li class="breadcrumb__item">
				<span>'.$title.'</span>
			</li>';
	}
}

$strReturn .= '</ol></div></div>';

return $strReturn;

?>

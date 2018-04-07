<?php
IncludeModuleLangFile(__FILE__);

$SUP_RIGHT = $APPLICATION->GetGroupRight("support");

if($SUP_RIGHT>"D")
{
   $aMenu[] = array(
        "parent_menu" => "global_menu_services",
        "sort" => 50,
        "text" => GetMessage("ARTRIX_OPTIMIZE_NAME"),
        "title" => GetMessage("ARTRIX_OPTIMIZE_TITLE"),
        "url" => "optimizer_artrix.php?lang=".LANGUAGE_ID,
        "more_url" => array("optimizer_artrix.php"),
        "icon" => "",
        "page_icon" => "",
    );
    return $aMenu;
}
?>
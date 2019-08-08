<?php
// @codingStandardsIgnoreStart
IncludeModuleLangFile(__FILE__);

if ('D' < $APPLICATION->GetGroupRight("roistat.b24")) {
    return $aMenu;
}
return false;
// @codingStandardsIgnoreEnd
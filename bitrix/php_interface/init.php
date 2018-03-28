<?php
//IBlock catalog id
define("IBLOCK_CATALOG","33");

function priceDiscount($id){
    global $USER;
    $ar_res_price = CCatalogProduct::GetOptimalPrice($id, 1, $USER->GetUserGroupArray(), 'N');
    if($ar_res_price['DISCOUNT_PRICE']){
        return array("DISCOUNT" => $ar_res_price['DISCOUNT'], "DISCOUNT_PRICE" => $ar_res_price['DISCOUNT_PRICE']." ₽");
    }else{
        return false;
    }
}
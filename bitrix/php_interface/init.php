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

function EditData ($DATA){
    $MES = array(
        "01" => "Января",
        "02" => "Февраля",
        "03" => "Марта",
        "04" => "Апреля",
        "05" => "Мая",
        "06" => "Июня",
        "07" => "Июля",
        "08" => "Августа",
        "09" => "Сентября",
        "10" => "Октября",
        "11" => "Ноября",
        "12" => "Декабря"
    );

    $arData = explode(".", $DATA);
    $d = ($arData[0] < 10) ? substr($arData[0], 1) : $arData[0];
    $newData = $d." ".$MES[$arData[1]]." ".$arData[2];
    return $newData;
}
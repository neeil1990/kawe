<?php
//IBlock catalog id
define("IBLOCK_CATALOG","33");

AddEventHandler("main", "OnBeforeEndBufferContent", "OnBeforeEndBufferContent", 100500);
function OnBeforeEndBufferContent()
{
            $arPanelButtons = &$GLOBALS['APPLICATION']->arPanelButtons;
            foreach ($arPanelButtons as &$arItemPanel) {
                if ($arItemPanel['ICON'] == 'bx-panel-site-template-icon') {

                    if (isset($arItemPanel['MENU']) && is_array($arItemPanel['MENU'])) {

                        $arItemPanel['MENU'][] = array(
                            'TEXT' => "Цветовые схемы",
                            'MENU' => array(
                                array('ACTION' => "jsUtils.Redirect([], '/?THEME=schemes_1')", 'TEXT' => "schemes_1"),
                                array('ACTION' => "jsUtils.Redirect([], '/?THEME=schemes_2')", 'TEXT' => "schemes_2"),
                                array('ACTION' => "jsUtils.Redirect([], '/?THEME=schemes_3')", 'TEXT' => "schemes_3"),
                                array('ACTION' => "jsUtils.Redirect([], '/?THEME=schemes_4')", 'TEXT' => "schemes_4"),
                                array('ACTION' => "jsUtils.Redirect([], '/?THEME=schemes_5')", 'TEXT' => "schemes_5"),
                                array('ACTION' => "jsUtils.Redirect([], '/?THEME=schemes_6')", 'TEXT' => "schemes_6"),
                                array('ACTION' => "jsUtils.Redirect([], '/?THEME=schemes_7')", 'TEXT' => "schemes_7"),
                                array('ACTION' => "jsUtils.Redirect([], '/?THEME=schemes_8')", 'TEXT' => "schemes_8"),
                                array('ACTION' => "jsUtils.Redirect([], '/?THEME=schemes_9')", 'TEXT' => "schemes_9"),
                                array('ACTION' => "jsUtils.Redirect([], '/?THEME=schemes_10')", 'TEXT' => "schemes_10"),
                            ),
                        );
                    }
                }
            }
}
if($_REQUEST['THEME']){
    COption::SetOptionString("main","color_theme",$_REQUEST['THEME']);
}





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


AddEventHandler("sale", "OnOrderNewSendEmail", "bxModifySaleMails");

function bxModifySaleMails($orderID, &$eventName, &$arFields)
{
  $arOrder = CSaleOrder::GetByID($orderID);
  $order_props = CSaleOrderPropsValue::GetOrderProps($orderID);

  $phone="";
  $delivery="";
  while ($arProps = $order_props->Fetch())
  {
    if ($arProps["CODE"] == "PHONE")
    {
       $phone = htmlspecialchars($arProps["VALUE"]);
    }
    if ($arProps["CODE"] == "ADDRESS")
    {
        $delivery = htmlspecialchars($arProps["VALUE"]);
    }
  }

  if(CModule::IncludeModule("sale") && CModule::IncludeModule("iblock"))
    {
        $strOrderList = "";
        $dbBasketItems = CSaleBasket::GetList(
            array("NAME" => "ASC"),
            array("ORDER_ID" => $orderID),
            false,
            false,
            array("PRODUCT_ID", "ID", "NAME", "QUANTITY", "PRICE", "CURRENCY")
        );
        while ($arProps = $dbBasketItems->Fetch())
        {
            $db_res_props = CSaleBasket::GetPropsList(array(),array("BASKET_ID" => $arProps['ID'],"CODE" => "CML2_ARTICLE"));
            if ($ar_res_props = $db_res_props->Fetch())
            {
                $arProps['ARTICLE'] = trim($ar_res_props['VALUE']);
            }else
                unset($arProps['ARTICLE']);

            $strOrderList .= "<tr><td style='text-align: left;padding: 5px 0;'>".$arProps['NAME']." (".$arProps['ARTICLE'].")</td><td style='padding: 5px 10px;'>".$arProps['QUANTITY']."</td><td style='padding: 5px 0;'>".CurrencyFormat($arProps['PRICE'], $arProps['CURRENCY'])."</td><tr>";
        }
    $arFields["ORDER_LIST_TABLE"] = $strOrderList;
  }

  $arFields["PHONE"] =  $phone;
  $arFields["DELIVERY"] =  $delivery;
  $arFields["USER_DESCRIPTION"] =  $arOrder['USER_DESCRIPTION'];
}

AddEventHandler("sale", "OnOrderStatusSendEmail", "bxModifySaleStatusSendEmail");
function bxModifySaleStatusSendEmail($orderID, &$eventName, &$arFields, $status){

    $arOrder = CSaleOrder::GetByID($orderID);
    $order_props = CSaleOrderPropsValue::GetOrderProps($orderID);

    $phone="";
    $delivery="";
    while ($arProps = $order_props->Fetch())
    {
        if ($arProps["CODE"] == "PHONE")
        {
            $phone = htmlspecialchars($arProps["VALUE"]);
        }
        if ($arProps["CODE"] == "ADDRESS")
        {
            $delivery = htmlspecialchars($arProps["VALUE"]);
        }
    }

    if(CModule::IncludeModule("sale") && CModule::IncludeModule("iblock"))
    {
        $strOrderList = "";
        $dbBasketItems = CSaleBasket::GetList(
            array("NAME" => "ASC"),
            array("ORDER_ID" => $orderID),
            false,
            false,
            array("PRODUCT_ID", "ID", "NAME", "QUANTITY", "PRICE", "CURRENCY")
        );
        $sum = 0;
        while ($arProps = $dbBasketItems->Fetch())
        {
            $db_res_props = CSaleBasket::GetPropsList(array(),array("BASKET_ID" => $arProps['ID'],"CODE" => "CML2_ARTICLE"));
            if ($ar_res_props = $db_res_props->Fetch())
            {
                $arProps['ARTICLE'] = trim($ar_res_props['VALUE']);
            }else
                unset($arProps['ARTICLE']);

            $sum += $arProps['PRICE']*$arProps['QUANTITY'];
            $strOrderList .= "<tr><td style='text-align: left;padding: 5px 0;'>".$arProps['NAME']." (".$arProps['ARTICLE'].")</td><td style='padding: 5px 10px;'>".$arProps['QUANTITY']."</td><td style='padding: 5px 0;'>".CurrencyFormat($arProps['PRICE'], $arProps['CURRENCY'])."</td><tr>";
        }
        $arFields["ORDER_LIST_TABLE"] = $strOrderList;
        $arFields["PRICE"] = CurrencyFormat($sum,"RUB");
    }
    $arFields["PHONE"] =  $phone;
    $arFields["ORDER_USER"] =  $arOrder['USER_NAME'].' '.$arOrder['USER_LAST_NAME'];
    $arFields["DELIVERY"] =  $delivery;
}

AddEventHandler("sale", "OnOrderPaySendEmail", "bxModifySaleStatusPaySendEmail");
function bxModifySaleStatusPaySendEmail($orderID, &$eventName, &$arFields){

    $arOrder = CSaleOrder::GetByID($orderID);
    $order_props = CSaleOrderPropsValue::GetOrderProps($orderID);

    $phone="";
    $delivery="";
    while ($arProps = $order_props->Fetch())
    {
        if ($arProps["CODE"] == "PHONE")
        {
            $phone = htmlspecialchars($arProps["VALUE"]);
        }
        if ($arProps["CODE"] == "ADDRESS")
        {
            $delivery = htmlspecialchars($arProps["VALUE"]);
        }
    }

    if(CModule::IncludeModule("sale") && CModule::IncludeModule("iblock"))
    {
        $strOrderList = "";
        $dbBasketItems = CSaleBasket::GetList(
            array("NAME" => "ASC"),
            array("ORDER_ID" => $orderID),
            false,
            false,
            array("PRODUCT_ID", "ID", "NAME", "QUANTITY", "PRICE", "CURRENCY")
        );
        $sum = 0;
        while ($arProps = $dbBasketItems->Fetch())
        {
            $db_res_props = CSaleBasket::GetPropsList(array(),array("BASKET_ID" => $arProps['ID'],"CODE" => "CML2_ARTICLE"));
            if ($ar_res_props = $db_res_props->Fetch())
            {
                $arProps['ARTICLE'] = trim($ar_res_props['VALUE']);
            }else
                unset($arProps['ARTICLE']);

            $sum += $arProps['PRICE']*$arProps['QUANTITY'];
            $strOrderList .= "<tr><td style='text-align: left;padding: 5px 0;'>".$arProps['NAME']." (".$arProps['ARTICLE'].")</td><td style='padding: 5px 10px;'>".$arProps['QUANTITY']."</td><td style='padding: 5px 0;'>".CurrencyFormat($arProps['PRICE'], $arProps['CURRENCY'])."</td><tr>";
        }
        $arFields["ORDER_LIST_TABLE"] = $strOrderList;
        $arFields["PRICE"] = CurrencyFormat($sum,"RUB");
    }
    $arFields["PHONE"] =  $phone;
    $arFields["ORDER_USER"] =  $arOrder['USER_NAME'].' '.$arOrder['USER_LAST_NAME'];
    $arFields["DELIVERY"] =  $delivery;
}

AddEventHandler('main', 'OnBeforeEventAdd', array('MyClassTrack', 'OnTrack'));

class MyClassTrack
{
    static function OnTrack(&$event, &$lid, &$arFields, &$message_id) {
        if ($event == 'SALE_ORDER_TRACKING_NUMBER') {
            $orderID = $arFields['ORDER_REAL_ID'];
            $arOrder = CSaleOrder::GetByID($orderID);
            $order_props = CSaleOrderPropsValue::GetOrderProps($orderID);

            $phone="";
            $delivery="";
            while ($arProps = $order_props->Fetch())
            {
                if ($arProps["CODE"] == "PHONE")
                {
                    $phone = htmlspecialchars($arProps["VALUE"]);
                }
                if ($arProps["CODE"] == "ADDRESS")
                {
                    $delivery = htmlspecialchars($arProps["VALUE"]);
                }
            }

            if(CModule::IncludeModule("sale") && CModule::IncludeModule("iblock"))
            {
                $strOrderList = "";
                $dbBasketItems = CSaleBasket::GetList(
                    array("NAME" => "ASC"),
                    array("ORDER_ID" => $orderID),
                    false,
                    false,
                    array("PRODUCT_ID", "ID", "NAME", "QUANTITY", "PRICE", "CURRENCY")
                );
                $sum = 0;
                while ($arProps = $dbBasketItems->Fetch())
                {
                    $db_res_props = CSaleBasket::GetPropsList(array(),array("BASKET_ID" => $arProps['ID'],"CODE" => "CML2_ARTICLE"));
                    if ($ar_res_props = $db_res_props->Fetch())
                    {
                        $arProps['ARTICLE'] = trim($ar_res_props['VALUE']);
                    }else
                        unset($arProps['ARTICLE']);

                    $sum += $arProps['PRICE']*$arProps['QUANTITY'];
                    $strOrderList .= "<tr><td style='text-align: left;padding: 5px 0;'>".$arProps['NAME']." (".$arProps['ARTICLE'].")</td><td style='padding: 5px 10px;'>".$arProps['QUANTITY']."</td><td style='padding: 5px 0;'>".CurrencyFormat($arProps['PRICE'], $arProps['CURRENCY'])."</td><tr>";
                }
                $arFields["ORDER_LIST_TABLE"] = $strOrderList;
                $arFields["PRICE"] = CurrencyFormat($sum,"RUB");
            }
            $arFields["PHONE"] =  $phone;
            $arFields["ORDER_USER"] =  $arOrder['USER_NAME'].' '.$arOrder['USER_LAST_NAME'];
            $arFields["DELIVERY"] =  $delivery;
        }
    }
}

// регистрируем обработчик
AddEventHandler("search", "BeforeIndex", "BeforeIndexHandler");
// создаем обработчик события "BeforeIndex"
function BeforeIndexHandler($arFields)
{
    if(!CModule::IncludeModule("iblock")) // подключаем модуль
        return $arFields;
    if($arFields["MODULE_ID"] == "iblock")
    {
        $db_props = CIBlockElement::GetProperty(                        // Запросим свойства индексируемого элемента
            $arFields["PARAM2"],         // BLOCK_ID индексируемого свойства
            $arFields["ITEM_ID"],          // ID индексируемого свойства
            array("sort" => "asc"),       // Сортировка (можно упустить)
            Array("CODE" => "CML2_ARTICLE")); // CODE свойства (в данном случае артикул)
        if($ar_props = $db_props->Fetch())
            $arFields["TITLE"] .= " Артикул: ".$ar_props["VALUE"];   // Добавим свойство в конец заголовка индексируемого элемента
    }
    return $arFields; // вернём изменения
}

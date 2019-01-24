<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$priceTotal = 0;
$bUseVat = false;
$arBasketOrder = array();
for ($i = 0, $max = count($arBasketIDs); $i < $max; $i++)
{
    $arBasketTmp = CSaleBasket::GetByID($arBasketIDs[$i]);

    if (floatval($arBasketTmp["VAT_RATE"]) > 0 )
        $bUseVat = true;

    $priceTotal += $arBasketTmp["PRICE"]*$arBasketTmp["QUANTITY"];

    $arBasketTmp["PROPS"] = array();
    if (isset($_GET["PROPS_ENABLE"]) && $_GET["PROPS_ENABLE"] == "Y")
    {
        $dbBasketProps = CSaleBasket::GetPropsList(
            array("SORT" => "ASC", "NAME" => "ASC"),
            array("BASKET_ID" => $arBasketTmp["ID"]),
            false,
            false,
            array("ID", "BASKET_ID", "NAME", "VALUE", "CODE", "SORT")
        );
        while ($arBasketProps = $dbBasketProps->GetNext())
            $arBasketTmp["PROPS"][$arBasketProps["ID"]] = $arBasketProps;
    }

    $arBasketOrder[] = $arBasketTmp;
}

//налоги
$arTaxList = array();
$db_tax_list = CSaleOrderTax::GetList(array("APPLY_ORDER"=>"ASC"), Array("ORDER_ID" => $ORDER_ID));
$iNds = -1;
$i = 0;
while ($ar_tax_list = $db_tax_list->Fetch())
{
    $arTaxList[$i] = $ar_tax_list;
    // определяем, какой из налогов - НДС
    // НДС должен иметь код NDS, либо необходимо перенести этот шаблон
    // в каталог пользовательских шаблонов и исправить
    if ($arTaxList[$i]["CODE"] == "NDS")
        $iNds = $i;
    $i++;
}


?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:x="urn:schemas-microsoft-com:office:excel"
      xmlns="http://www.w3.org/TR/REC-html40">
<head>
    <meta http-equiv=Content-Type content="text/html; charset=<?=LANG_CHARSET?>">
    <meta name=ProgId content=Excel.Sheet>
    <title langs="ru">Счет с печатью</title>
    <meta http-equiv=content-type content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <style type="text/css">
        @media print {
            *{-webkit-print-color-adjust:exact;}
            @page{margin:1cm;}
            a,a:visited{color:#000;outline:0 none;}
            .no_print,.warning,.button_small {display:none !important;}
            select {	border: none; background: transparent; -webkit-appearance: none; -moz-appearance: none; appearance: none; }
            .frame_form {
                margin: 0;
                padding: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
        @media screen {
            .landscape { width:297mm; }
            .book { width:210mm; }
            .frame_form {
                padding: 0.3cm;
                background: white;
                margin: 60px auto;
                border: 1px #D3D3D3 solid;
                border-radius: 5px;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            }
            .frame_form .frame_form {
                margin: 0;
                padding: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
        .frame_form {counter-reset:section;}
        .counter{counter-increment:section;}
        .counter:before{content:counter(section) " ";}
        select{position:absolute;margin-top:-6px;background:transparent;font-size:1em;}
        select,.button.green,.remove{cursor:pointer;}
        .hide{display:none;}
        .inline_edit:hover,.inline_edit:focus{background:#B4EEBB;color:#000;}
        .invoice_menu,.invoice_menu_mass{position:fixed;z-index:99;background-color:#f5f5f5;-webkit-box-shadow:0 0 6px 0 rgba(50,50,50,0.58);-moz-box-shadow:0 0 6px 0 rgba(50,50,50,0.58);box-shadow:0 0 6px 0 rgba(50,50,50,0.58);width:97%;left:0;right:0;top:0;margin:0 auto;padding:13px 10px;}
        .orders-alert{position:absolute;width:210px;height:47px;text-align:center;top:0;line-height:3.2;left:0;right:0;background:#aaa;margin:0 auto;}
        .top-item-one:nth-child(1){text-align:center;flex-basis:47%;min-width:47%;border:1px solid;}
        .top-item-one:nth-child(1) div{display:inline-block;padding:0 0 0 5px;}
        .top-item-one:nth-child(1) div:nth-child(2),.top-item-one:nth-child(1) div:nth-child(4){width:80%;text-align:left;}
        .top-item-one:nth-child(1) div:nth-child(3){border-left:1px solid;}
        .top-item-one:nth-child(1) div:nth-child(1),.top-item-one:nth-child(1) div:nth-child(3){width:20%;font-weight:700;}
        .top-item-one:nth-child(2){flex-basis:7.5%;min-width:7.5%;border:1px solid;border-left:none;border-right:none;}
        .top-item-one:nth-child(3){text-align:center;flex-basis:43%;min-width:43%;border:1px solid;font-weight:700;}
        .top-item-two:nth-child(1){flex-basis:47%;min-width:47%;border-left:1px solid;font-weight:700;}
        .top-item-two:nth-child(2){text-align:right;flex-basis:7.5%;min-width:7.5%;border-left:1px solid;border-right:1px solid;}
        .top-item-three:nth-child(1){flex-basis:47%;min-width:47%;border-left:1px solid;}
        .top-item-three:nth-child(2){text-align:right;flex-basis:7.5%;min-width:7.5%;font-weight:700;border-left:1px solid;border-right:1px solid;}
        .top-item-four:nth-child(1){flex-basis:47%;min-width:47%;font-weight:700;border-top:1px solid;border-left:1px solid;border-bottom:none;}
        .top-item-four:nth-child(2){text-align:right;flex-basis:7.5%;min-width:7.5%;font-weight:700;border:1px solid;border-bottom:none;}
        .top-item-four:nth-child(3){flex-basis:43%;min-width:43%;border-top:1px solid;border-right:1px solid;}
        .top-item-five:nth-child(1){flex-basis:47%;min-width:47%;border-left:1px solid;border-bottom:1px solid;}
        .top-item-five:nth-child(2){text-align:right;flex-basis:7.5%;min-width:7.5%;font-weight:700;border:1px solid;}
        .top-item-five:nth-child(3){flex-basis:43%;min-width:43%;border:1px solid;border-left:none;}
        .top-column{display:flex;flex-direction:column;padding:0 0 5px;}
        .item-top-column:nth-child(2){border-bottom:1px solid;font-weight:700;padding:4px 0 0 4px;}
        .title{display:flex;flex-direction:column;}
        .item-title-line-title:nth-child(1){font-size:2em;font-weight:700;border-bottom:3px solid;line-height:1.2;white-space:nowrap;padding:0 5px;}
        .item-title-line-title:nth-child(2){flex-basis:100%;font-size:2em;font-weight:700;border-bottom:3px solid;line-height:1.2;white-space:nowrap;padding:0 5px;}
        .item-line-title:nth-child(1){flex-basis:90px;text-align:right;font-weight:700;padding:0 3px 0 0;}
        .item-line-title:nth-child(2){flex-basis:100%;border-bottom:1px solid;}
        .top-one,.top-two,.top-three,.top-four,.top-five{display:flex;justify-content:center;}
        .top-item-one,.top-item-two,.top-item-three,.top-item-four,.top-item-five{padding:2px;}
        .top-item-two:nth-child(3),.top-item-three:nth-child(3){flex-basis:43%;min-width:43%;border-right:1px solid;}
        .item-top-column:nth-child(3),.item-top-column:nth-child(4),.item-top-column:nth-child(5){border-bottom:1px solid;padding:4px 0 0 4px;}
        .item-invoice-total:nth-child(1){white-space:nowrap;font-weight:700;padding:0 5px 0 0;}
        .item-invoice-total:nth-child(2){flex-basis:100%;}
        .invoice-total:nth-child(2) .item-invoice-total:nth-child(1){border-bottom:1px solid;flex-basis:100%;}
        .block-bottom{display:flex;justify-content:space-between;padding:10px 0 0 10px;}
        .item-bottom:nth-child(1){flex-basis:340px;text-align:right;}
        .item-bottom:nth-child(2){border-bottom:1px solid;flex-basis:100%;text-align:center;margin:0 10px;}
        .item-bottom:nth-child(3){border-bottom:1px solid;flex-basis:100%;text-align:center;}
        .block-bottom:nth-child(2),.block-bottom:nth-child(4),.block-bottom:nth-child(6){padding:0 0 0 10px;}
        .block-bottom:nth-child(2) .item-bottom:nth-child(2),.block-bottom:nth-child(2) .item-bottom:nth-child(3),.block-bottom:nth-child(4) .item-bottom:nth-child(2),.block-bottom:nth-child(4) .item-bottom:nth-child(3),.block-bottom:nth-child(6) .item-bottom:nth-child(2),.block-bottom:nth-child(6) .item-bottom:nth-child(3){font-size:.7em;border:none;}
        .order-items table{margin-bottom:1px;width:100%;}
        .order-items th,.order-items td{border:1px solid;}
        .order-items th:nth-child(2){width:100%;}
        .order-items th{font-size:.8em;}
        .order-items th:nth-child(6) div:nth-child(1){border-bottom:1px solid;}
        .order-items th:nth-child(6) span:nth-child(2){border-right:1px solid;}
        .order-items td{border:1px solid;padding:1px 2px;white-space: nowrap;}
        .order-items td:nth-child(1){text-align:center;font-weight:700;}
        .order-items td:nth-child(5){text-align:right;}
        .order-items td:nth-child(6){text-align:center;width:50px;}
        .invoice_table_bottom td:nth-child(1){border:none;text-align:right;font-weight:100;padding:0 2px;}
        .invoice_table_bottom td:nth-child(2){text-align:right;width:50px;white-space:nowrap;}
        .order-items td:nth-child(6) span{font-size:.6em;white-space: nowrap;vertical-align: middle;}
        .remove{position:absolute;cursor:pointer;margin:-3px 0 0 -25px;}
        .remove img{width:20px;}
        .paid-stamp img{width:135px;left:0;top:0;}
        .invoice_table_bottom td:nth-child(1) .button {
            font-size: 10px !important;
            padding: 1px 5px 3px !important;
            height: 11px !important;
            line-height: 1 !important;
            text-align: center;
            position: absolute;
            border-radius: 4px;
            border: none;
            box-shadow: 0 0 1px rgba(0,0,0,.3), 0 1px 1px rgba(0,0,0,.3), inset 0 1px 0 #fff, inset 0 0 1px rgba(255,255,255,.5);
            background-color: #e0e9ec;
            background-image: -webkit-linear-gradient(bottom, #d7e3e7, #fff)!important;
            color: #3f4b54;
            cursor: pointer;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-weight: bold;
            text-shadow: 0 1px rgba(255,255,255,0.7);
            text-decoration: none;
            vertical-align: middle;
            -webkit-font-smoothing: antialiased;
        }
        .stamp_src,.faximile_src{cursor:move;position:absolute;}
        .top-item-one,.invoice-total{display:flex;justify-content:space-between;}
        .item-top-column:nth-child(1) p,.bottom_text p{margin: 0;line-height: 1;}
        .bottom_text{text-align:center;margin:10px 0 0;}
        .item-top-column:nth-child(1),.order-items td:nth-child(3),.order-items td:nth-child(4){text-align:center;}
        .line-title,.title-line-title{display:flex;padding:4px;}
        .order-items td:nth-child(7),.order-items td:nth-child(8){text-align:right;width:48px;}
        @media print { @page { margin:5mm; } }
        body { font-size:14px; }
        .order-items th { background-color:#eed; color:#000; }
        .faximile_src {
            width:40mm;
            height:mm;
            left: 200px;
            bottom: -115pxpx;
        }
        .stamp_src {
            width:35mm;
            height:mm;
            left: 300px;
            bottom: -115pxpx;
        }
    </style>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<div class="invoice_menu no_print">
    <span class="button green translate" onclick="printPage();">РАСПЕЧАТАТЬ</span>
</div>
<div class="frame_form landscape">
    <div class="hend-top">
        <div class="top-column">
            <div class="item-top-column inline_edit" contenteditable="true">
                <p>
                    <img src="/bitrix/templates/medical-templates/img/logo.png" alt="" style="max-width: 182px; max-height: 89px; float: left; margin: 0px 10px 10px 0px;">                    </p><p>                    Внимание! Счет действителен 5 календарных дней.</p><p style="margin-left: 180px;">
                    Оплата данного счета означает согласие с условиями поставки товара.
                </p>
                <p>
                    Товар отпускается по факту прихода денег на р/с Поставщика.
                </p>
                <p>
                    ИП Новикова Л.П. применяет УСН, счет-фактура не предоставляется.
                </p>
                <p style="margin-left: 180px;">
                    <br>
                </p>
                <p style="margin-left: 180px;">
                    <br>
                </p>
                <p style="margin-left: 180px;">
                    <span></span>
                </p>
                <p><br></p>
            </div>
        </div>
    </div>
    <div class="hend-bottom">
        <div class="top-one">
            <div class="top-item-one">
                <div>ИНН:</div><div class="inline_edit" contenteditable="true">362903114143</div>
                <div>КПП:</div><div class="inline_edit" contenteditable="true"></div>
            </div>
            <div class="top-item-one"></div>
            <div class="top-item-one"></div>
        </div>
        <div class="top-two">
            <div class="top-item-two">Получатель</div>
            <div class="top-item-two"></div>
            <div class="top-item-two"></div>
        </div>
        <div class="top-three">
            <div class="top-item-three inline_edit" contenteditable="true">Индивидуальный Предприниматель Новикова Людмила Петровна</div>
            <div class="top-item-three">Р/счет</div>
            <div class="top-item-three inline_edit" contenteditable="true">40802810200000495887</div>
        </div>
        <div class="top-four">
            <div class="top-item-four">Банк получателя</div>
            <div class="top-item-four">БИК</div>
            <div class="top-item-four inline_edit" contenteditable="true">044525974</div>
        </div>
        <div class="top-five">
            <div class="top-item-five inline_edit" contenteditable="true">Банк АО «Тинькофф Банк»</div>
            <div class="top-item-five">К/счет</div>
            <div class="top-item-five inline_edit" contenteditable="true">30101810145250000974</div>
        </div>
    </div>
    <div class="hend-title">
        <div class="title">
            <div class="item-title">
                <div class="title-line-title">
                    <div class="item-title-line-title">Счет:</div>
                    <div class="item-title-line-title inline_edit" contenteditable="true">№  <?=$arOrder['ACCOUNT_NUMBER'];?> от <?=$arOrder['DATE_INSERT_FORMAT']?></div>
                </div>
            </div>
            <div class="item-title">
                <div class="line-title">
                    <div class="item-line-title">Поставщик:</div>
                    <div class="item-line-title inline_edit" contenteditable="true">Индивидуальный Предприниматель Новикова Людмила Петровна, 394030 г.Воронеж, ул. Революции 1905 года, д. 31Е, офис 174, ИНН: 362903114143 , тел: 8-800-100-37-97 , info@almamed.su</div>
                </div>
            </div>





            <div class="item-title">
                <div class="line-title">
                    <div class="item-line-title">Плательщик:</div>
                    <div class="item-line-title inline_edit" contenteditable="true">
                        <?=($arOrderProps['COMPANY']) ? $arOrderProps['COMPANY'] : $arOrderProps['FIO']?>,
                        <?=$arOrderProps['LOCATION_COUNTRY']?>
                        <?=$arOrderProps['ADDRESS']?>,
                        тел: <?=$arOrderProps['PHONE']?>,
                        <?=$arOrderProps['EMAIL']?>
                        <?=($arOrderProps['INN']) ? ", ИНН: ".$arOrderProps['INN'] : "";?>
                    </div>
                </div>
            </div>
            <div class="item-title">
                <div class="line-title">
                    <div class="item-line-title">Основание:</div>
                    <div class="item-line-title inline_edit" contenteditable="true">Оплата заказа: №  <?=$arOrder['ACCOUNT_NUMBER'];?> от <?=$arOrder['DATE_INSERT_FORMAT']?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="order-items">
        <table border="0" cellpadding="0" cellspacing="0" class="tablesorter">
            <thead>
            <tr>
                <th>№</th>
                <th>Наименование товара, работ, услуг</th>
                <th>Ед.<br>изм.</th>
                <th>Кол-<br>во</th>
                <th>Цена</th>
                <th class="hide"><div>НДС</div><span>ставка&nbsp;</span><span>&nbsp;сумма</span></th>
                <th>Сумма<br> с НДС</th>
            </tr>
            </thead>
            <tbody>

            <?
            $n = 1;
            $sum = 0.00;
            $arTax = array("VAT_RATE" => 0, "TAX_RATE" => 0);
            $mi = 0;
            $total_sum = 0;

            foreach ($arBasketOrder as $arBasket)
            {
                $nds_val = 0;
                $taxRate = 0;

                if (floatval($arQuantities[$mi]) <= 0)
                    $arQuantities[$mi] = DoubleVal($arBasket["QUANTITY"]);

                $b_AMOUNT = DoubleVal($arBasket["PRICE"]);

                //определяем начальную цену
                $item_price = $b_AMOUNT;

                if(DoubleVal($arBasket["VAT_RATE"]) > 0)
                {
                    $bVat = true;
                    $nds_val = ($b_AMOUNT - DoubleVal($b_AMOUNT/(1+$arBasket["VAT_RATE"])));
                    $item_price = $b_AMOUNT - $nds_val;
                    $taxRate = $arBasket["VAT_RATE"]*100;
                }
                elseif(!$bUseVat)
                {
                    $basket_tax = CSaleOrderTax::CountTaxes($b_AMOUNT*$arQuantities[$mi], $arTaxList, $arOrder["CURRENCY"]);

                    for ($i = 0, $max = count($arTaxList); $i < $max; $i++)
                    {
                        if ($arTaxList[$i]["IS_IN_PRICE"] == "Y")
                        {
                            $item_price -= $arTaxList[$i]["TAX_VAL"];
                        }
                        $nds_val += DoubleVal($arTaxList[$i]["TAX_VAL"]);
                        $taxRate += ($arTaxList[$i]["VALUE"]);
                    }
                }
                $total_nds += $nds_val*$arQuantities[$mi];

                ?>

            <tr>
                <td><div class="counter"></div></td>
                <td class="inline_edit" contenteditable="true"><?echo $arBasket["NAME"]; ?></td>
                <td class="inline_edit" contenteditable="true">шт.</td>
                <td class="inline_edit" contenteditable="true"><?echo Bitrix\Sale\BasketItem::formatQuantity($arQuantities[$mi]); ?></td>
                <td class="inline_edit" contenteditable="true"><?echo CCurrencyLang::CurrencyFormat($arBasket["PRICE"], $arOrder["CURRENCY"], false) ?></td>
                <td class="hide inline_edit" contenteditable="true"><span>Без НДС</span></td>
                <td class="hide inline_edit" contenteditable="true">0.00</td>
                <td class="inline_edit"contenteditable="true">
                    <?
                    $sum = $arBasket["PRICE"] * $arQuantities[$mi];
                    echo CCurrencyLang::CurrencyFormat($sum, $arOrder["CURRENCY"], false);
                    ?>
                </td>
            </tr>

            <?
                $total_sum += $arBasket["PRICE"]*$arQuantities[$mi];
                $mi++;
            }?>

            </tbody>
            <!---------------------------------------------->
            <tbody class="RowAdd_742"></tbody>
            <!---------------------------------------------->
            <tbody class="hide">
            <tr>
                <td><div class="counter"></div></td>
                <td class="inline_edit" contenteditable="true">Доставка</td>
                <td class="inline_edit"contenteditable="true">шт.</td>
                <td class="inline_edit"contenteditable="true">1</td>
                <td class="inline_edit" contenteditable="true">0,00</td>
                <td class="hide inline_edit" contenteditable="true"><span>Без НДС</span></td>
                <td class="hide inline_edit" contenteditable="true">0.00</td>
                <td class="inline_edit" contenteditable="true">0,00</td>
            </tr>
            </tbody>
            <tbody class="invoice_table_bottom">
            <tr>
                <td colspan="5">
                    <div class="addCols_742 no_print button green">Добавить строку</div>
                </td>
            </tr>

            <tr class="hide">
                <td colspan="5">Доставка:</td>
                <td colspan="1" class="inline_edit" contenteditable="true">0,00</td>
            </tr>
            <tr class="hide">
                <td colspan="5">Скидка:</td>
                <td colspan="1" class="inline_edit" contenteditable="true">-0,00</td>
            </tr>
            <tr class="hide">
                <td colspan="5">Сумма счета c НДС:</td>
                <td colspan="1" class="inline_edit" contenteditable="true">
                    <?=CCurrencyLang::CurrencyFormat($total_sum, $arOrder["CURRENCY"], false);?>
                </td>
            </tr>


            <tr class="hide">
                <td colspan="5">Предоплата:</td>
                <td colspan="1" class="inline_edit" contenteditable="true">0,00</td>
            </tr>
            <tr>
                <td colspan="5" class='price text_right'>Всего к оплате:</td>
                <td colspan="1" class='amount text_right inline_edit font_weight700' contenteditable="true">
                    <?=CCurrencyLang::CurrencyFormat($total_sum, $arOrder["CURRENCY"], false);?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="invoice_total">
        <div class="invoice-total">
            <div class="item-invoice-total">Всего наименований:</div>
            <div class="item-invoice-total inline_edit" contenteditable="true">
                <?=$mi?>,
                на сумму: <?=CCurrencyLang::CurrencyFormat($total_sum, $arOrder["CURRENCY"], false);?> руб.,
                c НДС</div>
        </div>
        <div class="invoice-total">
            <div class="item-invoice-total"></div>
        </div>
    </div>
    <div class="draggable_block">
        <div class="draggable"><img class="faximile_src" src="//almamed.su/wa-data/public/shop/easyinvoicephys/faximile_image.png?1523977516" /></div>				<div class="draggable"><img class="stamp_src" src="//almamed.su/wa-data/public/shop/easyinvoicephys/stamp_image.png?1523975209" /></div>			</div>
    <div class="bottom">
        <div class="block-bottom">
            <div class="item-bottom">Генеральный директор</div>
            <div class="item-bottom inline_edit" contenteditable="true"></div>
            <div class="item-bottom inline_edit" contenteditable="true">Новикова Людмила Петровна</div>
        </div>
        <div class="block-bottom">
            <div class="item-bottom"></div>
            <div class="item-bottom">(подпись)</div>
            <div class="item-bottom">(расшифровка подписи)</div>
        </div>
        <div class="block-bottom">
            <div class="item-bottom">Бухгалтер</div>
            <div class="item-bottom inline_edit" contenteditable="true"></div>
            <div class="item-bottom inline_edit" contenteditable="true"> </div>
        </div>
        <div class="block-bottom">
            <div class="item-bottom"></div>
            <div class="item-bottom">(подпись)</div>
            <div class="item-bottom">(расшифровка подписи)</div>
        </div>
        <div class="block-bottom">
            <div class="item-bottom">Менеджер</div>
            <div class="item-bottom inline_edit" contenteditable="true"></div>
            <div class="item-bottom">
                <div class="inline_edit" contenteditable="true"></div>
            </div>
        </div>
        <div class="block-bottom">
            <div class="item-bottom"></div>
            <div class="item-bottom">(подпись)</div>
            <div class="item-bottom">(расшифровка подписи)</div>
        </div>
    </div>
    <div class="bottom_text">
        <div class="inline_edit" contenteditable="true" style="display:none"><p><img src="https://almamed.su/wa-data/public/site/themes/osnovnaja_new_header/img/logo.png" width="182" height="89" alt="" style="width: 182px; height: 89px; float: left; margin: 0px 10px 10px 0px;">                    </p><p>                    Внимание! Счет действителен 5 календарных дней.</p><p style="margin-left: 180px;">                    Оплата данного счета означает согласие с условиями поставки товара.</p><p>                                                                Товар отпускается по факту прихода денег на р/с Поставщика.</p><p>ИП Новикова Л.П. применяет УСН, счет-фактура не предоставляется.</p><p style="margin-left: 180px;"><br></p><p style="margin-left: 180px;"><br></p><p style="margin-left: 180px;"><span></span></p><p><br></p></div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $( ".draggable" ).draggable();
        $(".addCols_742").click(function() {
            $('.RowAdd_742').append('<tr>'+
                '<td><div class="remove no_print"><img src="https://almamed.su/wa-apps/shop/plugins/easyinvoicephys/img/mp.png"></div><div class="counter"></div></td>'+
                '<td class="inline_edit" contenteditable="true"></td>'+
                '<td class="inline_edit" contenteditable="true">шт.</td>'+
                '<td class="inline_edit" contenteditable="true">1</td>'+
                '<td class="inline_edit" contenteditable="true">0.00</td>'+
                '<td class="hide inline_edit" contenteditable="true"><span>Без НДС</span></td>'+
                '<td class="hide inline_edit" contenteditable="true">0.00</td>'+
                '<td class="inline_edit" contenteditable="true">0.00</td>'+
                '</tr>');
            return false;
        });
        $("body").on('click','.remove',function() {
            $(this).parents("tr").remove();
            return false;
        });
    });
    function printPage(){
        $('title').text("Счет №<?=$ORDER_ID?>");
        window.print();
    }
</script>
</body>
</html>
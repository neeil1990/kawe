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
$arDeliv = CSaleDelivery::GetByID($arOrder['DELIVERY_ID']);
$arPaySys = CSalePaySystem::GetByID($arOrder['PAY_SYSTEM_ID']);
$arPersType = CSalePersonType::GetByID($arOrder['PERSON_TYPE_ID']);
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Заказ</title>

    <link href="https://almamed.su/wa-content/css/wa/wa-1.3.css?v1.6.4" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://almamed.su/wa-apps/shop/css/shop.css?v7.1.6.1550751371" rel="stylesheet" type="text/css">
    <script src="https://almamed.su/wa-content/js/jquery/jquery-1.11.1.min.js"></script>


</head>
<body class="s-printable">
<div class="s-order">

    <div class="s-split-order-wrapper block double-padded" id="s-split-order-wrapper">

        <div class="float-right s-order-aux ">
            <div class="block half-padded s-printable-print-button align-center">
                <input type="button" value="Печать" onclick="window.print();">
            </div>
            <br>
        </div>

        <!-- order title -->
        <h1 id="s-order-title">
            №<?=$arOrder['ACCOUNT_NUMBER'];?>
            <span class="small" style="font-size: 16px; margin-left: 10px; position: relative; top: -2px; color:#008800;font-style:italic;">
                <i class="icon16 ss new" style="margin-top: 9px;"></i><span style="margin-right: 10px;">
                    <?
                    switch ($arOrder['STATUS_ID']) {
                        case "N":
                            echo "Обработка заказа";
                            break;
                        case "OB":
                            echo "Заказ подтвержден, ожидается оплата";
                            break;
                        case "F":
                            echo "Выполнен";
                            break;
                        case "OT":
                            echo "Отменен";
                            break;
                    }
                    ?>
                </span>
                <em class="hint nowrap s-print-only"><?=$arOrder['DATE_INSERT_FORMAT']?></em>
            </span>

        </h1>

        <!-- order action buttons -->
        <div class="block not-padded s-order-readable"></div>

        <!-- customer info -->
        <div class="profile image50px">
            <div class="image">
                <a href="#">
                    <img src="https://i0.wp.com/almamed.su/wa-content/img/userpic50.jpg?ssl=1" class="userpic">
                </a>
            </div>
            <div class="details">
                <h3>
                    <a href="#">
                        <?=($arOrderProps["CONTACT_PERSON"]) ? $arOrderProps["CONTACT_PERSON"] : $arOrderProps["FIO"];?>
                    </a>
                </h3>
                <ul class="menu-v with-icons compact">
                    <li><i class="icon16 email"></i><a class="inline" href="mailto:msk20@bk.ru"><?=$arOrderProps["EMAIL"]?></a>
                    </li>
                    <li><i class="icon16 phone"></i><?=$arOrderProps["PHONE"]?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="clear-right"></div>

        <?

        ?>
        <div class="float-right s-order-aux">
            <div id="yandex-map-5c6e978e13251" class="map" style="width:200px; height: 200px"></div>
            <script type="text/javascript">
                $(function () {
                    var init = function () {
                        ymaps.ready(function () {
                            ymaps.geocode("<?=$arOrderProps['LOCATION_CITY']?> <?=$arOrderProps['ADDRESS']?>", {
                                results: 1
                            }).then(function (res) {
                                var map = new ymaps.Map('yandex-map-5c6e978e13251', {
                                    center: [55.753994, 37.622093],
                                    zoom: 13,
                                    controls: [
                                        'zoomControl',
                                        'fullscreenControl'
                                    ]
                                });
                                var firstGeoObject = res.geoObjects.get(0),
                                    coords = firstGeoObject.geometry.getCoordinates(),
                                    bounds = firstGeoObject.properties.get('boundedBy');
                                map.geoObjects.add(firstGeoObject);
                                map.setCenter(coords);
                                /*
                                 map.setBounds(bounds, {
                                 checkZoomRange: true
                                 });
                                 */
                            });
                        });
                    }
                    if (!(window.ymaps)) {
                        $.getScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU', init)
                    } else {
                        init();
                    }
                })
            </script>
        </div>

        <h3>
            <span class="gray">Доставка —</span>
            <strong>
                <?
                if ($arDeliv)
                    print $arDeliv['NAME'];
                ?>
            </strong>
        </h3>

        <p class="s-order-address">
            <img src="https://almamed.su/wa-content/img/country/rus.gif" class="overhanging">
            <?=$arOrderProps['LOCATION']?>
            <br>
            <?=$arOrderProps['ADDRESS']?>
            <br>
            <span>Согласие на обработку персональных данных</span> 1
        </p>
        <!-- shipping plugin output -->


        <h3><span class="gray">Оплата —</span>
            <strong><?=$arPaySys['NAME']?></strong>
        </h3>
        <h3>
            <span class="gray">Плательщик —</span>
            <strong>
                <?=$arPersType['NAME']?>
                <?if($arPersType['ID'] == "2"):?>
                    <?=$arOrderProps['COMPANY']?>,
                    ИНН <?=$arOrderProps['INN']?>
                <?else:?>
                    <?=$arOrderProps['FIO']?>
                <?endif;?>
            </strong>
        </h3>

        <?if($arPersType["ID"] == 1 && $arOrderProps['PASSPORT']):?>
        <h3><span class="gray">Паспорт —</span>
            <strong><?=$arOrderProps['PASSPORT']?></strong>
        </h3>
        <? endif; ?>

        <div class="clear-right"></div>

        <!-- order content -->

        <table id="s-order-items" class="light s-order-readable">
            <tbody>
            <tr>
                <th colspan="2"></th>
                <th class="align-right">Кол-во</th>

            </tr>

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


                $res = CIBlockElement::GetByID($arBasket['PRODUCT_ID']);
                if($ar_res = $res->GetNext()) {
                    ?>
                    <tr data-id="2055">
                        <td class="min-width valign-top">
                            <img src="<?=CFile::GetPath($ar_res['PREVIEW_PICTURE'])?>" width="60" height="60">
                        </td>
                        <td>
                            <a href="<?=$ar_res['DETAIL_PAGE_URL']?>"><? echo $arBasket["NAME"]; ?></a>
                            <? foreach ($arBasket['PROPS'] as $prop): ?>
                                <? if ($prop['CODE'] == "CML2_ARTICLE"): ?>
                                    <span class="hint"><?= $prop['VALUE'] ?></span>
                                <? endif; ?>
                            <? endforeach; ?>
                        </td>
                        <td class="align-right nowrap"> <?= ceil($arBasket['QUANTITY']) ?></td>
                    </tr>

                    <?
                    $total_sum += $arBasket["PRICE"] * $arQuantities[$mi];
                    $mi++;
                }
            }?>

            </tbody>
        </table>
    </div>
    <div class="clear-left"></div>
</div>
<div class="clear-both"></div>
</body>
</html>

<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if ($arResult["ShowReady"]=="Y" || $arResult["ShowDelay"]=="Y" || $arResult["ShowSubscribe"]=="Y" || $arResult["ShowNotAvail"]=="Y")
{
	foreach ($arResult["GRID"]["HEADERS"] as $id => $arHeader):
		$arHeader["name"] = (isset($arHeader["name"]) ? (string)$arHeader["name"] : '');
		if ($arHeader["name"] == '')
		{
			$arResult["GRID"]["HEADERS"][$id]["name"] = GetMessage("SALE_".$arHeader["id"]);
			if(strlen($arResult["GRID"]["HEADERS"][$id]["name"])==0)
				$arResult["GRID"]["HEADERS"][$id]["name"] = GetMessage("SALE_".str_replace("_FORMATED", "", $arHeader["id"]));
		}
	endforeach;

?><table class="sale_basket_small"><?
	if ($arResult["ShowReady"]=="Y")
	{
		?><tr><td align="center"><? echo GetMessage("TSBS_READY"); ?></td></tr>
        <tr>

        <td>

            <table cellpadding="0" cellspacing="0" width="100%" style="text-align: right;font-size: 14px;">
                <tr style="opacity: 0.5;">
                    <td style="text-align: left;padding: 5px 0;">Наименование</td>
                    <td style="text-align: left;padding: 5px 0;"></td>
                    <td style="padding: 5px 10px;">Количество</td>
                    <td style="padding: 5px 0;">Стоимость</td>
                </tr>

                <tr>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                </tr>

                <?
                $total_sum = 0;
                foreach ($arResult["ITEMS"]["AnDelCanBuy"] as &$v)
                {
                    ?>
                    <tr>
                        <td style='text-align: left;padding: 5px 10px;'>
                            <img src="<?=CFile::GetPath($v["PREVIEW_PICTURE"]);?>" width="80" height="80">
                        </td>
                        <td style='text-align: left;padding: 5px 0;'>
                            <a href="<?=$v['DETAIL_PAGE_URL']?>"><?=$v['NAME']?></a>
                        </td>
                        <td style='padding: 5px 10px;'><?=$v['QUANTITY']?></td>
                        <td style='padding: 5px 0;white-space: nowrap;'><?=$v['PRICE_FORMATED']?></td>
                    </tr>
                    <?
                    $total_sum += $v['SUM_VALUE'];
                }
                if (isset($v))
                    unset($v);
                ?>
                <tr>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                </tr>

                <tr>
                    <td style="text-align: left;padding: 5px 0;opacity: 0.5;">Общая стоимость заказа</td>
                    <td style="padding: 5px 0;"></td>
                    <td style="padding: 5px 0;"></td>
                    <td style="padding: 5px 0;">
                        <span style="color:#2BA2E1;font-weight: bold;white-space: nowrap;"><?=CurrencyFormat($total_sum,"RUB")?></span>
                    </td>
                </tr>

            </table>
        </td></tr><?
		if ('' != $arParams["PATH_TO_BASKET"])
		{
			?><tr><td align="center"><a href="<?=$arParams["PATH_TO_BASKET"]?>"><?= GetMessage("TSBS_2BASKET") ?></a>
			</td></tr><?
		}
		if ('' != $arParams["PATH_TO_ORDER"])
		{
			?><tr><td align="center"><a href="<?=$arParams["PATH_TO_ORDER"]?>"><?= GetMessage("TSBS_2ORDER") ?></a>
			</td></tr><?
		}
	}
	if ($arResult["ShowDelay"]=="Y")
	{
		?><tr><td align="center"><?= GetMessage("TSBS_DELAY") ?></td></tr>
		<tr><td>
            <table cellpadding="0" cellspacing="0" width="100%" style="text-align: right;font-size: 14px;">
                <tr style="opacity: 0.5;">
                    <td style="text-align: left;padding: 5px 0;">Наименование</td>
                    <td style="text-align: left;padding: 5px 0;"></td>
                    <td style="padding: 5px 10px;">Количество</td>
                    <td style="padding: 5px 0;">Стоимость</td>
                </tr>

                <tr>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                </tr>

                <?
                $total_sum = 0;
                foreach ($arResult["ITEMS"]["DelDelCanBuy"] as &$v)
                {
                    ?>
                    <tr>
                        <td style='text-align: left;padding: 5px 10px;'>
                            <img src="<?=CFile::GetPath($v["PREVIEW_PICTURE"]);?>" width="80" height="80">
                        </td>
                        <td style='text-align: left;padding: 5px 0;'>
                            <a href="<?=$v['DETAIL_PAGE_URL']?>"><?=$v['NAME']?></a>
                        </td>
                        <td style='padding: 5px 10px;'><?=$v['QUANTITY']?></td>
                        <td style='padding: 5px 0;white-space: nowrap;'><?=$v['PRICE_FORMATED']?></td>
                    </tr>
                    <?
                    $total_sum += $v['SUM_VALUE'];
                }
                if (isset($v))
                    unset($v);
                ?>
                <tr>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                </tr>

                <tr>
                    <td style="text-align: left;padding: 5px 0;opacity: 0.5;">Общая стоимость заказа</td>
                    <td style="padding: 5px 0;"></td>
                    <td style="padding: 5px 0;"></td>
                    <td style="padding: 5px 0;">
                        <span style="color:#2BA2E1;font-weight: bold;white-space: nowrap;"><?=CurrencyFormat($total_sum,"RUB")?></span>
                    </td>
                </tr>

            </table>
            </td></tr><?
		if ('' != $arParams["PATH_TO_BASKET"])
		{
			?><tr><td align="center"><a href="<?=$arParams["PATH_TO_BASKET"]?>"><?= GetMessage("TSBS_2BASKET") ?></a>
			</td></tr><?
		}
	}
	if ($arResult["ShowSubscribe"]=="Y")
	{
		?><tr><td align="center"><?= GetMessage("TSBS_SUBSCRIBE") ?></td></tr>
		<tr><td>
            <table cellpadding="0" cellspacing="0" width="100%" style="text-align: right;font-size: 14px;">
                <tr style="opacity: 0.5;">
                    <td style="text-align: left;padding: 5px 0;">Наименование</td>
                    <td style="text-align: left;padding: 5px 0;"></td>
                    <td style="padding: 5px 10px;">Количество</td>
                    <td style="padding: 5px 0;">Стоимость</td>
                </tr>

                <tr>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                </tr>

                <?
                $total_sum = 0;
                foreach ($arResult["ITEMS"]["ProdSubscribe"] as &$v)
                {
                    ?>
                    <tr>
                        <td style='text-align: left;padding: 5px 10px;'>
                            <img src="<?=CFile::GetPath($v["PREVIEW_PICTURE"]);?>" width="80" height="80">
                        </td>
                        <td style='text-align: left;padding: 5px 0;'>
                            <a href="<?=$v['DETAIL_PAGE_URL']?>"><?=$v['NAME']?></a>
                        </td>
                        <td style='padding: 5px 10px;'><?=$v['QUANTITY']?></td>
                        <td style='padding: 5px 0;white-space: nowrap;'><?=$v['PRICE_FORMATED']?></td>
                    </tr>
                    <?
                    $total_sum += $v['SUM_VALUE'];
                }
                if (isset($v))
                    unset($v);
                ?>
                <tr>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                </tr>

                <tr>
                    <td style="text-align: left;padding: 5px 0;opacity: 0.5;">Общая стоимость заказа</td>
                    <td style="padding: 5px 0;"></td>
                    <td style="padding: 5px 0;"></td>
                    <td style="padding: 5px 0;">
                        <span style="color:#2BA2E1;font-weight: bold;white-space: nowrap;"><?=CurrencyFormat($total_sum,"RUB")?></span>
                    </td>
                </tr>

            </table>
            </td></tr><?
	}
	if ($arResult["ShowNotAvail"]=="Y")
	{
		?><tr><td align="center"><?= GetMessage("TSBS_UNAVAIL") ?></td></tr>
		<tr><td>
            <table cellpadding="0" cellspacing="0" width="100%" style="text-align: right;font-size: 14px;">
                <tr style="opacity: 0.5;">
                    <td style="text-align: left;padding: 5px 0;">Наименование</td>
                    <td style="text-align: left;padding: 5px 0;"></td>
                    <td style="padding: 5px 10px;">Количество</td>
                    <td style="padding: 5px 0;">Стоимость</td>
                </tr>

                <tr>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                </tr>

                <?
                $total_sum = 0;
                foreach ($arResult["ITEMS"]["nAnCanBuy"] as &$v)
                {
                    ?>
                    <tr>
                        <td style='text-align: left;padding: 5px 10px;'>
                            <img src="<?=CFile::GetPath($v["PREVIEW_PICTURE"]);?>" width="80" height="80">
                        </td>
                        <td style='text-align: left;padding: 5px 0;'>
                            <a href="<?=$v['DETAIL_PAGE_URL']?>"><?=$v['NAME']?></a>
                        </td>
                        <td style='padding: 5px 10px;'><?=$v['QUANTITY']?></td>
                        <td style='padding: 5px 0;white-space: nowrap;'><?=$v['PRICE_FORMATED']?></td>
                    </tr>
                    <?
                    $total_sum += $v['SUM_VALUE'];
                }
                if (isset($v))
                    unset($v);
                ?>
                <tr>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                    <td bgcolor="#000" height="1" style="border: none;opacity: 0.3;"></td>
                </tr>

                <tr>
                    <td style="text-align: left;padding: 5px 0;opacity: 0.5;">Общая стоимость заказа</td>
                    <td style="padding: 5px 0;"></td>
                    <td style="padding: 5px 0;"></td>
                    <td style="padding: 5px 0;">
                        <span style="color:#2BA2E1;font-weight: bold;white-space: nowrap;"><?=CurrencyFormat($total_sum,"RUB")?></span>
                    </td>
                </tr>

            </table>
        </td></tr><?
	}
	?></table><?
}
?>
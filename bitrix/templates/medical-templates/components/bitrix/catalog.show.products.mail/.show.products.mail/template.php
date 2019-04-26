<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */

use Bitrix\Main\Localization\Loc;

$skuTemplate = array();


?>
<? if(isset($arResult['ITEMS_COLS'])): ?>

    <table width="" cellpadding="0" cellspacing="0">

        <tbody>

        <tr><td colspan="5" height="25"></td></tr>

        <?for($i = 0; $i <= $arResult['ITEMS_ROWS']; $i++):?>
        <tr>
            <? foreach ($arResult['ITEMS_COLS'][$i] as $item):?>
            <td>
                <table cellpadding="0" cellspacing="0" valign="top" style="display: inline-block">
                    <tbody>
                    <tr>
                        <td width="170">
                            <table height="170" border="1" bordercolor="#ebebeb" cellpadding="0" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td width="168" height="168">
                                        <a href="<?=$item['DETAIL_PAGE_URL']?>">
                                            <img src="<?=$item['PREVIEW_PICTURE']['src']?>" style="display: block; margin: auto">
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr><td colspan="5" height="10"></td></tr>
                    <tr>
                        <td width="170">
                            <table cellpadding="0" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="<?=$item['DETAIL_PAGE_URL']?>" style="font-size: 14px; font-family: 'Helvetica Neue',Helvetica, Arial, sans-serif; font-weight: bold; color: #000; text-decoration: none;"><?=$item['NAME']?></a>
                                    </td>
                                </tr>
                                <tr><td colspan="5" height="10"></td></tr>
                                <tr>
                                    <td>
                                        <p style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #3f3f3f;font-weight: bold; font-size: 14px; margin:0 0 5px;">
                                            <?=$item['MIN_PRICE']['PRINT_DISCOUNT_VALUE']?>
                                        </p>
                                        <? if($item['MIN_PRICE']['VALUE'] != $item['MIN_PRICE']['DISCOUNT_VALUE']): ?>
                                            <p style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #adadad;text-decoration: line-through; font-size: 12px; margin:0 0 10px;">
                                                <?=$item['MIN_PRICE']['PRINT_VALUE']?>
                                            </p>
                                        <? endif ?>
                                    </td>
                                </tr>
                                <tr><td colspan="5" height="10"></td></tr>
                                <tr>
                                    <td width="112" height="29" bgcolor="#66b3d4" valign="middle" align="middle">
                                        <a href="<?=$item['DETAIL_PAGE_URL']?>" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;color: #fff; font-weight: bold; font-size: 12px; display: block; line-height: 29px;text-decoration: none;">Подробнее</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </td>

            <td colspan="5" width="25"></td>
            <? endforeach; ?>

        </tr>
        <tr><td colspan="5" height="25"></td></tr>
        <? endfor;?>

        </tbody>

    </table>

<? endif; ?>
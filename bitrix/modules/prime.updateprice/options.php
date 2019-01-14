<?
/** @global CMain $APPLICATION */
use Bitrix\Main\Loader;
use Bitrix\Main\Type\DateTime;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\IO\File;

$module_id = 'prime.updateprice';

	Loader::includeModule('catalog');
	Loc::loadMessages(__FILE__);

	$aTabs = array(
		array("DIV" => "edit0", "TAB" => "Настройка изменения цен", "ICON" => "currency_settings", "TITLE" => "Настройка изменения цен"),
	);
	$tabControl = new CAdminTabControl("currencyTabControl", $aTabs, true, true);

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && check_bitrix_sessid())
	{
		$name_file = date('Y-m-d') . "_update_price.txt";
		$path = $_SERVER["DOCUMENT_ROOT"] . "/upload/" . $name_file;

		$dbPriceType = CCatalogGroup::GetList(
			array("SORT" => "ASC"),
			array("NAME" => "BASE"),
			array(),
			array(),
			array("ID")
		);
		if ($arPriceType = $dbPriceType->Fetch())
		{

			$res = CIBlock::GetList(
				Array(),
				Array('TYPE'=>'1c_catalog','CODE' => 'catalog'),
				false
			);
			if($ar_res = $res->Fetch())
			{
				$IBLOCK_ID = $ar_res['ID'];

				$arSelect = Array("ID", "NAME");
				$arFilter = Array("IBLOCK_ID" => $IBLOCK_ID);
				$resElement = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
				$data_file = "";
				while($ob = $resElement->GetNextElement())
				{
					$arFieldsElm = $ob->GetFields();

					$PRODUCT_ID = $arFieldsElm['ID'];
					$PRICE_TYPE_ID = $arPriceType["ID"];
					$percent = $_REQUEST['percent'];

					$resPrice = CPrice::GetList(
						array(),
						array(
							"PRODUCT_ID" => $PRODUCT_ID,
							"CATALOG_GROUP_ID" => $PRICE_TYPE_ID
						),
						array("ID","PRICE","CURRENCY")
					);

					if ($arr = $resPrice->Fetch())
					{
						$arFields = Array(
							"PRODUCT_ID" => $PRODUCT_ID,
							"CATALOG_GROUP_ID" => $PRICE_TYPE_ID,
<<<<<<< HEAD
							"PRICE" => ($percent > 0) ? CCurrencyLang::CurrencyFormat($arr['PRICE'] - (($arr['PRICE']*$percent)/100),$arr['CURRENCY'],false) : $arr['PRICE'],
=======
							"PRICE" => ($percent > 0 && $arr['PRICE'] > 0) ? $arr['PRICE'] - round(($arr['PRICE'] / 100) * $percent, 2) : $arr['PRICE'],
>>>>>>> ac2b983abfc9722b48d5a5c0bdc83d5b92180dc7
							"CURRENCY" => $arr['CURRENCY']
						);
						$result = CPrice::Update($arr["ID"], $arFields);

						if($result)
							$data_file .= "ID:" . $PRODUCT_ID . " " . $arFieldsElm['NAME'] . " Старая цена:" .$arr['PRICE']. " Новая цена:" .$arFields['PRICE']. "\r\n";
					}
				}
				if($data_file){
					$message = "Всего: " . $resElement->result->num_rows . " товаров. Подробнее: <a target='_blank' href='/bitrix/admin/fileman_file_view.php?path=/upload/".$name_file."&site=s1&lang=ru'>Файл: ".$name_file."</a>";
					CAdminMessage::ShowMessage(array(
						"MESSAGE" => $message,
						"HTML" => true,
						"TYPE" => "OK"
					));
					File::putFileContents($path, $data_file);
				}
			}
		}
	}
	$tabControl->Begin();
	?>
	<form method="POST" action="<?echo $APPLICATION->GetCurPage()?>?lang=<?echo LANGUAGE_ID?>&mid=<?=$module_id?>&mid_menu=1">
	<? echo bitrix_sessid_post();

	$tabControl->BeginNextTab();
	?><tr>
	<td width="40%">Количество вычитаемого процента из базовой цены всех товаров:</td>
	<td width="60%">
		<input type="number" name="percent" step="0.1" min="0" max="100"> %
	</td>
	</tr>
	<?
	$tabControl->BeginNextTab();

	$tabControl->Buttons();?>
	<input type="submit" name="save" value="Применить" title="Применить">
	</form>
	<?$tabControl->End();



<?php
namespace Bitrix\Currency\UserField;

use Bitrix\Currency\CurrencyManager;
use Bitrix\Currency\CurrencyTable;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Security\Random;
use Bitrix\Main\Text\HtmlFilter;
use Bitrix\Main\UserField\TypeBase;

Loc::loadLanguageFile(__FILE__);

class Money extends TypeBase
{
	const USER_TYPE_ID = 'money';
	const DB_SEPARATOR = '|';

	protected static $listCurrencyCache = null;

	function getUserTypeDescription()
	{
		return array(
			"USER_TYPE_ID" => static::USER_TYPE_ID,
			"CLASS_NAME" => __CLASS__,
			"DESCRIPTION" => Loc::getMessage("USER_TYPE_MONEY_DESCRIPTION"),
			"BASE_TYPE" => 'string',//\CUserTypeManager::BASE_TYPE_STRING,
			"EDIT_CALLBACK" => array(__CLASS__, 'GetPublicEdit'),
			"VIEW_CALLBACK" => array(__CLASS__, 'GetPublicView'),
		);
	}

	function GetDBColumnType($arUserField)
	{
		global $DB;
		switch(strtolower($DB->type))
		{
			case "mysql":
				return "varchar(200)";
			case "oracle":
				return "varchar2(200 char)";
			case "mssql":
				return "varchar(200)";
		}
	}

	function OnBeforeSave($arUserField, $value)
	{
		list($value, $currency) = static::unFormatFromDB($value);
		if($value !== '')
		{
			return static::formatToDB($value, $currency);
		}
		else
		{
			return '';
		}
	}

	function PrepareSettings($arUserField)
	{
		return array(
			"DEFAULT_VALUE" => $arUserField["SETTINGS"]["DEFAULT_VALUE"],
		);
	}

	function GetSettingsHTML($arUserField = false, $arHtmlControl, $bVarsFromForm)
	{
		$currencyList = static::getListCurrency();

		$result = '';
		if($bVarsFromForm)
		{
			$value = $GLOBALS[$arHtmlControl["NAME"]]["DEFAULT_VALUE"];
		}
		elseif(is_array($arUserField))
		{
			$value = htmlspecialcharsbx($arUserField["SETTINGS"]["DEFAULT_VALUE"]);
		}
		else
		{
			$defaultValue = '';
			$defaultCurrency = '';
			foreach($currencyList as $currencyInfo)
			{
				if($currencyInfo['BASE'] == 'Y')
				{
					$defaultCurrency = $currencyInfo['CURRENCY'];
				}
			}

			$value = static::formatToDB($defaultValue, $defaultCurrency);
		}

		$result .= '
		<tr>
			<td>'.GetMessage("USER_TYPE_MONEY_DEFAULT_VALUE").':</td>
			<td>'.static::getInput($arUserField, $arHtmlControl["NAME"].'[DEFAULT_VALUE]', $value).'</td>
		</tr>
		';

		static::initDisplay(array('core_uf_money'));

		return $result;
	}

	function getEditFormHTML($arUserField, $arHtmlControl)
	{
		return static::GetPublicEdit($arUserField, array());
	}

	function getEditFormHTMLMulty($arUserField, $arHtmlControl)
	{
		return static::GetPublicEdit($arUserField, array());
	}

	function GetAdminListViewHTML($arUserField, $arHtmlControl)
	{
		$explode = static::unFormatFromDB($arHtmlControl['VALUE']);
		$currentValue = $explode[0] ? $explode[0] : '';
		$currentCurrency = $explode[1] ? $explode[1] : '';

		if(!$currentCurrency)
		{
			return intval($currentValue) ? $currentValue : '';
		}

		if(CurrencyManager::isCurrencyExist($currentCurrency))
		{
			if(!empty($controlSettings['MODE']))
			{
				switch($controlSettings['MODE'])
				{
					case 'CSV_EXPORT':
						return $arHtmlControl['VALUE'];
					case 'SIMPLE_TEXT':
						return $currentValue;
					case 'ELEMENT_TEMPLATE':
						return $currentValue;
				}
			}

			$format = \CCurrencyLang::getCurrencyFormat($currentCurrency);

			$separators = \CCurrencyLang::getSeparators();
			$thousandsSep = $separators[$format['THOUSANDS_VARIANT']];
			$currentValue = number_format($currentValue, $format['DECIMALS'], $format['DEC_POINT'], $thousandsSep);
			if($format['THOUSANDS_VARIANT'] == \CCurrencyLang::SEP_NBSPACE)
			{
				$currentValue = str_replace(' ', '&nbsp;', $currentValue);
			}

			return preg_replace('/(^|[^&])#/', '${1}'.$currentValue, $format['FORMAT_STRING']);
		}

		return '';
	}

	public static function getPublicEdit($arUserField, $arAdditionalParameters = array())
	{
		$fieldName = static::getFieldName($arUserField, $arAdditionalParameters);
		$value = static::getFieldValue($arUserField, $arAdditionalParameters);

		$html = '';

		$first = true;
		foreach($value as $res)
		{
			if(!$first)
			{
				$html .= static::getHelper()->getMultipleValuesSeparator();
			}
			$first = false;

			$res = static::getInput($arUserField, $fieldName, $res);
			$html .= static::getHelper()->wrapSingleField($res);
		}

		if($arUserField["MULTIPLE"] == "Y" && $arAdditionalParameters["SHOW_BUTTON"] != "N")
		{
			$html .= static::getHelper()->getCloneButton($fieldName);
		}

		static::initDisplay(array('core_uf_money'));

		return static::getHelper()->wrapDisplayResult($html);
	}

	public static function getPublicView($arUserField, $arAdditionalParameters = array())
	{
		$value = static::normalizeFieldValue($arUserField["VALUE"]);

		$html = '';
		$first = true;
		foreach($value as $res)
		{
			if(!$first)
			{
				$html .= static::getHelper()->getMultipleValuesSeparator();
			}
			$first = false;

			$explode = static::unFormatFromDB($res);
			$currentValue = strlen($explode[0]) > 0 ? doubleval($explode[0]) : '';
			$currentCurrency = $explode[1] ? $explode[1] : '';

			$format = \CCurrencyLang::getCurrencyFormat($currentCurrency);

			$currentValue = static::formatNumber($currentValue, $currentCurrency, $format);

			$currentValue = preg_replace('/(^|[^&])#/', '${1}'.$currentValue, $format['FORMAT_STRING']);

			if(strlen($arUserField['PROPERTY_VALUE_LINK']) > 0)
			{
				$res = '<a href="'.htmlspecialcharsbx(str_replace('#VALUE#', urlencode($res), $arUserField['PROPERTY_VALUE_LINK'])).'">'.$currentValue.'</a>';
			}
			else
			{
				$res = $currentValue;
			}

			$html .= static::getHelper()->wrapSingleField($res);
		}

		return static::getHelper()->wrapDisplayResult($html);
	}

	protected static function formatNumber($currentValue, $currentCurrency, $format)
	{
		if($currentValue !== '')
		{
			$separators = \CCurrencyLang::getSeparators();
			$thousandsSep = $separators[$format['THOUSANDS_VARIANT']];
			$currentValue = number_format(doubleval($currentValue), $format['DECIMALS'], $format['DEC_POINT'], $thousandsSep);
			if($format['THOUSANDS_VARIANT'] == \CCurrencyLang::SEP_NBSPACE)
			{
				$currentValue = str_replace(' ', '&nbsp;', $currentValue);
			}
		}

		return $currentValue;
	}

	protected static function formatToDB($value, $currency)
	{
		$value = $value === '' ? '' : doubleval($value);

		if($value === '')
		{
			return '';
		}
		else
		{
			return $value.static::DB_SEPARATOR.trim($currency);
		}
	}

	protected static function unFormatFromDB($value)
	{
		return explode(static::DB_SEPARATOR, $value);
	}

	public static function getListCurrency()
	{
		if(static::$listCurrencyCache === null)
		{
			static::$listCurrencyCache = array();

			$queryObject = CurrencyTable::getList(array(
				'select' => array(
					'CURRENCY',
					'BASE',
					'NAME' => 'CURRENT_LANG_FORMAT.FULL_NAME',
					'FORMAT' => 'CURRENT_LANG_FORMAT.FORMAT_STRING',
					'DEC_POINT' => 'CURRENT_LANG_FORMAT.DEC_POINT',
					'THOUSANDS_VARIANT' => 'CURRENT_LANG_FORMAT.THOUSANDS_VARIANT',
					'DECIMALS' => 'CURRENT_LANG_FORMAT.DECIMALS',
				),
				'filter' => array(),
				'order' => array('SORT' => 'ASC', 'CURRENCY' => 'ASC')
			));
			$separators = \CCurrencyLang::getSeparators();
			while($currency = $queryObject->fetch())
			{
				$currency['SEPARATOR'] = $separators[$currency['THOUSANDS_VARIANT']];
				$currency['SEPARATOR_STRING'] = $currency['DEC_POINT'];
				$currency['SEPARATOR_STRING'] .= ($currency['THOUSANDS_VARIANT'] == \CCurrencyLang::SEP_SPACE
					|| $currency['THOUSANDS_VARIANT'] == \CCurrencyLang::SEP_NBSPACE) ?
					Loc::getMessage('CIMP_SEPARATOR_SPACE') : $currency['SEPARATOR'];
				static::$listCurrencyCache[$currency['CURRENCY']] = $currency;
			}
		}

		return static::$listCurrencyCache;
	}

	protected static function getInput($arUserField, $fieldName, $dbValue)
	{
		global $APPLICATION;

		ob_start();

		$APPLICATION->IncludeComponent(
			'bitrix:currency.money.input',
			'',
			array(
				'CONTROL_ID' => $arUserField['FIELD_NAME'].'_'.Random::getString(5),
				'FIELD_NAME' => $fieldName,
				'VALUE' => $dbValue,
				'EXTENDED_CURRENCY_SELECTOR' => 'Y'
			),
			null,
			array('HIDE_ICONS' => 'Y')
		);

		return ob_get_clean();
	}

}
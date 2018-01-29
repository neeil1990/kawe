<?php
namespace Bitrix\Currency\Helpers;

use Bitrix\Currency\CurrencyTable;
use Bitrix\Main\Localization\Loc;

class Editor
{
	protected static $listCurrencyCache = null;

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

}
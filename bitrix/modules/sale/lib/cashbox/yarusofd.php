<?php

namespace Bitrix\Sale\Cashbox;

use Bitrix\Main\Localization;
use Bitrix\Main;

Localization\Loc::loadMessages(__FILE__);

/**
 * Class YarusOfd
 * @package Bitrix\Sale\Cashbox
 */
class YarusOfd extends Ofd
{
	const ACTIVE_URL = 'https://ofd-ya.ru/getFiscalDoc?';

	/**
	 * @return string
	 */
	protected function getUrl()
	{
		return static::ACTIVE_URL;
	}

	/**
	 * @return array
	 */
	protected function getLinkParamsMap()
	{
		return array(
			'kktRegId' => Check::PARAM_REG_NUMBER_KKT,
			'fiscalSign' => Check::PARAM_FISCAL_DOC_ATTR
		);
	}

	/**
	 * @throws Main\NotImplementedException
	 * @return string
	 */
	public static function getName()
	{
		return Localization\Loc::getMessage('SALE_CASHBOX_YARUS_OFD_NAME');
	}


}
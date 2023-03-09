<?php
namespace Bitrix\Catalog\Config;

use Bitrix\Main,
	Bitrix\Catalog;

class Configuration
{
	public static function isUsedInventoryManagement()
	{
		if (!Feature::isInventoryManagementEnabled())
			return false;
		return ((string)Main\Config\Option::get('catalog', 'default_use_store_control') == 'Y');
	}

	public static function isExceededPriceTypeLimit()
	{
		if (Feature::isMultiPriceTypesEnabled())
			return false;

		//TODO: enable managed cache after blocked old api \CCatalogGroup
		return Catalog\GroupTable::getCount([]) > 1;
	}

	public static function isAllowedNewPriceType()
	{
		if (Feature::isMultiPriceTypesEnabled())
			return true;

		//TODO: enable managed cache after blocked old api \CCatalogGroup
		return Catalog\GroupTable::getCount([]) == 0;
	}

	public static function isExceededStoreLimit()
	{
		if (Feature::isMultiStoresEnabled())
			return false;

		//TODO: enable managed cache after blocked old api \CCatalogStore
		return Catalog\StoreTable::getCount([]) > 1;
	}

	public static function isAllowedNewStore()
	{
		if (Feature::isMultiStoresEnabled())
			return true;

		//TODO: enable managed cache after blocked old api \CCatalogGroup
		return Catalog\GroupTable::getCount([]) == 0;
	}
}
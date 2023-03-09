<?php
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage catalog
 * @copyright 2001-2021 Bitrix
 */

namespace Bitrix\Catalog\Access;

use Bitrix\Catalog\Access\Filter\Factory\CatalogFilterFactory;
use Bitrix\Catalog\Access\Install\AccessInstaller\InstallStatus;
use Bitrix\Catalog\Access\Rule\BaseRule;
use Bitrix\Catalog\Access\Rule\VariableRule;
use Bitrix\Main\Access\AccessibleItem;
use Bitrix\Main\Access\BaseAccessController;
use Bitrix\Catalog\Access\Model\UserModel;
use Bitrix\Catalog\Access\Permission\PermissionDictionary;
use Bitrix\Catalog\Access\Rule\Factory\CatalogRuleFactory;
use Bitrix\Catalog\StoreTable;
use Bitrix\Main\Access\Exception\UnknownActionException;
use Bitrix\Main\Engine\CurrentUser;
use Bitrix\Main\ModuleManager;

class AccessController extends BaseAccessController
{
	/**
	 * @inheritDoc
	 */
	public function __construct(int $userId)
	{
		parent::__construct($userId);

		$this->ruleFactory = new CatalogRuleFactory();
		$this->filterFactory = new CatalogFilterFactory();
	}

	public static function getCurrent(): self
	{
		return static::getInstance(CurrentUser::get()->getId());
	}

	/**
	 * Checking access rights by action
	 * @param string $action
	 * @param AccessibleItem|null $item
	 * @param null $params
	 *
	 * @return bool
	 * @throws UnknownActionException
	 */
	public function check(string $action, AccessibleItem $item = null, $params = null): bool
	{
		if (!ModuleManager::isModuleInstalled('crm') || InstallStatus::inProgress())
		{
			return $this->checkLegacy($action);
		}

		$params ??= [];
		if (is_array($params))
		{
			$params['action'] = $action;
		}

		return parent::check($action, $item, $params);
	}

	public function checkByValue(string $action, string $value): bool
	{
		return $this->check(
			$action,
			null,
			['value' => $value]
		);
	}

	/**
	 * @param string $action
	 * @return array|int|null
	 */
	public function getPermissionValue(string $action)
	{
		$ruleObject = $this->ruleFactory->createFromAction($action, $this);
		if (! $ruleObject instanceof BaseRule)
		{
			return null;
		}

		$params = ['action' => $action];

		return
			$ruleObject instanceof VariableRule
				? $ruleObject->getPermissionMultiValues($params)
				: $ruleObject->getPermissionValue($params)
		;
	}

	/**
	 * @param string $action
	 *
	 * @return bool
	 */
	private function checkLegacy(string $action): bool
	{
		if (CurrentUser::get()->isAdmin())
		{
			return true;
		}

		$legacyActions = ActionDictionary::getLegacyMap();
		$legacyAction = null;
		if (array_key_exists($action, $legacyActions))
		{
			$legacyAction = $action;
		}
		else
		{
			foreach ($legacyActions as $oldAction => $newActions)
			{
				if (in_array($action, $newActions, true))
				{
					$legacyAction = $oldAction;

					break;
				}
			}
		}

		return $legacyAction && CurrentUser::get()->canDoOperation($legacyAction);
	}

	public function isAdmin()
	{
		return $this->user->isAdmin();
	}

	protected function loadItem(int $itemId = null): ?AccessibleItem
	{
		return null;
	}

	protected function loadUser(int $userId): UserModel
	{
		return UserModel::createFromId($userId);
	}

	/**
	 * Allowed default store id.
	 *
	 * If the default store is unavailable, the first available warehouse is returned.
	 *
	 * @return int|null returns `null` if there is no access to any warehouse.
	 */
	public function getAllowedDefaultStoreId(): ?int
	{
		$allowStoresIds = $this->getPermissionValue(ActionDictionary::ACTION_STORE_VIEW) ?? [];
		if (empty($allowStoresIds))
		{
			return null;
		}
		$allowStoresIds = array_map('intval', $allowStoresIds);

		$defaultStoreId = StoreTable::getDefaultStoreId();
		if ($defaultStoreId)
		{
			$allStoresId = PermissionDictionary::VALUE_VARIATION_ALL;
			if (
				in_array($defaultStoreId, $allowStoresIds, true)
				|| in_array($allStoresId, $allowStoresIds, true)
			)
			{
				return $defaultStoreId;
			}
		}

		return reset($allowStoresIds);
	}
}

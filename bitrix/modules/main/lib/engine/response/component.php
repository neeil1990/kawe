<?php
namespace Bitrix\Main\Engine\Response;

use Bitrix\Main\Context;
use Bitrix\Main\Error;
use Bitrix\Main\ErrorCollection;
use Bitrix\Main\Errorable;

/**
 * Response type for rendering ajax components from action
 * @package Bitrix\Main\Engine\Response
 */
final class Component extends Json implements Errorable
{
	const STATUS_SUCCESS = 'success';
	const STATUS_DENIED  = 'denied';
	const STATUS_ERROR   = 'error';
	/**
	 * @var string
	 */
	private $status;
	/**
	 * @var array
	 */
	private $js;
	/**
	 * @var array
	 */
	private $css;
	/**
	 * @var ErrorCollection
	 */
	private $errorCollection;


	/**
	 * Component constructor.
	 * @param string $componentName
	 * @param string $templateName
	 * @param array $params
	 * @param array $parentComponent
	 * @param array $arFunctionParams
	 * @param string $status
	 * @param ErrorCollection|null $errorCollection
	 */
	public function __construct($componentName, $templateName = '', $params = array(), $parentComponent = array(), $arFunctionParams = array(), $status = self::STATUS_SUCCESS, ErrorCollection $errorCollection = null)
	{
		global $APPLICATION;
		ob_start();
		$APPLICATION->IncludeComponent(
			$componentName,
			$templateName,
			$params,
			$parentComponent,
			$arFunctionParams
		);
		$componentContent = ob_get_clean();

		$this->status = $status?: self::STATUS_SUCCESS;
		$this->errorCollection = $errorCollection?: new ErrorCollection;
		$this->js = $APPLICATION->arHeadScripts;
		$this->css =  $APPLICATION->sPath2css;
		$data = $componentContent;

		parent::__construct($data);
	}

	public function sendContent()
	{
		echo \Bitrix\Main\Web\Json::encode(array(
			'status' => $this->status,
			'data' => $this->data,
			'bxjs' => $this->js,
			'bxcss' => $this->css,
			'errors' => $this->getErrorsToResponse(),
		));
	}

	/**
	 * @return array
	 */
	protected function getErrorsToResponse()
	{
		$errors = array();
		foreach ($this->errorCollection as $error)
		{
			/** @var Error $error */
			$errors[] = array(
				'message' => $error->getMessage(),
				'code' => $error->getCode(),
			);
		}

		return $errors;
	}

	/**
	 * Getting array of errors.
	 * @return Error[]
	 */
	public function getErrors()
	{
		return $this->errorCollection->toArray();
	}

	/**
	 * Getting once error with the necessary code.
	 * @param string $code Code of error.
	 * @return Error
	 */
	public function getErrorByCode($code)
	{
		return $this->errorCollection->getErrorByCode($code);
	}
}
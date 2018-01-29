<?php
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage blog
 * @copyright 2001-2017 Bitrix
 */

namespace Bitrix\Blog;

use Bitrix\Main\Config\Option;

/**
 * Class Util
 * @package Bitrix\Blog
 */
class Util
{
	/**
	 * Returns blog/image_max_width option value
	 * @return integer
	 */
	public static function getImageMaxWidth()
	{
		return Option::get("blog", "image_max_width", 800);
	}

	/**
	 * Returns blog/image_max_height option value
	 * @return integer
	 */
	public static function getImageMaxHeight()
	{
		return Option::get("blog", "image_max_height", 1000);
	}
}


<?php

namespace Imyie\OrderMinPrice;

use \Bitrix\Main\Config\Option;

class Main {
	
	public static function handlerOnSaleOrderBeforeSaved(\Bitrix\Main\Event $event) {
		
		$result = new \Bitrix\Main\Entity\EventResult(\Bitrix\Main\EventResult::SUCCESS);
		
		$order = $event->getParameter('ENTITY');
		
		if ($order instanceof \Bitrix\Sale\Order && !defined('ADMIN_SECTION')) {
			
			$on = Option::get('imyie.orderminprice', 'on', 'N');
			if ($on != 'Y') 
				return $result;
			
			$price = $order->getPrice();
			
			$minPrice = Option::get('imyie.orderminprice', 'min_price', 0);
			$errorMessage = Option::get('imyie.orderminprice', 'error_message', '');
			
			if (empty($minPrice) || empty($errorMessage))
				return $result;
			
			if ($price < $minPrice) {
				return new \Bitrix\Main\EventResult(\Bitrix\Main\EventResult::ERROR, new \Bitrix\Sale\ResultError($errorMessage, 'code'), 'sale'); 
			}
		}
		
		return $result;
	}
	
}

<?php

use \Bitrix\Main\Loader;

$arClasses = array(
  '\Imyie\OrderMinPrice\Main' => 'lib/main.php',
);

Loader::registerAutoLoadClasses(
    'imyie.orderminprice',
    $arClasses
);

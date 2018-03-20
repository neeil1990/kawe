<?
global $DB, $MESS, $APPLICATION;
IncludeModuleLangFile(__FILE__);

CModule::AddAutoloadClasses(
	'imyie.morewatermark',
	array(
		'CIMYIEMoreWatermark' => 'classes/general/morewatermark.php',
	)
);
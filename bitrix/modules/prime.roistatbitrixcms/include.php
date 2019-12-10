<?php
IncludeModuleLangFile(__FILE__);

global $MESS, $DOCUMENT_ROOT;

CModule::AddAutoloadClasses(
    'prime.roistatbitrixcms',
    array(
        'RoiStat' => 'lib/classes.php'
    )
);

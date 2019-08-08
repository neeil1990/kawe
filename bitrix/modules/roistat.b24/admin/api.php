<?php
// @codingStandardsIgnoreStart
error_reporting(0);
@define("NOT_CHECK_PERMISSIONS", true);
include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/roistat.b24/classes/general/roistat.php");

$CUser = new CUser();
$CUser->Authorize(1);

$login = COption::GetOptionString('roistat.b24', 'LOGIN');
$password = COption::GetOptionString('roistat.b24', 'PASSWORD');

$token = isset($_GET['token']) ? $_GET['token'] : null;
if ($token !== md5($login.$password)) {
    $CUser->Logout();
    exit('Invalid token');
}
$CRoistat = new \CRoistatB24();
$dateModify = (array_key_exists('date', $_GET)) ? (int)$_GET['date'] : time() - 14*24*60*60;

header('Content-Type: application/json; charset=utf8;');
if (array_key_exists('action', $_GET)) {
    switch ($_GET['action']) {
        case 'export':
            echo json_encode($CRoistat->ExportOrdersData($dateModify));
            break;
        case 'export_clients':
            echo json_encode($CRoistat->ExportClientsData($dateModify));
            break;
        case 'lead':
            $title = (array_key_exists('title', $_GET)) ? $_GET['title'] : null;
            $text =  (array_key_exists('text', $_GET)) ? $_GET['text'] : null;
            $name =  (array_key_exists('name', $_GET)) ? $_GET['name'] : null;
            $phone = (array_key_exists('phone', $_GET)) ? $_GET['phone'] : null;
            $email = (array_key_exists('email', $_GET)) ? $_GET['email'] : null;
            $visit = (array_key_exists('visit', $_GET)) ? $_GET['visit'] : null;
            $additionalFields = (array_key_exists('data', $_GET) && strlen($_GET['data']) > 0) ? json_decode($_GET['data'], true) : array();

            echo json_encode($CRoistat->AddLead($title, $text, $name, $phone, $email, $visit, $additionalFields));
            break;
        case 'get_core_version':
            echo json_encode(['bitrix_core_version' => constant('SM_VERSION')]);
            break;
        case 'get_module_version':
            echo json_encode(['module_version' => $CRoistat->moduleVersion()]);
            break;
    }
}
// @codingStandardsIgnoreEnd
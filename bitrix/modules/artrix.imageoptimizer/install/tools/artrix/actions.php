<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 
\Bitrix\Main\Loader::includeModule('artrix.imageoptimizer');

global $DB;
use Artrix\ImageArtrix;

set_time_limit(0);

if (isset($_REQUEST["FIND_SUB"]) && $_REQUEST["FIND_SUB"] == "Y"){
	$arSubSections = Artrix\ImageArtrix\ImageTable::findSubsections($_REQUEST["PATH"]);
	Artrix\ImageArtrix\ImageTable::getSubsectionsHtml($arSubSections);
	die();
}

if (isset($_REQUEST["SCAN_DIR"]) && $_REQUEST["SCAN_DIR"] == "Y"){
	$arResult = array();
	Artrix\ImageArtrix\ImageTable::FindImageInPath($_REQUEST["DIRS"]["DIR"], $_REQUEST["DIRS"]["OPEN"], $arResult);
	echo json_encode($arResult);
	die();
}

if (isset($_REQUEST["SCAN_DIRS"]) && $_REQUEST["SCAN_DIRS"] == "Y"){
	$arResult = array();
	
	Artrix\ImageArtrix\ImageTable::FindImageInPath($_REQUEST["DIRS"]["DIR"], $_REQUEST["DIRS"]["OPEN"], $arResult);
	
	$COUNT = count($arResult);
	$SIZE = 0;
	foreach ($arResult as $IMAGE){
		$SIZE += filesize($IMAGE);
	}
	$SIZE = round($SIZE / 1024 / 1024, 2);
	$arr = array(
		"IMAGES" => $arResult,
		"COUNT" => $COUNT,
		"SIZE" => $SIZE
	);
	
	echo json_encode($arr);
	die();
}

if (isset($_REQUEST["OPTIMIZE"]) && $_REQUEST["OPTIMIZE"] == "Y"){
	$http = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on" || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') ? "https" : "http");
	
	$HOST = $http."://".$_SERVER["HTTP_HOST"];
	
	$POSITION = intval($_REQUEST["POSITION"]);
	if (file_exists($_REQUEST["IMAGE"])){
		$IMAGE = $_REQUEST["IMAGE"];
		$size = filesize($_REQUEST["IMAGE"]);
		
		$arFile = explode(DIRECTORY_SEPARATOR, $_REQUEST["IMAGE"]);
		$arInfo["basename"] = array_pop($arFile);
		$arInfo["dirname"] = implode(DIRECTORY_SEPARATOR, $arFile);;

		$arResult = array(
			"NAME" => $_REQUEST["IMAGE"],
			"OLD_SIZE" => $size
		);
		$result = Artrix\ImageArtrix\ImageTable::Optimize($HOST, $arInfo["dirname"], $arInfo["basename"], $JPEG_QUALITY);
		die();
	}
}

if (isset($_REQUEST["WAIT_RESULT"]) && $_REQUEST["WAIT_RESULT"] == "Y"){
	$http = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on" || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') ? "https" : "http");
	
	$HOST = $http."://".$_SERVER["HTTP_HOST"];
	
	if (file_exists($_REQUEST["IMAGE"])){
		
		$IMAGE = $_REQUEST["IMAGE"];
		$size = filesize($_REQUEST["IMAGE"]);
		
		$arFile = explode(DIRECTORY_SEPARATOR, $_REQUEST["IMAGE"]);
		$arInfo["basename"] = array_pop($arFile);
		$arInfo["dirname"] = implode(DIRECTORY_SEPARATOR, $arFile);;
		
		$result = Artrix\ImageArtrix\ImageTable::waitOptimizeResult($HOST, $arInfo["dirname"], $arInfo["basename"]);
		
		echo $result;
		die();
	}
	
}
if (isset($_REQUEST["SHOW_RESULT"]) && $_REQUEST["SHOW_RESULT"] == "Y"){
	
	$IMAGE = $_REQUEST["IMAGE"];
	$size = filesize($_REQUEST["IMAGE"]);
	
	$arFile = explode(DIRECTORY_SEPARATOR, $_REQUEST["IMAGE"]);
	$arInfo["basename"] = array_pop($arFile);
	$arInfo["dirname"] = implode(DIRECTORY_SEPARATOR, $arFile);;
	
	$arResultOpt = $_REQUEST["DATA"];
	
	
	$arResult["NEW_SIZE"] = $arResultOpt["SIZE"];
	$arResult["SIZE_DIFF"] = intval($size - intval($arResultOpt["SIZE"])) > 0 ? $size - intval($arResultOpt["SIZE"]) : 0;
	$arResult["OLD_SIZE"] = $size;
	$arResult["FILE"] = $arInfo["dirname"]."/".$arInfo["basename"];
	$arResult["TIME"] = $arResultOpt["TIME"];
	$arResult["STATUS"] = "progress";
	$arResult["OUTPUT"] = $arResultOpt["OUTPUT"];
	$arResult["WARNING"] = $arResultOpt["WARNING"];
	
	if (intval($arResultOpt["SIZE"]) > 0 && strlen($arResult["WARNING"]) <= 0){
		if (function_exists('curl_init')){
			if($curl = curl_init()){
				curl_setopt($curl, CURLOPT_URL, "http://188.225.34.116".$arResultOpt["PATH"]."/".$arResultOpt["FILE_NAME"]);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				$out = curl_exec($curl);
				$result = $out;
				curl_close($curl);
				
			}
		} else {
			$sURL = "http://188.225.34.116".$arResultOpt["PATH"]."/".$arResultOpt["FILE_NAME"];
			$out = file_get_contents($sURL);
			$result = $out;
		}
		file_put_contents($arInfo["dirname"]."/".$arInfo["basename"], print_r($result, true));
	}

	Artrix\ImageArtrix\ImageTable::DeleteTmpFile($arResultOpt["PATH"], $arResultOpt["FILE_NAME"]);
	echo json_encode($arResult);
	die();
}?>
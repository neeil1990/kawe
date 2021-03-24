<?php
/*ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);*/
use WebPConvert\WebPConvert;
use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

class DelightWebpConverter{
	const MODULE_ID = "delight.webpconverter";
	const DOCUMENT_ROOT_PATH = __DIR__ . "/../../../../..";
	const FILE_EXTENSIONS = array("png", "jpg", "jpeg");
	const CONVERTED_IMAGES_FOLDER = "/upload/delight.webpconverter";													// Путь для сохранения конвертированных изображений
	const CONVERTERS = array('cwebp', 'vips', 'imagick', 'gmagick', 'imagemagick', 'graphicsmagick', 'wpc', 'gd');		// Перечень конвертеров
	const TEST_IMAGE_PATH = "/bitrix/modules/delight.webpconverter/images/test.jpg";
	
	// Для обработки background и background-image
    public static $originUrl = FALSE;
    public static $originCssKey = FALSE;
	
	// Функция получает путь к корню
	static function GetRoot(){
		if((isset($_SERVER["DOCUMENT_ROOT"])) AND (!empty($_SERVER["DOCUMENT_ROOT"]))){
			return $_SERVER["DOCUMENT_ROOT"];
		} else {
			return static::DOCUMENT_ROOT_PATH;
		}
	}
	
	// Функция определяет внешний URL или нет
	static function isInternal($image_url) {
		$components = parse_url($image_url);    
		return empty($components['host']);
	}
	
	// Функция получает текущий URL
	static function GetCurrentUrl(){
		return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")."://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
	}
	
	// Функция определяет, требуется ли конвертировать изображение
	static function NeedConvertation($image_url) {
		if((is_file(self::GetRoot().$image_url)) AND (self::isInternal($image_url)) AND (file_exists(self::GetRoot().$image_url))){
			if((exif_imagetype(self::GetRoot().$image_url) == IMAGETYPE_JPEG) OR (exif_imagetype(self::GetRoot().$image_url) == IMAGETYPE_PNG)){
				return true;
			}
		}
		return false;
	}
	
	// Функция проверяет, пустая папка или нет
	static function dir_is_empty($dir) {
		$handle = opendir($dir);
		while (false !== ($entry = readdir($handle))) {
			if ($entry != "." && $entry != "..") {
				closedir($handle);
				return false;
			}
		}
		closedir($handle);
		return true;
	}
	
	// Функция удаляет устаревшие файлы (Агент)
	static function AgentRemoveOldFiles(){
		$dir = realpath(static::DOCUMENT_ROOT_PATH) . DelightWebpConverter::CONVERTED_IMAGES_FOLDER;
		$files = new RecursiveIteratorIterator(
			new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
			RecursiveIteratorIterator::CHILD_FIRST
		);

		foreach ($files as $fileinfo) {
			if($fileinfo->isFile()){
				// Удаляем сконвертированный файл, если оригинал отсутствует
				$original_file = preg_replace('/(upload\/delight.webpconverter\/)(.*).webp$/', '$2', $fileinfo->getRealPath());
				if(!file_exists($original_file)){
					unlink($fileinfo->getRealPath());
				}
			} elseif($dir != $fileinfo->getRealPath()) {
				// Удаляем папку, если она пустая
				if(self::dir_is_empty($fileinfo->getRealPath())){
					rmdir($fileinfo->getRealPath());
				}
			}
		}
		return "DelightWebpConverter::AgentRemoveOldFiles();";
	}
	
	// Функция проверяет, соблюдены ли все условия для работы модуля
	static function CanProcess(){
		if(\Bitrix\Main\Config\Option::get(static::MODULE_ID, "enabled") != "Y"){
			return false;
		}
		// Проверяем ограничение по URL
		$LimitationUrlParamsStr = \Bitrix\Main\Config\Option::get(static::MODULE_ID, "limitation_url");
		if(!empty($LimitationUrlParamsStr)){
			$LimitationUrlParamsArr = explode("|",str_replace(array("\r\n", "\r", "\n"),"|",$LimitationUrlParamsStr));
			$CurrentUrl = self::GetCurrentUrl();
			foreach($LimitationUrlParamsArr as $LimitationUrlParam){
				if(mb_stripos($CurrentUrl, $LimitationUrlParam) !== false){
					return false;
				}
			}
		}
		return true;
	}
	
	// Функция получает изображения для обработки
	public static function DelightWebpOnEndBufferContentHandler(&$content)
	{
		if (isset($_GET["nowebp"]))
			return;
		if ((strpos($_SERVER["REQUEST_URI"], '/bitrix/admin/') !== 0) AND (DelightWebpConverter::CanProcess())){
			$extension_regex = "(?i:".implode("|", static::FILE_EXTENSIONS).")";
			// Тестирование регулярки:
			//preg_match_all('/((?i:<[a-z]+\b[\s]*[^>]*?[\s]+))(src)=("|\')([^?\'\"]+\.)((?i:jpg|jpeg|png))(|\?\d+|\\?v=\\d+)("|\')/x', $content, $output_array);
			//Replacement: $1$2=$3$4$5.webp$6$7
			$img_attrs = explode("|",str_replace(array("\r\n", "\r", "\n"),"|",\Bitrix\Main\Config\Option::get(static::MODULE_ID, "attributes")));
			foreach($img_attrs as $img_attr){
				$regex = "/
					((?i:<[a-z]+\b[\s]*[^>]*?[\s]+))
					(".trim($img_attr).")=												#attribute
					(\"|\')																#open_quote
					([^?'\"]+\.)(".$extension_regex.")									#href body
					(|\?\d+|\\?v=\\d+)													#params
					(\\3)																#close_quote
				/x";
				$content = preg_replace_callback($regex, array(
					"DelightWebpConverter",
					"filter_img",
				), $content);
			}
			// Обработка background и background-image
			$content = preg_replace_callback("#(?<full_tag><[^>]+>)#is", function ($full_tag) {
				return preg_replace_callback("#<(?<tag>\S+)(?<before_style>[^>]*\s)(?<style_key>style\s*=\s*)(?<style_val>.+?)>#is", array('DelightWebpConverter', 'style_replace_callback'), $full_tag['full_tag']);
			}, $content);
		}
	}
	
	// Функция заменяет ссылки на изображения в background и background-image
	private static function style_replace_callback($match){
        /*
            Cюда приходят, где есть атрибут style. Параметры:
            $match['tag'] - наименование тега
            $match['before_style'] - весь текст, который был до style
            $match['style'] - содержимое style(включая кавычки) + весь контент, котрый после него в теге был

            Таким образом чтоб вернуть без изменений:  return "<{$match['tag']}{$match['before_style']}{$match['style_key']}{$match['style_val']}>";
        */

        // здесь мы еще раз смотрим $match['style'] на предмет присутствия в нем background или background-image
        $new_style_val = preg_replace_callback("#(?<css_key>background(-image)?)(?<between>\s*:\s*)url\((?<url>.+?)\)#is", function ($match2) {
            // запоминаем оригинальный Url, предварительно убрав кавычки, если таковые были
            $url = str_replace(['"', "'", '\"', "&quot;", "&#039;"], '', $match2['url']);
            preg_match("#^(?<file_name>[^\.]+\.)(?<extension>[^?]+?)(?<params>.*)?$#iU", $url, $origin_file_name_match);
			if (preg_match("#\.((".implode("|", static::FILE_EXTENSIONS).")$|(".implode("\?|", static::FILE_EXTENSIONS)."\?))#i", $url)) {
				$RealFilePath = urldecode($origin_file_name_match["file_name"].$origin_file_name_match["extension"]);
				if(self::NeedConvertation($RealFilePath)){
					$destination_path = DelightWebpConverter::CONVERTED_IMAGES_FOLDER.$RealFilePath.".webp";
					if(!file_exists(realpath(static::DOCUMENT_ROOT_PATH).$destination_path)){
						$result_conversion = WebPConvert::convert(realpath(self::GetRoot().$RealFilePath), realpath(static::DOCUMENT_ROOT_PATH).$destination_path, array("converters"=>static::CONVERTERS));
						if((isset($result_conversion["success"])) AND ($result_conversion["success"] === false)){
							return $match2[0];
						}
					}
					if ($params === ''){
						$WebpfilePath = CUtil::GetAdditionalFileURL($destination_path);
					} else {
						$WebpfilePath = $destination_path.$params;
					}
					self::$originUrl = $url;
					self::$originCssKey = $match2['css_key'];
					return "{$match2['css_key']}{$match2['between']}url(" . str_replace($url, $WebpfilePath, $match2['url']) . ")";
				}
            }
			return $match2[0];
        }, $match['style_val']);

        // В случае, если менялся $originUrl - добавляем data-background или data-background-image
        $add_to_tag = (self::$originUrl === FALSE ? '' : "data-bgr-webp=" . $match['style_val'][0] . self::$originUrl . $match['style_val'][0] . ' ');
        self::$originUrl = FALSE;
        return "<{$match['tag']}{$match['before_style']}{$add_to_tag}{$match['style_key']}{$new_style_val}>";
	}
	
	// Функция преобразует атрибуты изображения
	private static function filter_img($match)
	{
		$element = $match[1];
		$attribute = $match[2];
		$open_quote = $match[3];
		$link = $match[4];
		$extension = $match[5];
		$params = $match[6];
		$close_quote = $match[7];

		$RealFilePath = urldecode($link.$extension);
		if(self::NeedConvertation($RealFilePath)){
			$destination_path = DelightWebpConverter::CONVERTED_IMAGES_FOLDER.$RealFilePath.".webp";
			if(!file_exists(realpath(static::DOCUMENT_ROOT_PATH).$destination_path)){
				$result_conversion = WebPConvert::convert(realpath(self::GetRoot().$RealFilePath), realpath(static::DOCUMENT_ROOT_PATH).$destination_path, array("converters"=>static::CONVERTERS));
				if((isset($result_conversion["success"])) AND ($result_conversion["success"] === false)){
					return $match[0];
				}
			}
			if ($params === ''){
				$WebpfilePath = CUtil::GetAdditionalFileURL($destination_path);
			} else {
				$WebpfilePath = $destination_path.$params;
			}
			return $element.$attribute."=".$open_quote.$WebpfilePath.$close_quote." data-webp-".trim($attribute)."=".$open_quote.$link.$extension.$close_quote;
		}
		return $match[0];
	}

	/*
		Функция проверяет доступность методов конвертирования
		Возвращает массив вида:
		array(
			"converters" => array(
				0 => array(
					"name" => "cweb",
					"success" => false
				),
				...
				7 => array(
					"name" => "gd",
					"success" => true
				)
			),
			"success" => true
		)
	*/
	static function CheckConvertionMethods(){
		return WebPConvert::convert(realpath(static::DOCUMENT_ROOT_PATH . static::TEST_IMAGE_PATH), realpath(static::DOCUMENT_ROOT_PATH).static::TEST_IMAGE_PATH.".webp", array("converters"=>static::CONVERTERS));
	}
	
	// Функция отключает модуль и выводит уведомления в случае проблем в работе модуля
	static function HandlingCheckConvertionMethods($check_conversion){
		if(isset($check_conversion["success"])){
			if($check_conversion["success"] === true){
				foreach($check_conversion["converters"] as $converter){
					if(($converter["success"]) AND ($converter["name"] == "gd")){
						$gd_version = mb_substr(filter_var(gd_info()["GD Version"], FILTER_SANITIZE_NUMBER_INT), 0, 2);
						if($gd_version < 22){
							// Обработка устаревшей версии библиотеки GD
							CAdminNotify::Add(array(          
								'MESSAGE' => Loc::getMessage('DELIGHT_WEBP_GD_LIB_VERSION_ERROR'),
								'TAG' => 'delight_php_gd_lib_version_error',          
								'MODULE_ID' => 'delight.webpconverter',          
								'ENABLE_CLOSE' => 'Y',));
							\Bitrix\Main\Config\Option::set(static::MODULE_ID, "enabled", "N");
						}
					}
				}
			} else {
				// Обработка ошибки конвертирования
				CAdminNotify::Add(array(          
					'MESSAGE' => Loc::getMessage('DELIGHT_WEBP_CONVERTATION_ERROR'),
					'TAG' => 'delight_convertation_error',          
					'MODULE_ID' => 'delight.webpconverter',          
					'ENABLE_CLOSE' => 'Y',));
				\Bitrix\Main\Config\Option::set(static::MODULE_ID, "enabled", "N");
			}
		}
	}
	
	// Функция подключает JS в публичную часть сайта
	static function DelightWebpOnPageStartHandler(){
		if ((strpos($_SERVER["REQUEST_URI"], '/bitrix/admin/') !== 0) AND (DelightWebpConverter::CanProcess())){
			CUtil::InitJSCore(array('delight_webp'));
			$attrs = str_replace(array("\r\n", "\r", "\n"),"|",\Bitrix\Main\Config\Option::get(static::MODULE_ID, "attributes"));
			\Bitrix\Main\Page\Asset::getInstance()->addString('<meta name="delight_webpconverter_attr" value="'.$attrs.'">');
		}
	}
}
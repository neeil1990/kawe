<?
if (!class_exists('phpQuery') && class_exists('DOMDocument')){
	require('lib/phpQuery-onefile.php'); 
}

Class CArturgolubevLazyload 
{
	const MODULE_ID = 'arturgolubev.lazyload';
	var $MODULE_ID = 'arturgolubev.lazyload'; 
	
	function checkStatus(){
		return (!defined('LOCK_LAZYLOAD') && !defined('ADMIN_SECTION') && $_SERVER['REQUEST_METHOD'] != 'POST' && strpos($_SERVER['PHP_SELF'], BX_ROOT.'/admin') !== 0);
	}
	function checkAjax(){
		$check = (strtolower($_REQUEST['ajax']) == 'y' || (isset($_REQUEST["bxajaxid"]) && strlen($_REQUEST["bxajaxid"]) > 0)) ? 0 : 1;
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') $check = 0;
		return $check;
	}
	
	function getSetting($name, $def = false){
		return trim(COption::GetOptionString(self::MODULE_ID, $name, $def));
	}
	
	function textOneLine($text){
		return str_replace(array("\r\n", "\r", "\n"), '',  $text);
	}
	
	function onBufferContent(&$bufferContent){
		global $APPLICATION;
				
		if(self::checkStatus() && self::checkAjax() && CModule::IncludeModule(self::MODULE_ID))
		{
			$cur = $APPLICATION->GetCurPage(false);
			$curParams = $APPLICATION->GetCurPageParam();
			
			$page_exceptions = self::getSetting('page_exceptions');
			if($page_exceptions)
			{
				$ar_page_exceptions = explode("\n",$page_exceptions);
				foreach($ar_page_exceptions as $checkValue)
				{
					$checkValue = trim($checkValue);
					if(!$checkValue) continue;
					
					$pattern = '/^'.str_replace(array('/', '*'), array('\/', '.*'), $checkValue).'$/sU';
					
					if(preg_match($pattern, $cur) || preg_match($pattern, $curParams))
					{
						$page_is_exception = 1;
					}
				}
			}
			
			if(self::getSetting('enable') == 'Y' && class_exists('DOMDocument') && !$page_is_exception)
			{
				if(self::getSetting('disable_preloader') == 'Y')
				{
					$preload_background_class = '';
				}
				else
				{
					$preload_background_class = 'agll0708bg';
					
					$preload_background_class .= ' ag-'.self::getSetting('preloader_image', 'loading');
					$preload_background_class .= ' ag-'.self::getSetting('preloader_image_size', 'pw64');
					
					if(self::getSetting('preloader_for_all', 'N') == 'Y')
						$preload_background_class .= ' ag-sts';
				}
				
				if(self::getSetting('selectors'))
					$selectors = '.agllimage, '.self::getSetting('selectors');
				else
					$selectors = '.agllimage';
				
				$doc = phpQuery::newDocumentHTML($bufferContent);
				
				$images = $doc->find($selectors);
				
				$arSearch = array();
				$arReplace = array();
				
				foreach ($images as $image) {
					$pqImage = pq($image);
					
					$imageSrc = $APPLICATION->ConvertCharset($pqImage->attr('src'), "UTF-8", LANG_CHARSET);
					if($imageSrc)
					{
						$arSearch[] = array(
							"src" => $imageSrc,
							"class" => $APPLICATION->ConvertCharset($pqImage->attr('class'), "UTF-8", LANG_CHARSET),
							"id" => $APPLICATION->ConvertCharset($pqImage->attr('id'), "UTF-8", LANG_CHARSET),
						);
						
						$imageClass = $pqImage->attr('class');
						$pqImage->attr('class', $imageClass.' agll0708 '.$preload_background_class);
						$pqImage->attr('data-src', $imageSrc);
						$pqImage->attr('src', '/bitrix/images/arturgolubev.lazyload/pixel.gif');
						
						$arReplace[] = $pqImage->htmlOuter();
					}
				}
				
				phpQuery::unloadDocuments();
				
				if(!empty($arSearch))
				{
					$arSearch2 = array();
					$arReplace2 = array();
					
					preg_match_all('/\<img.*\>/sU', $bufferContent, $fullImageList);
					foreach($arSearch as $searchKey=>$searchItem)
					{
						foreach($fullImageList[0] as $imageItem)
						{
							$replace = 1;
							foreach($searchItem as $sKey=>$sItem)
							{
								if(!$sItem || !$replace) continue;
								
								if(!strstr($imageItem, $sKey."='".$sItem."'") && !strstr($imageItem, $sKey.'="'.$sItem.'"'))
									$replace = 0;
							}
							
							if($replace)
							{
								$arSearch2[] = $imageItem;
								$arReplace2[] = $arReplace[$searchKey];
							}
						}
					}
					
					if(!empty($arSearch2))
						$bufferContent = str_replace($arSearch2, $arReplace2, $bufferContent);
				}
				
				$option = array(
					'auto_loading' => self::getSetting('auto_loading', "disable"),
					'effect_type' => self::getSetting('effect_type', "fadeIn"),
					'effect_speed' => self::getSetting('effect_speed', "500"),
				);
				
				$debug_mode = (self::getSetting('debug', "N") == 'Y');
				
				if($option['effect_type'] == 'show') $option['effect_speed'] = 0;
				
				$n = "\n";
				
				$s = $n.'<script type="text/javascript" src="/bitrix/js/'.self::MODULE_ID.'/jq.lazy.min.js"></script>'.$n;
				
				$s .= '<script type="text/javascript">'.$n;
					$s .= 'function initAgLazyLoad(){';
						$s .= 'var $lazyElements = $(".agll0708").not(".llInitSuccess");';
						$s .= 'if($lazyElements.length > 0){';
							if($debug_mode) $s .= ' console.log("Lazy Init Length = "+ $lazyElements.length);';
						
							$s .= '$lazyElements.lazy({';
								$s .= 'effect: "'.$option['effect_type'].'",';
								$s .= 'effectTime: '.$option['effect_speed'].',';
								$s .= 'threshold: 0,';
								$s .= 'visibleOnly: 0,';
								
								if($option['auto_loading'] == 'enabled')
									$s .= 'delay: 500,';
								
								$s .= 'afterLoad: function(element) {';
									if($debug_mode) $s .= 'console.log("Lazy: image has loaded");';
									$s .= 'element.removeClass("agll0708bg").addClass("imageLoaded");';
								$s .= '},';
								if($debug_mode) $s .= 'beforeLoad: function(element) {';
									if($debug_mode) $s .= 'console.log("Lazy: start load image");';
								if($debug_mode) $s .= '},';
							$s .= '});';
							
							$s .= '$lazyElements.addClass("llInitSuccess");';
						$s .= '};';
					$s .= '};'.$n;
					
					$s .= 'function initAgChecker(){';
						$s .= 'setTimeout(function(){';
							if($debug_mode) $s .= 'console.log("Lazy: checks");';
							
							$s .= 'var noLoaded = $(".agll0708.llInitSuccess").not(".imageLoaded");';
							$s .= 'if(noLoaded.length > 0) {';
								$s .= 'var instance = noLoaded.data("plugin_lazy"); if(typeof instance == "object"){';
									if($debug_mode) $s .= 'console.log("Lazy: image pixel length = " + noLoaded.length);';
									$s .= 'instance.update();';
								$s .= '}';
							$s .= '}';
							
							$s .= 'initAgLazyLoad();';
							
							$s .= 'initAgChecker();';
						$s .= '}, 1500);';
					$s .= '};'.$n;
					
					$s .= 'if(window.frameCacheVars !== undefined){';
						$s .= 'BX.addCustomEvent("onFrameDataReceived", function(json){';
							if($debug_mode) $s .= 'console.log("Lazy Init Type = composite");';
							$s .= 'initAgLazyLoad(); initAgChecker();';
						$s .= '});';
					$s .= '}else{';
						$s .= '$(function(){';
							if($debug_mode) $s .= 'console.log("Lazy Init Type = ready");';
							$s .= 'initAgLazyLoad(); initAgChecker();';
						$s .= '});';
					$s .= '}'.$n;
					
				$s .= '</script>'.$n;
				
				$bufferContent = preg_replace('/<\/body>/', $s.'</body>', $bufferContent, 1);
			}
		}
	}
	
	function onEpilog(){
		if(self::checkStatus() && self::checkAjax() && CModule::IncludeModule(self::MODULE_ID))
		{
			if(self::getSetting('enable') == 'Y')
			{
				global $APPLICATION;
				
				if(self::getSetting('jquery') == 'Y')
					CJSCore::Init(array("jquery"));
				
				
				if(self::getSetting('disable_preloader') != 'Y')
					$APPLICATION->SetAdditionalCSS("/bitrix/css/".self::MODULE_ID."/style.css", true);
			}
		}
	}
}
?>
<?
IncludeModuleLangFile(__FILE__);

Class CArturgolubevCssinliner 
{
	const MODULE_ID = 'arturgolubev.cssinliner';
	var $MODULE_ID = 'arturgolubev.cssinliner'; 
	
	function checkStatus(){
		return (!defined('ADMIN_SECTION') && $_SERVER['REQUEST_METHOD'] != 'POST' && strpos($_SERVER['PHP_SELF'], BX_ROOT.'/admin') !== 0);
	}
	
	function checkAdmin(){
		global $USER;
		if(!is_object($USER)) $USER = new CUser();
		
		return $USER->IsAdmin();
	}
	
	function getSetting($name){
		return COption::GetOptionString(self::MODULE_ID, $name);
	}
	
	function onBufferContent(&$bufferContent){
		if(self::checkStatus() && CModule::IncludeModule(self::MODULE_ID))
		{
			$admin_debug = self::getSetting('admin_debug');
			
			$disable = self::getSetting('disable');
			$disableSite = self::getSetting('disabled_'.SITE_ID);
						
			if($disable != 'Y' && $disableSite != 'Y')
			{
				if(!self::checkAdmin())
				{
					$bufferContent = self::replace($bufferContent);
				}
				elseif($admin_debug == 'Y')
				{
					self::showDebug($bufferContent);
				}
			}
		}
	}
	
	function showDebug($bufferContent){
		preg_match_all('/\<link.*\>/sU', $bufferContent, $arLinks);
		
		echo GetMessage("ARTURGOLUBEV_CSSINLINER_DEBUG_TITLE").'<pre>';
		foreach($arLinks[0] as $link){
			echo htmlspecialcharsbx($link)."\r";
		}
		echo '</pre>';
	}
	
	function baseOptimize($style, $useOptimize, $arDopSearch = array(), $arDopReplace = array()){
		$arOptiSearch = array();
		$arOptiReplace = array();

		if($useOptimize == 'Y')
		{
			$arOptiSearch[] = '/\/\*.*?\*\//si';
			$arOptiSearch[] = '/(\s)+/s';
			$arOptiSearch[] = "/\n/";
			
			$arOptiReplace[] = "";
			$arOptiReplace[] = '\\1';
			$arOptiReplace[] = "";
		}
		
		$mergedSearch = array_merge($arOptiSearch, $arDopSearch);
		$mergedReplace = array_merge($arOptiReplace, $arDopReplace);
		
		if(!empty($mergedSearch))
			$style = preg_replace($mergedSearch, $mergedReplace, $style);
		
		return $style;
	}
	
	function _getOuterStyle($url){
		if(extension_loaded('curl')){
			try{
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
				curl_setopt($ch, CURLOPT_HEADER, 0);
				$style = curl_exec($ch);
				curl_close($ch);
			}catch(Exception $e){
				$style = file_get_contents($url);
			}
		}else{
			$style = file_get_contents($url);
		}
		
		return trim($style);
	}
	
	function getOuterCss($url, $useOptimize = 'N', $arDopSearch = array(), $arDopReplace = array()){
		$timeSeconds = 86400;
		$cacheId = md5($url.$useOptimize.serialize($arDopSearch).serialize($arDopReplace));
		
		if(substr($url,0,2) == '//') $url = 'https:'.$url;
		
		$obCache = new CPHPCache();
		$cachePath = '/'.SITE_ID.'/cssinliner/'.$cacheId;
		
		if($obCache->InitCache($timeSeconds, $cacheId, $cachePath)){
			$vars = $obCache->GetVars();
			$style = $vars['style'];
		}elseif($obCache->StartDataCache()){
			$style = self::_getOuterStyle($url);
			$style = self::baseOptimize($style, $useOptimize, $arDopSearch, $arDopReplace);
			
			$obCache->EndDataCache(array('style' => $style));
		}
		
		return $style;
	}
	
	function getInnerCss($url, $useOptimize = 'N', $arDopSearch = array(), $arDopReplace = array()){
		$timeSeconds = 3600;
		$cacheId = md5($url.$useOptimize.serialize($arDopSearch).serialize($arDopReplace));
				
		$obCache = new CPHPCache();
		$cachePath = '/'.SITE_ID.'/cssinliner/'.$cacheId;
		
		if($obCache->InitCache($timeSeconds, $cacheId, $cachePath)){
			// echo '<pre>'; print_r('Cache'); echo '</pre>';
			
			$vars = $obCache->GetVars();
			$style = $vars['style'];
		}elseif($obCache->StartDataCache()){
			// echo '<pre>'; print_r('NO Cache'); echo '</pre>';
			
			$style = trim(file_get_contents($_SERVER['DOCUMENT_ROOT'].$url));
			$style = self::baseOptimize($style, $useOptimize, $arDopSearch, $arDopReplace);
			$obCache->EndDataCache(array('style' => $style));
		}
		
		return $style;
	}
	
	function replace($bufferContent){
		preg_match_all('/\<link.*\>/sU', $bufferContent, $arLinks);
		if(!empty($arLinks[0]))
		{
			/* get setting */
			$use_compress = self::getSetting('use_compress');
			$inline_max_weight = IntVal(self::getSetting('inline_max_weight'));
			$google_fonts_inline = self::getSetting('google_fonts_inline');
			$outer_style_inline = self::getSetting('outer_style_inline');
			
			/* set default setting */
			if($inline_max_weight <= 0) $inline_max_weight = 128;
		
			$arLinksWork = array();
			foreach($arLinks[0] as $link)
			{
				if(strstr($link, 'media="print"') || strstr($link, "media='print'")) continue;
				
				if($google_fonts_inline == 'Y' && strstr($link, '//fonts.googleapis.com/css'))
				{					
					preg_match_all('/href=[\"\'](.*)[\"\']/sU', $link, $tmphref);
					$cssItemHref = $tmphref[1][0];
					
					if($cssItemHref)
					{
						$style = self::getOuterCss($cssItemHref, $use_compress);
						
						if($style)
							$bufferContent = str_replace($link, '<style type="text/css">'.$style.'</style>', $bufferContent);
					}
				}
				
				if(!strstr($link, '.css'))
					continue;
				
				if($outer_style_inline != 'Y')
				{
					if(strstr($link, 'http://') || strstr($link, 'https://'))
						continue;
				}
				
				$arLinksWork[] = $link;
			}
			
			if(count($arLinksWork))
			{
				$arPregUrl = array(
					'/url\s?\([\"\']?((?!\'?\"?data:image)(?!http\:)(?!https\:)[\w\.]+.*)[\"\']?\)/sU'
				);
				foreach($arLinksWork as $link){
					unset($style);
					
					preg_match_all('/href=[\"\'](.*\.css).*[\"\']/sU', $link, $tmphref);
					$cssitem = $tmphref[1][0];
					if($cssitem)
					{
						$path = dirname($cssitem).'/';
						$arPregUrlR = array("url('".$path."$1')");
						
						if(strstr($link, 'http://') || strstr($link, 'https://') || substr($cssitem, 0, 2) == '//')
						{
							$style = self::getOuterCss($cssitem, $use_compress, $arPregUrl, $arPregUrlR);
						}
						elseif(file_exists($_SERVER['DOCUMENT_ROOT'].$cssitem))
						{
							$size = (filesize($_SERVER['DOCUMENT_ROOT'].$cssitem) / 1024);
							if($size < $inline_max_weight)
							{
								$style = self::getInnerCss($cssitem, $use_compress, $arPregUrl, $arPregUrlR);
							}
						}
						
						if($style)
							$bufferContent = str_replace($link, '<style type="text/css">'.$style.'</style>', $bufferContent);
					}
				}
			}
		}
		unset($arLinks);
		unset($arLinksWork);
		
		return $bufferContent;
	}
}
?>

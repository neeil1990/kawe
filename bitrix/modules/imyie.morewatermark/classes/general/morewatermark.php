<?
class CIMYIEMoreWatermark{

	public static function OnBeforeIBlockElementAdd(&$arFields) {
		self::addWatermark($arFields);
	}

	public static function OnBeforeIBlockElementUpdate(&$arFields) {
		self::addWatermark($arFields);
	}

	public static function addWatermark($arFields = array()) {
		
		$return = false;
		$arIBlocksOpt = explode(',', COption::GetOptionString('imyie.morewatermark', 'iblocks', ''));
		
		if (CModule::IncludeModule('iblock') && isset($arFields) && is_array($arFields) && IntVal($arFields['IBLOCK_ID']) > 0) {
			
			$return = true;
			
			if (in_array($arFields['IBLOCK_ID'], $arIBlocksOpt)) {
				$arOptions = array(
					'USE_WATERMARK_METHOD' => COption::GetOptionString('imyie.morewatermark', 'watermart_methood', 1),
					'USE_WATERMARK_FILE' => COption::GetOptionString('imyie.morewatermark', 'use_watermart_file', ''),
					'WATERMARK_FILE_POSITION' => COption::GetOptionString('imyie.morewatermark', 'watermart_file_position', 'mc'),
					'WATERMARK_FILE_ALPHA' => COption::GetOptionString('imyie.morewatermark', 'watermart_file_alpha', ''),
					'WATERMARK_FILE' => COption::GetOptionString('imyie.morewatermark', 'watermark_file', ''),
					'USE_WATERMARK_TEXT' => COption::GetOptionString('imyie.morewatermark', 'use_watermart_text', ''),
					'WATERMARK_TEXT' => COption::GetOptionString('imyie.morewatermark', 'watermart_text', ''),
					'WATERMARK_TEXT_POSITION' => COption::GetOptionString('imyie.morewatermark', 'watermart_text_position', 'mc'),
					'WATERMARK_TEXT_SIZE' => COption::GetOptionString('imyie.morewatermark', 'watermart_text_size', ''),
					'WATERMARK_TEXT_COLOR' => COption::GetOptionString('imyie.morewatermark', 'watermart_text_color', 'FFFFFF'),
					'WATERMARK_TEXT_FONT' => COption::GetOptionString('imyie.morewatermark', 'watermark_text_font', ''),
				);
				
				// file watermart
				$arrPropList = array();
				$arrPropList[$arFields['IBLOCK_ID']] = array();
				$prev_pic = COption::GetOptionString('imyie.morewatermark', 'set_ib'.$arFields['IBLOCK_ID'].'_prev_pic', '');
				$det_pic = COption::GetOptionString('imyie.morewatermark', 'set_ib'.$arFields['IBLOCK_ID'].'_det_pic', '');
				$resProp = CIBlockProperty::GetList(array("sort" => "asc", "name" => "asc"),array("IBLOCK_ID" => $arFields['IBLOCK_ID'], 'PROPERTY_TYPE' => 'F'));
				while ($propFields = $resProp->GetNext()) {
					$arrPropList[$arFields['IBLOCK_ID']][] = $propFields;
				}
				
				if ($prev_pic == 'Y' && is_array($arFields["PREVIEW_PICTURE"])) {
					if ($arOptions['USE_WATERMARK_FILE'] == 'Y') {
						CIBLock::FilterPicture($arFields['PREVIEW_PICTURE']['tmp_name'], array(
							"name" => "watermark",
							"position" => $arOptions["WATERMARK_FILE_POSITION"],
							"type" => "file",
							"size" => "real",
							"alpha_level" => 100 - min(max($arOptions["WATERMARK_FILE_ALPHA"], 0), 100),
							"file" => $_SERVER["DOCUMENT_ROOT"].Rel2Abs("/", $arOptions["WATERMARK_FILE"]),
						));
					}
					
					if ($arOptions['USE_WATERMARK_TEXT'] == 'Y'){
						CIBLock::FilterPicture($arFields['PREVIEW_PICTURE']['tmp_name'], array(
							"name" => "watermark",
							"position" => $arOptions["WATERMARK_TEXT_POSITION"],
							"type" => "text",
							"coefficient" => $arOptions["WATERMARK_TEXT_SIZE"],
							"text" => $arOptions["WATERMARK_TEXT"],
							"font" => $_SERVER["DOCUMENT_ROOT"].Rel2Abs("/", $arOptions["WATERMARK_TEXT_FONT"]),
							"color" => $arOptions["WATERMARK_TEXT_COLOR"],
						));
					}
				}
				
				if ($det_pic == 'Y' && is_array($arFields["DETAIL_PICTURE"])) {
					if ($arOptions['USE_WATERMARK_FILE'] == 'Y'){
						CIBLock::FilterPicture($arFields['DETAIL_PICTURE']['tmp_name'], array(
							"name" => "watermark",
							"position" => $arOptions["WATERMARK_FILE_POSITION"],
							"type" => "file",
							"size" => "real",
							"alpha_level" => 100 - min(max($arOptions["WATERMARK_FILE_ALPHA"], 0), 100),
							"file" => $_SERVER["DOCUMENT_ROOT"].Rel2Abs("/", $arOptions["WATERMARK_FILE"]),
						));
					}
					
					if($arOptions['USE_WATERMARK_TEXT'] == 'Y'){
						CIBLock::FilterPicture($arFields['DETAIL_PICTURE']['tmp_name'], array(
							"name" => "watermark",
							"position" => $arOptions["WATERMARK_TEXT_POSITION"],
							"type" => "text",
							"coefficient" => $arOptions["WATERMARK_TEXT_SIZE"],
							"text" => $arOptions["WATERMARK_TEXT"],
							"font" => $_SERVER["DOCUMENT_ROOT"].Rel2Abs("/", $arOptions["WATERMARK_TEXT_FONT"]),
							"color" => $arOptions["WATERMARK_TEXT_COLOR"],
						));
					}
				}
				
				if ($arOptions['USE_WATERMARK_METHOD'] == 2) {
					
					// methood 2
					foreach ($arFields['PROPERTY_VALUES'] as $propField) {
						foreach ($propField as $arValue){
						
							if (isset($arValue['tmp_name'])) {
								$val = $arValue['tmp_name'];
							} else {
								$val = $arValue['VALUE']['tmp_name'];
							}
						
							if (($arOptions['USE_WATERMARK_FILE'] == 'Y') && $val) {
								CIBLock::FilterPicture($val, array(
									"name" => "watermark",
									"position" => $arOptions["WATERMARK_FILE_POSITION"],
									"type" => "file",
									"size" => "real",
									"alpha_level" => 100 - min(max($arOptions["WATERMARK_FILE_ALPHA"], 0), 100),
									"file" => $_SERVER["DOCUMENT_ROOT"].Rel2Abs("/", $arOptions["WATERMARK_FILE"]),
								));
							}
							
							if ($arOptions['USE_WATERMARK_TEXT'] == 'Y' && $val) {
								CIBLock::FilterPicture($val, array(
									"name" => "watermark",
									"position" => $arOptions["WATERMARK_TEXT_POSITION"],
									"type" => "text",
									"coefficient" => $arOptions["WATERMARK_TEXT_SIZE"],
									"text" => $arOptions["WATERMARK_TEXT"],
									"font" => $_SERVER["DOCUMENT_ROOT"].Rel2Abs("/", $arOptions["WATERMARK_TEXT_FONT"]),
									"color" => $arOptions["WATERMARK_TEXT_COLOR"],
								));
							}
						}
					}
					
				} else {
					
					// methood 1 (default)
					if (is_array($arrPropList[$arFields['IBLOCK_ID']]) && count($arrPropList[$arFields['IBLOCK_ID']]) > 0) {
						foreach ($arrPropList[$arFields['IBLOCK_ID']] as $propField) {
							
							$use = COption::GetOptionString('imyie.morewatermark', 'set_ib'.$arFields['IBLOCK_ID'].'_prop'.$propField['ID'], '');
							
							if ($use == 'Y') {
								if (is_array($arFields['PROPERTY_VALUES'][$propField['ID']])) {
									foreach ($arFields['PROPERTY_VALUES'][$propField['ID']] as $arValue) {
										
										if (isset($arValue['tmp_name'])) {
											$val = $arValue['tmp_name'];
										} else {
											$val = $arValue['VALUE']['tmp_name'];
										}
										
										if ($arOptions['USE_WATERMARK_FILE'] == 'Y' && $val) {
											CIBLock::FilterPicture($val, array(
												"name" => "watermark",
												"position" => $arOptions["WATERMARK_FILE_POSITION"],
												"type" => "file",
												"size" => "real",
												"alpha_level" => 100 - min(max($arOptions["WATERMARK_FILE_ALPHA"], 0), 100),
												"file" => $_SERVER["DOCUMENT_ROOT"].Rel2Abs("/", $arOptions["WATERMARK_FILE"]),
											));
										}
										
										if ($arOptions['USE_WATERMARK_TEXT'] == 'Y' && $val) {
											CIBLock::FilterPicture($val, array(
												"name" => "watermark",
												"position" => $arOptions["WATERMARK_TEXT_POSITION"],
												"type" => "text",
												"coefficient" => $arOptions["WATERMARK_TEXT_SIZE"],
												"text" => $arOptions["WATERMARK_TEXT"],
												"font" => $_SERVER["DOCUMENT_ROOT"].Rel2Abs("/", $arOptions["WATERMARK_TEXT_FONT"]),
												"color" => $arOptions["WATERMARK_TEXT_COLOR"],
											));
										}
										
									}
								}
							}
						
						}
					}
					
				}
				
			}
		}
		return $return;
	}

}
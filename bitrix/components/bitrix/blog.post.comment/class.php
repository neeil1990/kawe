<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Text\HtmlFilter;
Loc::loadMessages(__FILE__);

class CBlogPostCommentEdit extends CBitrixComponent
{
	const FILE_CONTROL_ID_PREFIX = 'blogcommentfiles';
	const POST_COMMENT_FORM_PREFIX = 'POST_BLOG_COMMENT_FORM';
	const POST_COMMENT_MESSAGE = "POST_COMMENT_MESSAGE";
	public $userId;
	
	public function onPrepareComponentParams($arParams)
	{
		if (!CModule::IncludeModule("blog"))
		{
			ShowError(Loc::GetMessage("BLOG_MODULE_NOT_INSTALL"));
			return;
		}
		
		global $APPLICATION, $DB, $USER;
		
		$arParams["ID"] = trim($arParams["ID"]);
		$arParams["~ID"] = htmlspecialcharsEx($arParams["ID"]);
		$arParams["ID_BY_CODE"] = false;
		if(!is_numeric($arParams["ID"]) || strlen(IntVal($arParams["ID"])) != strlen($arParams["ID"]))
		{
			$arParams["ID"] = preg_replace("/[^a-zA-Z0-9_-]/is", "", Trim($arParams["~ID"]));
			$arParams["ID_BY_CODE"] = true;
		}
		else
			$arParams["ID"] = IntVal($arParams["ID"]);
			
		$arParams["BLOG_URL"] = preg_replace("/[^a-zA-Z0-9_-]/is", "", Trim($arParams["BLOG_URL"]));
		if(!is_array($arParams["GROUP_ID"]))
			$arParams["GROUP_ID"] = array($arParams["GROUP_ID"]);
		foreach($arParams["GROUP_ID"] as $k=>$v)
			if(IntVal($v) <= 0)
				unset($arParams["GROUP_ID"][$k]);
		
		if ($arParams["CACHE_TYPE"] == "Y" || ($arParams["CACHE_TYPE"] == "A" && COption::GetOptionString("main", "component_cache_on", "Y") == "Y"))
			$arParams["CACHE_TIME"] = intval($arParams["CACHE_TIME"]);
		else
			$arParams["CACHE_TIME"] = 0;
		
		if(strLen($arParams["BLOG_VAR"])<=0)
			$arParams["BLOG_VAR"] = "blog";
		if(strLen($arParams["PAGE_VAR"])<=0)
			$arParams["PAGE_VAR"] = "page";
		if(strLen($arParams["USER_VAR"])<=0)
			$arParams["USER_VAR"] = "id";
		if(strLen($arParams["POST_VAR"])<=0)
			$arParams["POST_VAR"] = "id";
		if(strLen($arParams["NAV_PAGE_VAR"])<=0)
			$arParams["NAV_PAGE_VAR"] = "pagen";
		if(strLen($arParams["COMMENT_ID_VAR"])<=0)
			$arParams["COMMENT_ID_VAR"] = "commentId";
		if(IntVal($_GET[$arParams["NAV_PAGE_VAR"]])>0)
			$arParams["PAGEN"] = IntVal($_REQUEST[$arParams["NAV_PAGE_VAR"]]);
		else
			$arParams["PAGEN"] = 1;
		
		if(IntVal($arParams["COMMENTS_COUNT"])<=0)
			$arParams["COMMENTS_COUNT"] = 25;
		
		if($arParams["USE_ASC_PAGING"] != "Y")
			$arParams["USE_DESC_PAGING"] = "Y";
		
		$arParams["PATH_TO_BLOG"] = trim($arParams["PATH_TO_BLOG"]);
		if(strlen($arParams["PATH_TO_BLOG"])<=0)
			$arParams["PATH_TO_BLOG"] = htmlspecialcharsbx($APPLICATION->GetCurPage()."?".$arParams["PAGE_VAR"]."=blog&".$arParams["BLOG_VAR"]."=#blog#");
		
		$arParams["PATH_TO_USER"] = trim($arParams["PATH_TO_USER"]);
		if(strlen($arParams["PATH_TO_USER"])<=0)
			$arParams["PATH_TO_USER"] = htmlspecialcharsbx($APPLICATION->GetCurPage()."?".$arParams["PAGE_VAR"]."=user&".$arParams["USER_VAR"]."=#user_id#");
		
		$arParams["PATH_TO_POST"] = trim($arParams["PATH_TO_POST"]);
		if(strlen($arParams["PATH_TO_POST"])<=0)
			$arParams["PATH_TO_POST"] = htmlspecialcharsbx($APPLICATION->GetCurPage()."?".$arParams["PAGE_VAR"]."=post&".$arParams["BLOG_VAR"]."=#blog#"."&".$arParams["POST_VAR"]."=#post_id#");
		
		$arParams["PATH_TO_SMILE"] = strlen(trim($arParams["PATH_TO_SMILE"]))<=0 ? false : trim($arParams["PATH_TO_SMILE"]);
		
		if (!array_key_exists("PATH_TO_CONPANY_DEPARTMENT", $arParams))
			$arParams["PATH_TO_CONPANY_DEPARTMENT"] = "/company/structure.php?set_filter_structure=Y&structure_UF_DEPARTMENT=#ID#";
		if (!array_key_exists("PATH_TO_MESSAGES_CHAT", $arParams))
			$arParams["PATH_TO_MESSAGES_CHAT"] = "/company/personal/messages/chat/#user_id#/";
		if (!array_key_exists("PATH_TO_VIDEO_CALL", $arParams))
			$arParams["PATH_TO_VIDEO_CALL"] = "/company/personal/video/#user_id#/";
		
		if (strlen(trim($arParams["NAME_TEMPLATE"])) <= 0)
			$arParams["NAME_TEMPLATE"] = CSite::GetNameFormat();
		$arParams['SHOW_LOGIN'] = $arParams['SHOW_LOGIN'] != "N" ? "Y" : "N";
		$arParams["IMAGE_MAX_WIDTH"] = IntVal($arParams["IMAGE_MAX_WIDTH"]);
		$arParams["IMAGE_MAX_HEIGHT"] = IntVal($arParams["IMAGE_MAX_HEIGHT"]);
		$arParams["ALLOW_POST_CODE"] = $arParams["ALLOW_POST_CODE"] !== "N";
		
		$arParams["SMILES_COUNT"] = IntVal($arParams["SMILES_COUNT"]);
		if(IntVal($arParams["SMILES_COUNT"])<=0)
			$arParams["SMILES_COUNT"] = 4;
		
		$arParams["SMILES_COLS"] = IntVal($arParams["SMILES_COLS"]);
		if(IntVal($arParams["SMILES_COLS"]) <= 0)
			$arParams["SMILES_COLS"] = 0;
		
		$arParams["DATE_TIME_FORMAT"] = trim(empty($arParams["DATE_TIME_FORMAT"]) ? $DB->DateFormatToPHP(CSite::GetDateFormat("FULL")) : $arParams["DATE_TIME_FORMAT"]);
		
		$arParams["EDITOR_RESIZABLE"] = $arParams["EDITOR_RESIZABLE"] !== "N";
		$arParams["EDITOR_CODE_DEFAULT"] = $arParams["EDITOR_CODE_DEFAULT"] === "Y";
		$arParams["EDITOR_DEFAULT_HEIGHT"] = intVal($arParams["EDITOR_DEFAULT_HEIGHT"]);
		if(IntVal($arParams["EDITOR_DEFAULT_HEIGHT"]) <= 0)
			$arParams["EDITOR_DEFAULT_HEIGHT"] = 200;
		$arParams["ALLOW_VIDEO"] = ($arParams["ALLOW_VIDEO"] == "Y" ? "Y" : "N");
		
		if($arParams["ALLOW_IMAGE_UPLOAD"] == "A" || ($arParams["ALLOW_IMAGE_UPLOAD"] == "R" && $USER->IsAuthorized()))
		{
			if(!is_array($arParams["COMMENT_PROPERTY"]))
				$arParams["COMMENT_PROPERTY"] = Array(CBlogComment::UF_NAME);
			else
				$arParams["COMMENT_PROPERTY"][] = CBlogComment::UF_NAME;
		}
		
		$arParams["AJAX_POST"] = ($arParams["AJAX_POST"] == "Y" ? "Y" : "N");
		
		$arParams["BLOG_MODULE_PERMS"] = $GLOBALS["APPLICATION"]->GetGroupRight("blog");
		$arParams["SHOW_SPAM"] = ($arParams["SHOW_SPAM"] == "Y" && $arParams["BLOG_MODULE_PERMS"] >= "W" ? "Y" : "N");
		
		return $arParams;
	}
	
	public function executeComponent()
	{
		global $USER, $APPLICATION, $DB;
		
		$simpleComment = $this->arParams["SIMPLE_COMMENT"] == "Y";
		
		$bUseTitle = true;
		$this->arParams["NOT_USE_COMMENT_TITLE"] = ($this->arParams["NOT_USE_COMMENT_TITLE"] != "Y") ? "N" : "Y";
		if($this->arParams["NOT_USE_COMMENT_TITLE"] == "Y")
			$bUseTitle = false;
		
		$commentUrlID = IntVal($_REQUEST[$this->arParams["COMMENT_ID_VAR"]]);
		
// 		activation rating
		CRatingsComponentsMain::GetShowRating($this->arParams);
		
		if(COption::GetOptionString("blog","allow_video", "Y") == "Y" && $this->arParams["ALLOW_VIDEO"] == "Y")
			$this->arResult["allowVideo"] = true;
		
		if($this->arParams["ALLOW_IMAGE_UPLOAD"] == "A" || ($this->arParams["ALLOW_IMAGE_UPLOAD"] == "R" && $USER->IsAuthorized()))
			$this->arResult["allowImageUpload"] = true;
		
		$this->arResult["userID"] = $user_id = $USER->GetID();
		$this->arResult["canModerate"] = false;
		
		$this->arResult["ajax_comment"] = 0;
		
		if($this->arParams["NO_URL_IN_COMMENTS"] == "L")
		{
			$this->arResult["NoCommentUrl"] = true;
			$this->arResult["NoCommentReason"] = GetMessage("B_B_PC_MES_NOCOMMENTREASON_L");
		}
		if(!$USER->IsAuthorized() && $this->arParams["NO_URL_IN_COMMENTS"] == "A")
		{
			$this->arResult["NoCommentUrl"] = true;
			$this->arResult["NoCommentReason"] = GetMessage("B_B_PC_MES_NOCOMMENTREASON_A");
		}
		
		if(is_numeric($this->arParams["NO_URL_IN_COMMENTS_AUTHORITY"]))
		{
			$this->arParams["NO_URL_IN_COMMENTS_AUTHORITY"] = floatVal($this->arParams["NO_URL_IN_COMMENTS_AUTHORITY"]);
			$this->arParams["NO_URL_IN_COMMENTS_AUTHORITY_CHECK"] = "Y";
			if($USER->IsAuthorized())
			{
				$authorityRatingId = CRatings::GetAuthorityRating();
				$arRatingResult = CRatings::GetRatingResult($authorityRatingId, $user_id);
				if($arRatingResult["CURRENT_VALUE"] < $this->arParams["NO_URL_IN_COMMENTS_AUTHORITY"])
				{
					$this->arResult["NoCommentUrl"] = true;
					$this->arResult["NoCommentReason"] = GetMessage("B_B_PC_MES_NOCOMMENTREASON_R");
				}
			}
		}
		
		$arBlog = CBlog::GetByUrl($this->arParams["BLOG_URL"], $this->arParams["GROUP_ID"]);
		$arBlog = CBlogTools::htmlspecialcharsExArray($arBlog);
		
		$arGroup = CBlogGroup::GetByID($arBlog["GROUP_ID"]);
		$this->arResult["Blog"] = $arBlog;
		
		if($this->arParams["ID_BY_CODE"])
			$this->arParams["ID"] = CBlogPost::GetID($this->arParams["ID"], $arBlog["ID"]);
		
		$this->arParams["ENTITY_XML_ID"] = self::createXmlId($this->arParams["ID"]);
		
		$arPost = CBlogPost::GetByID($this->arParams["ID"]);
		if(empty($arPost) && !$this->arParams["ID_BY_CODE"])
		{
			$this->arParams["ID"] = CBlogPost::GetID($this->arParams["ID"], $arBlog["ID"]);
			$arPost = CBlogPost::GetByID($this->arParams["ID"]);
		}
		if(IntVal($this->arParams["ID"])>0)
			$this->arResult["Perm"] = CBlogPost::GetBlogUserCommentPerms($this->arParams["ID"], $user_id);
		else
			$this->arResult["Perm"] = CBlog::GetBlogUserCommentPerms($arBlog["ID"], $user_id);
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_REQUEST['mfi_mode']) && ($_REQUEST['mfi_mode'] == "upload"))
		{
			CBlogImage::AddImageResizeHandler(array("width" => 400, "height" => 400));
			CBlogImage::AddImageCreateHandler(array('IS_COMMENT' => 'Y', 'USER_ID' => $user_id));
		}
		
		if(((!empty($arPost) && $arPost["PUBLISH_STATUS"] == BLOG_PUBLISH_STATUS_PUBLISH && $arPost["ENABLE_COMMENTS"] == "Y") || $simpleComment) && (($arBlog["ACTIVE"] == "Y" && $arGroup["SITE_ID"] == SITE_ID) || $simpleComment) )
		{
			$arPost = CBlogTools::htmlspecialcharsExArray($arPost);
			$this->arResult["Post"] = $arPost;
			
			if($arPost["BLOG_ID"] == $arBlog["ID"] || $simpleComment)
			{
				//Comment delete
				if(IntVal($_GET["delete_comment_id"])>0)
				{
					if($_GET["success"] == "Y")
					{
						$this->arResult["MESSAGE"] = GetMessage("B_B_PC_MES_DELED");
					}
					else
					{
						$arComment = CBlogComment::GetByID(IntVal($_GET["delete_comment_id"]));
						if($this->arResult["Perm"]>=BLOG_PERMS_MODERATE && !empty($arComment))
						{
							if(check_bitrix_sessid())
							{
								if(CBlogComment::Delete(IntVal($_GET["delete_comment_id"])))
								{
									BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/first_page/");
									BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/comment/".$arComment["POST_ID"]."/");
									BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/post/".$arComment["POST_ID"]."/");
									BXClearCache(True, "/".SITE_ID."/blog/last_comments/");
									BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/rss_out/".$arComment["POST_ID"]."/C/");
									BXClearCache(True, "/".SITE_ID."/blog/last_messages/");
									BXClearCache(True, "/".SITE_ID."/blog/commented_posts/");
									BXClearCache(True, "/".SITE_ID."/blog/popular_posts/");
									
									if($this->arParams["AJAX_POST"] != "Y")
										LocalRedirect($APPLICATION->GetCurPageParam("delete_comment_id=".IntVal($_GET["delete_comment_id"])."&success=Y", Array("delete_comment_id", "sessid", "success", "commentId", "hide_comment_id", "show_comment_id")))."#comments";
									else
									{
										$this->arResult["ajax_comment"] = IntVal($_GET["delete_comment_id"]);
										$this->arResult["MESSAGE"] = GetMessage("B_B_PC_MES_DELED");
									}
								}
							}
							else
								$this->arResult["ERROR_MESSAGE"] = GetMessage("B_B_PC_MES_ERROR_SESSION");
						}
						if($this->arParams["AJAX_POST"]!= "Y" || ($this->arParams["AJAX_POST"] == "Y" && IntVal($this->arResult["ajax_comment"]) <= 0))
							$this->arResult["ERROR_MESSAGE"] = GetMessage("B_B_PC_MES_ERROR_DELETE");
					}
				}
				elseif(IntVal($_GET["show_comment_id"])>0)
				{
					$arComment = CBlogComment::GetByID(IntVal($_GET["show_comment_id"]));
					if($this->arResult["Perm"]>=BLOG_PERMS_MODERATE && !empty($arComment))
					{
						if($arComment["PUBLISH_STATUS"] != BLOG_PUBLISH_STATUS_READY)
						{
							$this->arResult["ERROR_MESSAGE"] = GetMessage("B_B_PC_MES_ERROR_SHOW");
						}
						else
						{
							if(check_bitrix_sessid())
							{
								if($commentID = CBlogComment::Update($arComment["ID"], Array("PUBLISH_STATUS" => BLOG_PUBLISH_STATUS_PUBLISH)))
								{
									BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/first_page/");
									BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/comment/".$arComment["POST_ID"]."/");
									BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/post/".$arComment["POST_ID"]."/");
									BXClearCache(True, "/".SITE_ID."/blog/last_comments/");
									BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/rss_out/".$arComment["POST_ID"]."/C/");
									BXClearCache(True, "/".SITE_ID."/blog/last_messages/");
									BXClearCache(True, "/".SITE_ID."/blog/commented_posts/");
									BXClearCache(True, "/".SITE_ID."/blog/popular_posts/");
									
									if($this->arParams["AJAX_POST"] != "Y")
										LocalRedirect($APPLICATION->GetCurPageParam($this->arParams["COMMENT_ID_VAR"]."=".$arComment["ID"], Array("show_comment_id", "sessid", "success", $this->arParams["COMMENT_ID_VAR"], "hide_comment_id", "delete_comment_id")))."#".$arComment["ID"];
									else
										$this->arResult["ajax_comment"] = $arComment["ID"];
								}
							}
							else
								$this->arResult["ERROR_MESSAGE"] = GetMessage("B_B_PC_MES_ERROR_SESSION");
						}
					}
					if($this->arParams["AJAX_POST"]!= "Y" || ($this->arParams["AJAX_POST"] == "Y" && IntVal($this->arResult["ajax_comment"]) <= 0))
						$this->arResult["ERROR_MESSAGE"] = GetMessage("B_B_PC_MES_ERROR_SHOW");
				}
				elseif(IntVal($_GET["hide_comment_id"])>0)
				{
					$arComment = CBlogComment::GetByID(IntVal($_GET["hide_comment_id"]));
					if($this->arResult["Perm"]>=BLOG_PERMS_MODERATE && !empty($arComment))
					{
						if($arComment["PUBLISH_STATUS"] != BLOG_PUBLISH_STATUS_PUBLISH)
						{
							$this->arResult["ERROR_MESSAGE"] = GetMessage("B_B_PC_MES_ERROR_SHOW");
						}
						else
						{
							if(check_bitrix_sessid())
							{
								if($commentID = CBlogComment::Update($arComment["ID"], Array("PUBLISH_STATUS" => BLOG_PUBLISH_STATUS_READY)))
								{
									BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/first_page/");
									BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/comment/".$arComment["POST_ID"]."/");
									BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/post/".$arComment["POST_ID"]."/");
									BXClearCache(True, "/".SITE_ID."/blog/last_comments/");
									BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/rss_out/".$arComment["POST_ID"]."/C/");
									BXClearCache(True, "/".SITE_ID."/blog/last_messages/");
									BXClearCache(True, "/".SITE_ID."/blog/commented_posts/");
									BXClearCache(True, "/".SITE_ID."/blog/popular_posts/");
									
									if($this->arParams["AJAX_POST"] != "Y")
										LocalRedirect($APPLICATION->GetCurPageParam($this->arParams["COMMENT_ID_VAR"]."=".$arComment["ID"], Array("hide_comment_id", "sessid", "success", $this->arParams["COMMENT_ID_VAR"], "delete_comment_id", "show_comment_id")))."#".$arComment["ID"];
									else
										$this->arResult["ajax_comment"] = $arComment["ID"];
								}
							}
							else
								$this->arResult["ERROR_MESSAGE"] = GetMessage("B_B_PC_MES_ERROR_SESSION");
						}
					}
					if($this->arParams["AJAX_POST"]!= "Y" || ($this->arParams["AJAX_POST"] == "Y" && IntVal($this->arResult["ajax_comment"]) <= 0))
						$this->arResult["ERROR_MESSAGE"] = GetMessage("B_B_PC_MES_ERROR_HIDE");
				}
				elseif(IntVal($_GET["hidden_add_comment_id"])>0)
				{
					$this->arResult["MESSAGE"] = GetMessage("B_B_PC_MES_HIDDEN_ADDED");
				}
				
				//Comments output
				if($this->arResult["Perm"]>=BLOG_PERMS_READ)
				{
					$this->arResult["CanUserComment"] = false;
					$this->arResult["canModerate"] = false;
					if($this->arResult["Perm"] >= BLOG_PERMS_PREMODERATE)
						$this->arResult["CanUserComment"] = true;
					if($this->arResult["Perm"] >= BLOG_PERMS_MODERATE)
						$this->arResult["canModerate"] = true;
					
					if(IntVal($user_id)>0)
					{
						$this->arResult["BlogUser"] = CBlogUser::GetByID($user_id, BLOG_BY_USER_ID);
						$this->arResult["BlogUser"] = CBlogTools::htmlspecialcharsExArray($this->arResult["BlogUser"]);
						$dbUser = CUser::GetByID($user_id);
						$this->arResult["arUser"] = $dbUser->GetNext();
						$this->arResult["User"]["NAME"] = CBlogUser::GetUserNameEx($this->arResult["arUser"],$this->arResult["BlogUser"], $this->arParams);
						$this->arResult["User"]["ID"] = $user_id;

//						check is user consent was given ever
						$this->isUserGivenConsent();
					}
					
					if(!$USER->IsAuthorized())
					{
						$useCaptcha = COption::GetOptionString("blog", "captcha_choice", "U");
						if(empty($arBlog))
						{
							$arBlog = CBlog::GetByUrl($this->arParams["BLOG_URL"], $this->arParams["GROUP_ID"]);
							$arBlog = CBlogTools::htmlspecialcharsExArray($arBlog);
							$this->arResult["Blog"] = $arBlog;
						}
						if($useCaptcha == "U")
							$this->arResult["use_captcha"] = ($arBlog["ENABLE_IMG_VERIF"]=="Y")? true : false;
						elseif($useCaptcha == "A")
							$this->arResult["use_captcha"] = true;
						else
							$this->arResult["use_captcha"] = false;
					}
					else
					{
						$this->arResult["use_captcha"] = false;
					}
					
					/////////////////////////////////////////////////////////////////////////////////////
					
					if(strlen($arPost["ID"])>0 && $_SERVER["REQUEST_METHOD"]=="POST" && strlen($_POST["post"]) > 0 && strlen($_POST["preview"]) <= 0)
					{
//						convert charset
						if ($_POST["decode"] == "Y")
						{
							CUtil::JSPostUnescape();
						}
						
						if($this->arResult["Perm"] >= BLOG_PERMS_PREMODERATE)
						{
							if(check_bitrix_sessid())
							{
								$strErrorMessage = '';
								if(empty($this->arResult["Blog"]))
								{
									$arBlog = CBlog::GetByUrl($this->arParams["BLOG_URL"], $this->arParams["GROUP_ID"]);
									$arBlog = CBlogTools::htmlspecialcharsExArray($arBlog);
									$this->arResult["Blog"] = $arBlog;
								}
								
								if ($_POST["blog_upload_image"] == "Y")
								{
									if ($_FILES["BLOG_UPLOAD_FILE"]["size"] > 0)
									{
										$this->arResult["imageUploadFrame"] = "Y";
										$APPLICATION->RestartBuffer();
										header("Pragma: no-cache");
										
										$arFields = array(
											"MODULE_ID" => "blog",
											"BLOG_ID"	=> $arBlog["ID"],
											"POST_ID"	=> $arPost["ID"],
											"=TIMESTAMP_X"	=> $DB->GetNowFunction(),
											"TITLE"		=> "",
											"IMAGE_SIZE"	=> $_FILES["BLOG_UPLOAD_FILE"]["size"],
											"IS_COMMENT" => "Y",
											"URL" => $arBlog["URL"],
											"USER_ID" => IntVal($user_id),
										);
										$arFields["FILE_ID"] = array_merge(
											$_FILES["BLOG_UPLOAD_FILE"],
											array(
												"MODULE_ID" => "blog",
												"del" => "Y",
											)
										);
										
										if ($imgID = CBlogImage::Add($arFields))
										{
											$aImg = CBlogImage::GetByID($imgID);
											$aImg["PARAMS"] = CFile::_GetImgParams($aImg["FILE_ID"]);
											$this->arResult["Image"] = Array("ID" => $aImg["ID"], "SRC" => $aImg["PARAMS"]["SRC"], "WIDTH" => $aImg["PARAMS"]["WIDTH"], "HEIGHT" => $aImg["PARAMS"]["HEIGHT"]);
										}
										else
										{
											if ($ex = $APPLICATION->GetException())
												$this->arResult["ERROR_MESSAGE"] = $ex->GetString();
										}
										$this->IncludeComponentTemplate();
										return;
									}
								}
								
								if($_POST["act"] != "edit")
								{
									if ($this->arResult["use_captcha"])
									{
										include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
										$captcha_code = $_POST["captcha_code"];
										$captcha_word = $_POST["captcha_word"];
										$cpt = new CCaptcha();
										$captchaPass = COption::GetOptionString("main", "captcha_password", "");
										if (strlen($captcha_code) > 0)
										{
											if (!$cpt->CheckCodeCrypt($captcha_word, $captcha_code, $captchaPass))
												$strErrorMessage .= GetMessage("B_B_PC_CAPTCHA_ERROR")."<br />";
										}
										else
											$strErrorMessage .= GetMessage("B_B_PC_CAPTCHA_ERROR")."<br />";
									}
									
									$UserIP = CBlogUser::GetUserIP();
									$arFields = Array(
										"POST_ID" => $arPost["ID"],
										"BLOG_ID" => $arBlog["ID"],
										"TITLE" => trim($_POST["subject"]),
										"POST_TEXT" => trim($_POST["comment"]),
										"DATE_CREATE" => ConvertTimeStamp(time()+CTimeZone::GetOffset(), "FULL"),
										"AUTHOR_IP" => $UserIP[0],
										"AUTHOR_IP1" => $UserIP[1],
										"URL" => $arBlog["URL"],
									);
									if($this->arResult["Perm"] == BLOG_PERMS_PREMODERATE)
										$arFields["PUBLISH_STATUS"] = BLOG_PUBLISH_STATUS_READY;
									
									if(!$bUseTitle)
										unset($arFields["TITLE"]);
									
									if(IntVal($user_id)>0)
										$arFields["AUTHOR_ID"] = $user_id;
									else
									{
										$arFields["AUTHOR_NAME"] = trim($_POST["user_name"]);
										if(strlen(trim($_POST["user_email"]))>0)
											$arFields["AUTHOR_EMAIL"] = trim($_POST["user_email"]);
										if(strlen($arFields["AUTHOR_NAME"])<=0)
											$strErrorMessage .= GetMessage("B_B_PC_NO_ANAME")."<br />";
										$_SESSION["blog_user_name"] = $_POST["user_name"];
										$_SESSION["blog_user_email"] = $_POST["user_email"];
									}
									
									if(IntVal($_POST["parentId"])>0)
										$arFields["PARENT_ID"] = IntVal($_POST["parentId"]);
									else
										$arFields["PARENT_ID"] = false;
									if(strlen($_POST["comment"])<=0)
										$strErrorMessage .= GetMessage("B_B_PC_NO_COMMENT")."<br />";
									
									if(strlen($strErrorMessage)<=0)
									{
										$dbDuplComment = CBlogComment::GetList(array("ID" => "DESC"), array("BLOG_ID" => $arBlog["ID"], "POST_ID" => $arPost["ID"]), false, array("nTopCount" => 1), array("ID", "POST_ID", "BLOG_ID", "AUTHOR_ID", "POST_TEXT"));
										if($arDuplComment = $dbDuplComment->Fetch())
										{
											if($arDuplComment["POST_ID"] == $arFields["POST_ID"] && $arDuplComment["BLOG_ID"] == $arFields["BLOG_ID"] && IntVal($arDuplComment["AUTHOR_ID"]) == IntVal($arFields["AUTHOR_ID"]) && md5($arDuplComment["POST_TEXT"]) == md5($arFields["POST_TEXT"]))
											{
												$strErrorMessage .= GetMessage("B_B_PC_DUPLICATE_COMMENT");
											}
										}
									}
									
									if(strlen($strErrorMessage)<=0)
									{
										$fieldName = CBlogComment::UF_NAME;
										if (isset($GLOBALS[$fieldName]) && is_array($GLOBALS[$fieldName]))
										{
											$parseFilesResult = $this->parseFilesArray();
											$arAttachedFiles = $parseFilesResult['ATTACHED_FILES'];
											$imagesToAttach = $parseFilesResult['IMAGES_TO_ATTACH'];
											$toReplaceInText = $parseFilesResult['TO_REPLACE'];

//											update user fields by new files
											$GLOBALS[CBlogComment::UF_NAME] = $arAttachedFiles;
											
											if (!empty($toReplaceInText['SEARCH']) && !empty($toReplaceInText['REPLACE']))
												$arFields["POST_TEXT"] = str_replace($toReplaceInText['SEARCH'], $toReplaceInText['REPLACE'], $arFields["POST_TEXT"]);
										}
										
										if (count($this->arParams["COMMENT_PROPERTY"]) > 0)
											$GLOBALS["USER_FIELD_MANAGER"]->EditFormAddFields("BLOG_COMMENT", $arFields);
										
										$commentUrl = CComponentEngine::MakePathFromTemplate(htmlspecialcharsBack($this->arParams["PATH_TO_POST"]), array("blog" => $arBlog["URL"], "post_id"=> CBlogPost::GetPostID($arPost["ID"], $arPost["CODE"], $this->arParams["ALLOW_POST_CODE"]), "user_id" => $arBlog["OWNER_ID"], "group_id" => $this->arParams["SOCNET_GROUP_ID"]));
										
										$arFields["PATH"] = $commentUrl;
										if(strpos($arFields["PATH"], "?") !== false)
											$arFields["PATH"] .= "&";
										else
											$arFields["PATH"] .= "?";
										$arFields["PATH"] .= $this->arParams["COMMENT_ID_VAR"]."=#comment_id###comment_id#";
										
										if($commentID = CBlogComment::Add($arFields))
										{
//											attach images with COMMENT_ID = 0 to this post
											if (!empty($imagesToAttach))
											{
												foreach ($imagesToAttach as $imageId)
													CBlogImage::Update($imageId, array(
														"POST_ID" => $arPost["ID"],
														"BLOG_ID" => $arBlog["ID"],
														"COMMENT_ID" => IntVal($commentID)
													));
											}
											
											BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/comment/".$arPost["ID"]."/");
											BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/post/".$arPost["ID"]."/");
											BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/first_page/");
											BXClearCache(True, "/".SITE_ID."/blog/last_comments/");
											BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/rss_out/".$arPost["POST_ID"]."/C/");
											BXClearCache(True, "/".SITE_ID."/blog/last_messages/");
											BXClearCache(True, "/".SITE_ID."/blog/commented_posts/");
											BXClearCache(True, "/".SITE_ID."/blog/popular_posts/");
											
											$images = Array();
											$res = CBlogImage::GetList(array("ID"=>"ASC"), array("POST_ID"=>$arPost["ID"], "BLOG_ID"=>$arBlog["ID"], "IS_COMMENT" => "Y", "COMMENT_ID" => $commentID));
											while($aImg = $res->Fetch())
												$images[$aImg["ID"]] = $aImg["FILE_ID"];
											
											$AuthorName = "";
											if(IntVal($user_id)>0)
												$AuthorName = CBlogUser::GetUserNameEx($this->arResult["arUser"],$this->arResult["BlogUser"], $this->arParams);
											
											$parserBlog = new blogTextParser(false, $this->arParams["PATH_TO_SMILE"]);
											$arParserParams = Array(
												"imageWidth" => $this->arParams["IMAGE_MAX_WIDTH"],
												"imageHeight" => $this->arParams["IMAGE_MAX_HEIGHT"],
											);
											
											$text4mail = $parserBlog->convert4mail($_POST['comment'], $images);
											$serverName = ((defined("SITE_SERVER_NAME") && strlen(SITE_SERVER_NAME) > 0) ? SITE_SERVER_NAME : COption::GetOptionString("main", "server_name", ""));
											if (strlen($serverName) <=0)
												$serverName = $_SERVER["SERVER_NAME"];
											
											if(strpos($commentUrl, "?") !== false)
												$commentUrl .= "&";
											else
												$commentUrl .= "?";
											if(strlen($arFields["PUBLISH_STATUS"]) > 0 && $arFields["PUBLISH_STATUS"] != BLOG_PUBLISH_STATUS_PUBLISH)
												$commentAddedUrl = $commentUrl.$this->arParams["COMMENT_ID_VAR"]."=".$commentID."&hidden_add_comment_id=".$commentID;
											$commentUrl .= $this->arParams["COMMENT_ID_VAR"]."=".$commentID."#".$commentID;
											
											if (!preg_match("/^[a-z]+:\\/\\//", $commentUrl))
												$commentUrl = ((CMain::IsHTTPS()) ? 'https://' : 'http://').$serverName.$commentUrl;
											
											if(strlen($AuthorName)<=0)
												$AuthorName = $arFields["AUTHOR_NAME"];
											
											$arMailFields = array(
												"BLOG_ID"	=> $arBlog['ID'],
												"BLOG_NAME"	=> $arBlog['~NAME'],
												"BLOG_URL"	=> $arBlog['~URL'],
												"MESSAGE_TITLE" => $arPost['~TITLE'],
												"COMMENT_TITLE" => $_POST['subject'],
												"COMMENT_TEXT" => $text4mail,
												"COMMENT_DATE" => ConvertTimeStamp(false, "FULL"),
												"COMMENT_PATH" => $commentUrl,
												"AUTHOR"	 => $AuthorName,
												"EMAIL_FROM"	 => COption::GetOptionString("main","email_from", "nobody@nobody.com"),
											);
											if(!$bUseTitle)
												unset($arMailFields["COMMENT_TITLE"]);
											
											if ($arBlog['EMAIL_NOTIFY']=='Y' && $user_id != $arPost['AUTHOR_ID']) // comment author is not original post author
											{
												$res = CUser::GetByID($arPost['AUTHOR_ID']);
												if($arOwner = $res->GetNext())
												{
													$arMailFields["EMAIL_TO"] = $arOwner['EMAIL'];
													
													CEvent::Send(
														($bUseTitle) ? "NEW_BLOG_COMMENT" : "NEW_BLOG_COMMENT_WITHOUT_TITLE",
														SITE_ID,
														$arMailFields
													);
												}
												
												if($arPost["AUTHOR_ID"] != $arBlog["OWNER_ID"] && IntVal($arBlog["OWNER_ID"]) > 0)
												{
													$res = CUser::GetByID($arBlog["OWNER_ID"]);
													if($arOwnerBlog = $res->GetNext())
													{
														$arMailFields["EMAIL_TO"] = $arOwnerBlog['EMAIL'];
														
														CEvent::Send(
															($bUseTitle) ? "NEW_BLOG_COMMENT" : "NEW_BLOG_COMMENT_WITHOUT_TITLE",
															SITE_ID,
															$arMailFields
														);
													}
												}
											}
											
											if($arFields["PUBLISH_STATUS"] == BLOG_PUBLISH_STATUS_PUBLISH || strlen($arFields["PUBLISH_STATUS"]) <= 0)
											{
												if($arFields["PARENT_ID"] > 0) // In case the is an comment before - we'll notice author
												{
													$arPrev = CBlogComment::GetByID($arFields["PARENT_ID"]);
													$arPrev = CBlogTools::htmlspecialcharsExArray($arPrev);
													if ($user_id != $arPrev['AUTHOR_ID'])
													{
														$email = '';
														
														$res = CUser::GetByID($arPrev['AUTHOR_ID']);
														if ($arOwner = $res->GetNext())
														{
															$arPrevBlog = CBlog::GetByOwnerID($arPrev['AUTHOR_ID'], $this->arParams["GROUP_ID"]);
															if ($arPrevBlog['EMAIL_NOTIFY']!='N')
																$email = $arOwner['EMAIL'];
														}
														elseif($arPrev['AUTHOR_EMAIL'])
															$email = $arPrev['AUTHOR_EMAIL'];
														
														if ($email && $email != $arMailFields["EMAIL_TO"] && $email != $arOwnerBlog['EMAIL'])
														{
															$arMailFields["EMAIL_TO"] = $email;
															$text4mail1 = $parserBlog->convert4mail($arPrev["~POST_TEXT"], $images);
															$arMailFields["PARENT_COMMENT_TEXT"] = $text4mail1;
															$arMailFields["PARENT_COMMENT_TITLE"] = $arPrev["~TITLE"];
															$arMailFields["PARENT_COMMENT_DATE"] = $arPrev["DATE_CREATE"];
															
															CEvent::Send(
																($bUseTitle) ? "NEW_BLOG_COMMENT2COMMENT" : "NEW_BLOG_COMMENT2COMMENT_WITHOUT_TITLE",
																SITE_ID,
																$arMailFields
															);
														}
													}
												}
											}
											
											if($this->arParams["AJAX_POST"] != "Y")
											{
												if(strlen($arFields["PUBLISH_STATUS"]) > 0 && $arFields["PUBLISH_STATUS"] != BLOG_PUBLISH_STATUS_PUBLISH)
													LocalRedirect($commentAddedUrl);
												else
													LocalRedirect($commentUrl);
											}
											else
											{
												if(strlen($arFields["PUBLISH_STATUS"]) > 0 && $arFields["PUBLISH_STATUS"] != BLOG_PUBLISH_STATUS_PUBLISH)
													$this->arResult["MESSAGE"] = GetMessage("B_B_PC_MES_HIDDEN_ADDED");
												$this->arResult["ajax_comment"] = $commentID;
											}
										}
										else
										{
											if ($e = $APPLICATION->GetException())
												$this->arResult["COMMENT_ERROR"] = "<b>".GetMessage("B_B_PC_COM_ERROR")."</b><br />".$e->GetString();
										}
									}
									else
									{
										if ($e = $APPLICATION->GetException())
											$this->arResult["COMMENT_ERROR"] = "<b>".GetMessage("B_B_PC_COM_ERROR")."</b><br />".$e->GetString();
										if(strlen($strErrorMessage)>0)
											$this->arResult["COMMENT_ERROR"] = "<b>".GetMessage("B_B_PC_COM_ERROR")."</b><br />".$strErrorMessage;
									}
								}
								else //update comment
								{
									$commentID = IntVal($_POST["edit_id"]);
									$arOldComment = CBlogComment::GetByID($commentID);
									if($commentID <= 0 || empty($arOldComment))
										$this->arResult["COMMENT_ERROR"] = "<b>".GetMessage("B_B_PC_COM_ERROR_EDIT")."</b><br />".GetMessage("B_B_PC_COM_ERROR_LOST");
									elseif($arOldComment["AUTHOR_ID"] == $user_id || $this->arParams["BLOG_MODULE_PERMS"] >= "W")
									{
										$arFields = Array(
											"TITLE" => $_POST["subject"],
											"POST_TEXT" => $_POST["comment"],
											"URL" => $arBlog["URL"],
										);
										if(!$bUseTitle)
											unset($arFields["TITLE"]);
										if($this->arResult["Perm"] == BLOG_PERMS_PREMODERATE)
											$arFields["PUBLISH_STATUS"] = BLOG_PUBLISH_STATUS_READY;
										
//										PARSE FILES: compare uploaded files, existing files and session
//										find images then need to attach to post, find not-imaged files
										$fieldName = CBlogComment::UF_NAME;
										if (isset($GLOBALS[$fieldName]) && is_array($GLOBALS[$fieldName]))
										{
											$parseFilesResult = $this->parseFilesArray();
											$arAttachedFiles = $parseFilesResult['ATTACHED_FILES'];
											$imagesToAttach = $parseFilesResult['IMAGES_TO_ATTACH'];
											$toReplaceInText = $parseFilesResult['TO_REPLACE'];
											
//											update user fields by new files
											$GLOBALS[CBlogComment::UF_NAME] = $arAttachedFiles;
											
											if (!empty($toReplaceInText['SEARCH']) && !empty($toReplaceInText['REPLACE']))
												$arFields["POST_TEXT"] = str_replace($toReplaceInText['SEARCH'], $toReplaceInText['REPLACE'], $arFields["POST_TEXT"]);
											
										}
										if (count($this->arParams["COMMENT_PROPERTY"]) > 0)
											$GLOBALS["USER_FIELD_MANAGER"]->EditFormAddFields("BLOG_COMMENT", $arFields);
										
										$commentUrl = CComponentEngine::MakePathFromTemplate(htmlspecialcharsBack($this->arParams["PATH_TO_POST"]), array("blog" => $arBlog["URL"], "post_id"=> CBlogPost::GetPostID($arPost["ID"], $arPost["CODE"], $this->arParams["ALLOW_POST_CODE"]), "user_id" => $arBlog["OWNER_ID"], "group_id" => $this->arParams["SOCNET_GROUP_ID"]));
										
										$arFields["PATH"] = $commentUrl;
										if(strpos($arFields["PATH"], "?") !== false)
											$arFields["PATH"] .= "&";
										else
											$arFields["PATH"] .= "?";
										$arFields["PATH"] .= $this->arParams["COMMENT_ID_VAR"]."=".$commentID."#".$commentID;
										
										$dbComment = CBlogComment::GetList(array(), Array("POST_ID" => $arPost["ID"], "BLOG_ID" => $arBlog["ID"], "PARENT_ID" => $commentID));
										if($dbComment->Fetch() && $this->arParams["BLOG_MODULE_PERMS"] < "W")
										{
											$this->arResult["COMMENT_ERROR"] = "<b>".GetMessage("B_B_PC_COM_ERROR_EDIT")."</b><br />".GetMessage("B_B_PC_EDIT_ALREADY_COMMENTED");
										}
										else
										{
											if($commentID = CBlogComment::Update($commentID, $arFields))
											{
//												attach images with COMMENT_ID = 0 to this post
												if (!empty($imagesToAttach))
												{
													foreach ($imagesToAttach as $imageId)
														CBlogImage::Update($imageId, array(
															"POST_ID" => $arPost["ID"],
															"BLOG_ID" => $arBlog["ID"],
															"COMMENT_ID" => IntVal($commentID)
														));
												}
												
												BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/comment/".$arPost["ID"]."/");
												BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/post/".$arPost["ID"]."/");
												BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/first_page/");
												BXClearCache(True, "/".SITE_ID."/blog/last_comments/");
												BXClearCache(True, "/".SITE_ID."/blog/".$arBlog["URL"]."/rss_out/".$arPost["POST_ID"]."/C/");
												BXClearCache(True, "/".SITE_ID."/blog/last_messages/");
												BXClearCache(True, "/".SITE_ID."/blog/commented_posts/");
												BXClearCache(True, "/".SITE_ID."/blog/popular_posts/");
												
												$images = Array();
												
												$res = CBlogImage::GetList(array(), array("POST_ID"=>$arPost["ID"], "BLOG_ID" => $arBlog["ID"], "COMMENT_ID" => $commentID, "IS_COMMENT" => "Y"));
												while($aImg = $res->Fetch())
													$images[$aImg["ID"]] = $aImg["FILE_ID"];
												
												$commentUrl = CComponentEngine::MakePathFromTemplate(htmlspecialcharsBack($this->arParams["PATH_TO_POST"]), array("blog" => $arBlog["URL"], "post_id" => CBlogPost::GetPostID($arPost["ID"], $arPost["CODE"], $this->arParams["ALLOW_POST_CODE"]), "user_id" => $arBlog["OWNER_ID"], "group_id" => $this->arParams["SOCNET_GROUP_ID"]));
												if(strpos($commentUrl, "?") !== false)
													$commentUrl .= "&";
												else
													$commentUrl .= "?";
												
												if($this->arParams["AJAX_POST"] != "Y")
												{
													if(strlen($arFields["PUBLISH_STATUS"]) > 0 && $arFields["PUBLISH_STATUS"] != BLOG_PUBLISH_STATUS_PUBLISH)
													{
														$commentAddedUrl = $commentUrl.$this->arParams["COMMENT_ID_VAR"]."=".$commentID."&hidden_add_comment_id=".$commentID;
														LocalRedirect($commentAddedUrl);
													}
													else
													{
														$commentUrl .= $this->arParams["COMMENT_ID_VAR"]."=".$commentID."#".$commentID;
														LocalRedirect($commentUrl);
													}
												}
												else
												{
													if(strlen($arFields["PUBLISH_STATUS"]) > 0 && $arFields["PUBLISH_STATUS"] != BLOG_PUBLISH_STATUS_PUBLISH)
														$this->arResult["MESSAGE"] = GetMessage("B_B_PC_MES_HIDDEN_EDITED");
													$this->arResult["ajax_comment"] = $commentID;
												}
												
											}
											else
											{
												if ($e = $APPLICATION->GetException())
													$this->arResult["COMMENT_ERROR"] = "<b>".GetMessage("B_B_PC_COM_ERROR_EDIT")."</b><br />".$e->GetString();
											}
										}
									}
									else
									{
										$this->arResult["COMMENT_ERROR"] = "<b>".GetMessage("B_B_PC_COM_ERROR_EDIT")."</b><br />".GetMessage("B_B_PC_NO_RIGHTS_EDIT");
									}
								}
							}
							else
								$this->arResult["COMMENT_ERROR"] = GetMessage("B_B_PC_MES_ERROR_SESSION");
						}
						else
							$this->arResult["COMMENT_ERROR"] = GetMessage("B_B_PC_NO_RIGHTS");
					}
					elseif(strlen($_POST["preview"]) > 0)
					{
						if(check_bitrix_sessid())
						{
							$p = new blogTextParser(false, $this->arParams["PATH_TO_SMILE"]);
							$arParserParams = Array(
								"imageWidth" => $this->arParams["IMAGE_MAX_WIDTH"],
								"imageHeight" => $this->arParams["IMAGE_MAX_HEIGHT"],
							);
							$arAllow = array("HTML" => "N", "ANCHOR" => "Y", "BIU" => "Y", "IMG" => "Y", "QUOTE" => "Y", "CODE" => "Y", "FONT" => "Y", "LIST" => "Y", "SMILES" => "Y", "NL2BR" => "N", "VIDEO" => "Y", "USER_LINK" => "N");
							if(COption::GetOptionString("blog","allow_video", "Y") != "Y" || $this->arParams["ALLOW_VIDEO"] != "Y")
								$arAllow["VIDEO"] = "N";
							
							if($this->arParams["NO_URL_IN_COMMENTS_AUTHORITY_CHECK"] == "Y" && !$this->arResult["NoCommentUrl"] && $USER->IsAuthorized())
							{
								$authorityRatingId = CRatings::GetAuthorityRating();
								$arRatingResult = CRatings::GetRatingResult($authorityRatingId, $user_id);
								if($arRatingResult["CURRENT_VALUE"] < $this->arParams["NO_URL_IN_COMMENTS_AUTHORITY"])
									$this->arResult["NoCommentUrl"] = true;
							}
							
							if($this->arResult["NoCommentUrl"])
								$arAllow["CUT_ANCHOR"] = "Y";
							
							$images = Array();
							preg_match_all("/\[img([^\]]*)id\s*=\s*([0-9]+)([^\]]*)\]/ies".BX_UTF_PCRE_MODIFIER, $_POST["comment"], $matches);
							$res = CBlogImage::GetList(array(), array("POST_ID"=>$arPost["ID"], "BLOG_ID" => $arBlog["ID"], "USER_ID" => IntVal($user_id), "IS_COMMENT" => "Y"));
							while($aImg = $res->Fetch())
							{
								if(in_array($aImg["ID"], $matches[2]))
								{
									$images[$aImg["ID"]] = $aImg["FILE_ID"];
								}
							}
							
							$_POST["commentFormated"] = $p->convert($_POST["comment"], false, $images, $arAllow, $arParserParams);
						}
						else
							$_POST["show_preview"] = "N";
					}
					
					/////////////////////////////////////////////////////////////////////////////////////
					if($USER->IsAdmin())
						$this->arResult["ShowIP"] = "Y";
					else
						$this->arResult["ShowIP"] = COption::GetOptionString("blog", "show_ip", "Y");
					
					$cache = new CPHPCache;
					$cache_id = "blog_comment_".serialize($this->arParams)."_".$this->arResult["Perm"]."_".$USER->IsAuthorized();
					if(($tzOffset = CTimeZone::GetOffset()) <> 0)
						$cache_id .= "_".$tzOffset;
					$cache_path = "/".SITE_ID."/blog/".$arBlog["URL"]."/comment/".$this->arParams["ID"]."/";
					
					$tmp = Array();
					$tmp["MESSAGE"] = $this->arResult["MESSAGE"];
					$tmp["ERROR_MESSAGE"] = $this->arResult["ERROR_MESSAGE"];
					if((strlen($this->arResult["COMMENT_ERROR"]) > 0 || strlen($this->arResult["ERROR_MESSAGE"]) > 0) && $this->arParams["AJAX_POST"] == "Y")
					{
						$this->arResult["is_ajax_post"] = "Y";
					}
					else
					{
						if($this->arParams["AJAX_POST"] == "Y" && IntVal($this->arResult["ajax_comment"]) > 0)
						{
							$this->arResult["is_ajax_post"] = "Y";
							$cache_id .= $this->arResult["ajax_comment"];
							$this->arParams["CACHE_TIME"] = 0;
						}
						
						if ($this->arParams["CACHE_TIME"] > 0 && $cache->InitCache($this->arParams["CACHE_TIME"], $cache_id, $cache_path))
						{
							$Vars = $cache->GetVars();
							foreach($Vars["arResult"] as $k=>$v)
							{
								if(!array_key_exists($k, $this->arResult))
									$this->arResult[$k] = $v;
							}
							CBitrixComponentTemplate::ApplyCachedData($Vars["templateCachedData"]);
							$cache->Output();
						}
						else
						{
							
							if ($this->arParams["CACHE_TIME"] > 0)
								$cache->StartDataCache($this->arParams["CACHE_TIME"], $cache_id, $cache_path);
							
							$this->arResult["Comments"] = array();
							$this->arResult["CommentsResult"] = Array();
							$this->arResult["IDS"] = Array();

							$this->arResult["Smiles"] = CBlogSmile::getSmiles(CSmile::TYPE_SMILE, LANGUAGE_ID);
							foreach($this->arResult["Smiles"] as $key => $value)
							{
								$this->arResult["Smiles"][$key]["LANG_NAME"] = $value["NAME"];
								$this->arResult["Smiles"][$key]["~LANG_NAME"] = htmlspecialcharsback($value["NAME"]);
								list($type) = explode(" ", $value["TYPING"]);
								$this->arResult["Smiles"][$key]["TYPE"] = str_replace("'", "\'", $type);
								$this->arResult["Smiles"][$key]["TYPE"] = str_replace("\\", "\\\\", $this->arResult["Smiles"][$key]["TYPE"]);
							}
							$this->arResult["SmilesCount"] = count($this->arResult["Smiles"]);

							if(IntVal($this->arParams["ID"]) > 0)
							{
								$arOrder = Array("DATE_CREATE" => "ASC", "ID" => "ASC");
								$arFilter = Array("POST_ID" => $this->arParams["ID"], "BLOG_ID" => $arBlog["ID"]);
								if($this->arResult["is_ajax_post"] == "Y" && IntVal($this->arResult["ajax_comment"]) > 0)
								{
									$arFilter["ID"] = $this->arResult["ajax_comment"];
								}
								
								$res = CBlogImage::GetList(array("ID"=>"ASC"),array("POST_ID"=>$arPost['ID'], "BLOG_ID"=>$arBlog['ID'], "IS_COMMENT" => "Y"), false, false, Array("ID", "FILE_ID", "POST_ID", "BLOG_ID", "USER_ID", "TITLE", "COMMENT_ID", "IS_COMMENT"));
								while ($arImage = $res->Fetch())
								{
									$arImages[$arImage['ID']] = $arImage['FILE_ID'];
									$currImage = array(
										"small" => "/bitrix/components/bitrix/blog/show_file.php?fid=".$arImage['ID']."&width=70&height=70&type=square",
										"full" => "/bitrix/components/bitrix/blog/show_file.php?fid=".$arImage['ID']."&width=1000&height=1000"
									);
									$currImage = array_merge(CFile::GetfileArray($arImage['FILE_ID']), $currImage);
									$this->arResult["arImages"][$arImage["COMMENT_ID"]][$arImage['ID']] = $currImage;
								}
								
								$arSelectedFields = Array("ID", "BLOG_ID", "POST_ID", "PARENT_ID", "AUTHOR_ID", "AUTHOR_NAME", "AUTHOR_EMAIL", "AUTHOR_IP", "AUTHOR_IP1", "TITLE", "POST_TEXT", "DATE_CREATE", "PUBLISH_STATUS");
								$dbComment = CBlogComment::GetList($arOrder, $arFilter, false, false, $arSelectedFields);
								$resComments = Array();
								
								$this->arResult["firstLevel"] = "";
								
								$blogUser = new Bitrix\Blog\BlogUser($this->arParams["CACHE_TIME"]);
								$blogUser->setBlogId($arBlog["ID"]);
								$commentsUsers = $blogUser->getUsers(\Bitrix\Blog\BlogUser::getCommentAuthorsIdsByPostId($arPost['ID']));
								
								if($arComment = $dbComment->GetNext())
								{
									$p = new blogTextParser(false, $this->arParams["PATH_TO_SMILE"]);
									$arParserParams = Array(
										"imageWidth" => $this->arParams["IMAGE_MAX_WIDTH"],
										"imageHeight" => $this->arParams["IMAGE_MAX_HEIGHT"],
									);
									
									do
									{
										$this->arResult["Comments"][$arComment["ID"]] = Array(
											"ID" => $arComment["ID"],
											"PARENT_ID" => $arComment["PARENT_ID"],
											"PUBLISH_STATUS" => $arComment["PUBLISH_STATUS"],
										);
										$arComment["ShowIP"] = $this->arResult["ShowIP"];
										if(empty($resComments[IntVal($arComment["PARENT_ID"])]))
										{
											$resComments[IntVal($arComment["PARENT_ID"])] = Array();
											if(strlen($this->arResult["firstLevel"])<=0)
											{
												$this->arResult["firstLevel"] = IntVal($arComment["PARENT_ID"]);
											}
										}
										
										if(IntVal($arComment["AUTHOR_ID"])>0)
										{
//
											if(empty($this->arResult["USER_CACHE"][$arComment["AUTHOR_ID"]]))
											{
												$arUsrTmp = array();
												$arUsrTmp["urlToAuthor"] = CComponentEngine::MakePathFromTemplate($this->arParams["PATH_TO_USER"], array("user_id" => $arComment["AUTHOR_ID"]));
												$arUsrTmp["AuthorName"] = Bitrix\Blog\BlogUser::GetUserNameEx(
													$commentsUsers[$arComment["AUTHOR_ID"]]["arUser"],
													$commentsUsers[$arComment["AUTHOR_ID"]]["BlogUser"],
													$this->arParams
												);
												$arUsrTmp["Blog"] = CBlog::GetByOwnerID(IntVal($arComment["AUTHOR_ID"]), $this->arParams["GROUP_ID"]);
												if($this->arResult["userID"] == $arComment["AUTHOR_ID"])
													$arUsrTmp["AuthorIsPostAuthor"] = "Y";
//
												$this->arResult["USER_CACHE"][$arComment["AUTHOR_ID"]] = $arUsrTmp;
											}
											
											$arComment["BlogUser"] = $commentsUsers[$arComment["AUTHOR_ID"]]["BlogUser"];
											$arComment["arUser"] = $commentsUsers[$arComment["AUTHOR_ID"]]["arUser"];
											$arComment["AuthorName"] = HtmlFilter::encode($commentsUsers[$arComment["AUTHOR_ID"]]["AUTHOR_NAME"]);
											$arComment["AVATAR_file"] = $commentsUsers[$arComment["AUTHOR_ID"]]["BlogUser"]["AVATAR_file"];
											if ($arComment["AVATAR_file"] !== false)
												$arComment["AVATAR_img"] = $commentsUsers[$arComment["AUTHOR_ID"]]["BlogUser"]["AVATAR_img"]['30_30'];
//									from user cache
											$arComment["Blog"] = $this->arResult["USER_CACHE"][$arComment["AUTHOR_ID"]]["Blog"];
											$arComment["urlToAuthor"] = $this->arResult["USER_CACHE"][$arComment["AUTHOR_ID"]]["urlToAuthor"];
											$arComment["AuthorIsPostAuthor"] = $this->arResult["USER_CACHE"][$arComment["AUTHOR_ID"]]["AuthorIsPostAuthor"];
											
											if(!empty($arComment["Blog"]))
											{
												$arComment["urlToBlog"] = CComponentEngine::MakePathFromTemplate($this->arParams["PATH_TO_BLOG"], array("blog" => $arComment["Blog"]["URL"], "user_id" => $arComment["Blog"]["OWNER_ID"], "group_id" => $this->arParams["SOCNET_GROUP_ID"]));
											}
										}
										else
										{
											$arComment["AuthorName"]  = $arComment["AUTHOR_NAME"];
											$arComment["AuthorEmail"]  = $arComment["AUTHOR_EMAIL"];
										}
										
										if($this->arResult["canModerate"])
										{
											if($arComment["PUBLISH_STATUS"] == BLOG_PUBLISH_STATUS_PUBLISH)
											{
												$arComment["urlToHide"] = htmlspecialcharsbx($APPLICATION->GetCurPageParam("hide_comment_id=".$arComment["ID"], Array("sessid", "delete_comment_id", "hide_comment_id", "success", "show_comment_id", "commentId")));
											}
											else
											{
												$arComment["urlToShow"] = htmlspecialcharsbx($APPLICATION->GetCurPageParam("show_comment_id=".$arComment["ID"], Array("sessid", "delete_comment_id", "show_comment_id", "success", "hide_comment_id", "commentId")));
											}
											if($this->arResult["Perm"]>=BLOG_PERMS_FULL)
											{
												$arComment["urlToDelete"] = htmlspecialcharsbx($APPLICATION->GetCurPageParam("delete_comment_id=".$arComment["ID"], Array("sessid", "delete_comment_id", "success", "hide_comment_id", "show_comment_id", "commentId")));
											}
											if($this->arParams["SHOW_SPAM"] == "Y")
											{
												if(IntVal($arComment["AUTHOR_ID"]) > 0)
													$arComment["urlToSpam"] = "/bitrix/admin/blog_comment.php?lang=ru&set_filter=Y&filter_author_id=".$arComment["AUTHOR_ID"];
												elseif(strlen($arComment["AUTHOR_IP"]) > 0)
													$arComment["urlToSpam"] = "/bitrix/admin/blog_comment.php?lang=ru&set_filter=Y&filter_author_anonym=Y&filter_author_ip=".$arComment["AUTHOR_IP"];
												else
													$arComment["urlToSpam"] = "/bitrix/admin/blog_comment.php?lang=ru&set_filter=Y&filter_author_anonym=Y&filter_author_email=".$arComment["AUTHOR_EMAIL"];
											}
										}
										
										$arAllow = array("HTML" => "N", "ANCHOR" => "Y", "BIU" => "Y", "IMG" => "Y", "QUOTE" => "Y", "CODE" => "Y", "FONT" => "Y", "LIST" => "Y", "SMILES" => "Y", "NL2BR" => "N", "VIDEO" => "Y", "USER_LINK" => "N");
										if(COption::GetOptionString("blog","allow_video", "Y") != "Y" || $this->arParams["ALLOW_VIDEO"] != "Y")
											$arAllow["VIDEO"] = "N";
										
										if($this->arParams["NO_URL_IN_COMMENTS"] == "L" || (IntVal($arComment["AUTHOR_ID"]) <= 0  && $this->arParams["NO_URL_IN_COMMENTS"] == "A"))
											$arAllow["CUT_ANCHOR"] = "Y";
										
										if($this->arParams["NO_URL_IN_COMMENTS_AUTHORITY_CHECK"] == "Y" && $arAllow["CUT_ANCHOR"] != "Y" && IntVal($arComment["AUTHOR_ID"]) > 0)
										{
											$authorityRatingId = CRatings::GetAuthorityRating();
											$arRatingResult = CRatings::GetRatingResult($authorityRatingId, $arComment["AUTHOR_ID"]);
											if($arRatingResult["CURRENT_VALUE"] < $this->arParams["NO_URL_IN_COMMENTS_AUTHORITY"])
												$arAllow["CUT_ANCHOR"] = "Y";
										}
										
										$arComment["TextFormated"] = $p->convert($arComment["~POST_TEXT"], false, $arImages, $arAllow, $arParserParams);
										
										$arComment["DateFormated"] = FormatDate($this->arParams["DATE_TIME_FORMAT"], MakeTimeStamp($arComment["DATE_CREATE"], CSite::GetDateFormat("FULL")));
										
//										not show images, than put in comment text
										if(!empty($p->showedImages))
										{
											foreach($p->showedImages as $val)
											{
												if(!empty($this->arResult["arImages"][$arComment["ID"]][$val]))
													unset($this->arResult["arImages"][$arComment["ID"]][$val]);
											}
										}
										
										$this->arResult["COMMENT_PROPERTIES"] = array("SHOW" => "N");
										
										if (!empty($this->arParams["COMMENT_PROPERTY"]))
										{
											$arPostFields = $GLOBALS["USER_FIELD_MANAGER"]->GetUserFields("BLOG_COMMENT", $arComment["ID"], LANGUAGE_ID);
											
											if (count($arPostFields) > 0)
											{
												foreach ($arPostFields as $FIELD_NAME => $arPostField)
												{
													if (!in_array($FIELD_NAME, $this->arParams["COMMENT_PROPERTY"]))
														continue;
													$arPostField["EDIT_FORM_LABEL"] = strLen($arPostField["EDIT_FORM_LABEL"]) > 0 ? $arPostField["EDIT_FORM_LABEL"] : $arPostField["FIELD_NAME"];
													$arPostField["EDIT_FORM_LABEL"] = htmlspecialcharsEx($arPostField["EDIT_FORM_LABEL"]);
													$arPostField["~EDIT_FORM_LABEL"] = $arPostField["EDIT_FORM_LABEL"];
													$arComment["COMMENT_PROPERTIES"]["DATA"][$FIELD_NAME] = $arPostField;
												}
											}
											if (!empty($arComment["COMMENT_PROPERTIES"]["DATA"]))
												$arComment["COMMENT_PROPERTIES"]["SHOW"] = "Y";
										}
										
										if($bUseTitle)
										{
											
											if(strlen($arComment["TITLE"])>0)
												$arComment["TitleFormated"] = $p->convert($arComment["TITLE"], false);
											if(strpos($arComment["TITLE"], "RE")===false)
												$subj = "RE: ".$arComment["TITLE"];
											else
											{
												if(strpos($arComment["TITLE"], "RE")==0)
												{
													if(strpos($arComment["TITLE"], "RE:")!==false)
													{
														$count = substr_count($arComment["TITLE"], "RE:");
														$subj = substr($arComment["TITLE"], (strrpos($arComment["TITLE"], "RE:")+4));
													}
													else
													{
														if(strpos($arComment["TITLE"], "[")==2)
														{
															$count = substr($arComment["TITLE"], 3, (strpos($arComment["TITLE"], "]: ")-3));
															$subj = substr($arComment["TITLE"], (strrpos($arComment["TITLE"], "]: ")+3));
														}
													}
													$subj = "RE[".($count+1)."]: ".$subj;
												}
												else
													$subj = "RE: ".$arComment["TITLE"];
											}
											$arComment["CommentTitle"] = str_replace(array("\\", "\"", "'"), array("\\\\", "\\"."\"", "\\'"), $subj);
										}
										$resComments[IntVal($arComment["PARENT_ID"])][] = $arComment;
										$this->arResult["IDS"][] = $arComment["ID"];
									}
									while($arComment = $dbComment->GetNext());
									$this->arResult["CommentsResult"] = $resComments;
								}
								if (!empty($this->arParams["COMMENT_PROPERTY"]))
								{
									$arPostFields = $GLOBALS["USER_FIELD_MANAGER"]->GetUserFields("BLOG_COMMENT", 0, LANGUAGE_ID);
									
									if (count($this->arParams["COMMENT_PROPERTY"]) > 0)
									{
										foreach ($arPostFields as $FIELD_NAME => $arPostField)
										{
											if (!in_array($FIELD_NAME, $this->arParams["COMMENT_PROPERTY"]))
												continue;
											$arPostField["EDIT_FORM_LABEL"] = strLen($arPostField["EDIT_FORM_LABEL"]) > 0 ? $arPostField["EDIT_FORM_LABEL"] : $arPostField["FIELD_NAME"];
											$arPostField["EDIT_FORM_LABEL"] = htmlspecialcharsEx($arPostField["EDIT_FORM_LABEL"]);
											$arPostField["~EDIT_FORM_LABEL"] = $arPostField["EDIT_FORM_LABEL"];
											$this->arResult["COMMENT_PROPERTIES"]["DATA"][$FIELD_NAME] = $arPostField;
										}
									}
									if (!empty($this->arResult["COMMENT_PROPERTIES"]["DATA"]))
										$this->arResult["COMMENT_PROPERTIES"]["SHOW"] = "Y";
								}
							}
							unset($this->arResult["MESSAGE"]);
							unset($this->arResult["ERROR_MESSAGE"]);
							
							if($this->arResult["allowImageUpload"])
							{
								$this->arResult["Images"] = Array();
								$res = CBlogImage::GetList(array("ID"=>"ASC"), Array("BLOG_ID" => $arBlog["ID"], "POST_ID" => $arPost["ID"], "IS_COMMENT" => "Y"));
								while($aImg = $res->GetNext())
								{
									$aImg["SRC"] = CFile::GetPath($aImg["FILE_ID"]);
									$this->arResult["Images"][] = $aImg;
								}
							}
							
							if ($this->arParams["CACHE_TIME"] > 0)
								$cache->EndDataCache(array("templateCachedData" => $this->GetTemplateCachedData(), "arResult" => $this->arResult));
						}
						$this->arResult["MESSAGE"] = $tmp["MESSAGE"];
						$this->arResult["ERROR_MESSAGE"] = $tmp["ERROR_MESSAGE"];
					}
					
					if($this->arResult["use_captcha"])
					{
						include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
						$cpt = new CCaptcha();
						$captchaPass = COption::GetOptionString("main", "captcha_password", "");
						if (strlen($captchaPass) <= 0)
						{
							$captchaPass = randString(10);
							COption::SetOptionString("main", "captcha_password", $captchaPass);
						}
						$cpt->SetCodeCrypt($captchaPass);
						$this->arResult["CaptchaCode"] = htmlspecialcharsbx($cpt->GetCodeCrypt());
					}
				}
				
				
				
				if(is_array($this->arResult["CommentsResult"]))
				{
					if($USER->IsAuthorized())
					{
						if(!empty($arPost))
						{
							global $stackCacheManager;
							$cache_id = "blog_comment_view_".$this->arResult["userID"];
							$stackCacheManager->SetLength($cache_id, 1000);
							$stackCacheManager->SetTTL($cache_id, 60*60*24*365);
							if ($stackCacheManager->Exist($cache_id, "c".$arPost["ID"]))
							{
								$this->arResult["lastPostView"] = $stackCacheManager->Get($cache_id, "c".$arPost["ID"]);
							}
							$stackCacheManager->Set($cache_id, "c".$arPost["ID"], time()+CTimeZone::GetOffset());
						}
					}
					
					$bNeedHide = false;
					foreach($this->arResult["CommentsResult"] as $k1 => $v1)
					{
						foreach($v1 as $k => $v)
						{
							if($this->arResult["Perm"] >= BLOG_PERMS_MODERATE || $this->arParams["BLOG_MODULE_PERMS"] >= "W")
								$this->arResult["Comments"][$v["ID"]]["SHOW_SCREENNED"] = "Y";
							
							if(IntVal($v["PARENT_ID"]) > 0 && $this->arParams["BLOG_MODULE_PERMS"] < "W")
							{
								$this->arResult["Comments"][$v["PARENT_ID"]]["CAN_EDIT"] = "N";
								if($this->arResult["Perm"] < BLOG_PERMS_MODERATE)
								{
									if($this->arResult["Comments"][$v["PARENT_ID"]]["SHOW_AS_HIDDEN"] != "Y" && $v["PUBLISH_STATUS"] == BLOG_PUBLISH_STATUS_PUBLISH)
										$this->arResult["Comments"][$v["PARENT_ID"]]["SHOW_AS_HIDDEN"] = "Y";
									else
										$this->arResult["Comments"][$v["PARENT_ID"]]["SHOW_AS_HIDDEN"] = "N";
								}
							}
							
							if(IntVal($v["AUTHOR_ID"])>0)
							{
								if($v["AUTHOR_ID"] == $user_id || $this->arParams["BLOG_MODULE_PERMS"] >= "W")
									$this->arResult["Comments"][$v["ID"]]["CAN_EDIT"] = "Y";
							}
							else
							{
								if($this->arParams["BLOG_MODULE_PERMS"] >= "W")
									$this->arResult["Comments"][$v["ID"]]["CAN_EDIT"] = "Y";
							}
							
							if(strlen($this->arResult["lastPostView"]) > 0 && $this->arResult["lastPostView"] < MakeTimeStamp($v["DATE_CREATE"]))
								$this->arResult["Comments"][$v["ID"]]["NEW"] = "Y";
						}
					}
					if($this->arParams["SHOW_RATING"] == "Y" && !empty($this->arResult["IDS"]))
						$this->arResult['RATING'] = CRatings::GetRatingVoteResult('BLOG_COMMENT', $this->arResult["IDS"]);
					
					foreach($this->arResult["Comments"] as $k => $v)
					{
						if($v["SHOW_AS_HIDDEN"] != "Y" && $v["PUBLISH_STATUS"] != BLOG_PUBLISH_STATUS_PUBLISH && $v["SHOW_SCREENNED"] != "Y")
						{
							unset($this->arResult["Comments"][$k]);
							$bNeedHide = true;
						}
					}
					
					if($bNeedHide && !empty($this->arResult["CommentsResult"][0]))
					{
						foreach($this->arResult["CommentsResult"][0] as $k => $v)
						{
							if(empty($this->arResult["Comments"][$v["ID"]]))
							{
								unset($this->arResult["CommentsResult"][0][$k]);
							}
						}
						
						$this->arResult["CommentsResult"][0] = array_values($this->arResult["CommentsResult"][0]);
					}
				}
				if($USER->IsAuthorized())
				{
					if(IntVal($commentUrlID) > 0 && empty($this->arResult["Comments"][$commentUrlID]))
					{
						$arComment = CBlogComment::GetByID($commentUrlID);
						if($arComment["AUTHOR_ID"] == $user_id && $arComment["PUBLISH_STATUS"] == BLOG_PUBLISH_STATUS_READY)
							$this->arResult["MESSAGE"] = GetMessage("B_B_PC_HIDDEN_POSTED");
					}
				}
				
				
				$this->arResult["PAGE_COUNT"] = 0;
				if(is_array($this->arResult["CommentsResult"]) && count($this->arResult["CommentsResult"][0]) > $this->arParams["COMMENTS_COUNT"])
				{
					$this->arResult["PAGE"] = $this->arParams["PAGEN"];
					if($this->arParams["USE_DESC_PAGING"] == "Y")
					{
						$v1 = floor(count($this->arResult["CommentsResult"][0]) / $this->arParams["COMMENTS_COUNT"]);
						$firstPageCount = count($this->arResult["CommentsResult"][0]) - ($v1 - 1) * $this->arParams["COMMENTS_COUNT"];
					}
					else
					{
						$v1 = ceil(count($this->arResult["CommentsResult"][0]) / $this->arParams["COMMENTS_COUNT"]);
						$firstPageCount = $this->arParams["COMMENTS_COUNT"];
					}
					
					$this->arResult["PAGE_COUNT"] = $v1;
					if($this->arResult["PAGE"] > $this->arResult["PAGE_COUNT"])
						$this->arResult["PAGE"] = $this->arResult["PAGE_COUNT"];
					if($this->arResult["PAGE_COUNT"] > 1)
					{
						if(IntVal($commentUrlID) > 0)
						{
							function BXBlogSearchParentID($commentID, $arComments)
							{
								if(IntVal($arComments[$commentID]["PARENT_ID"]) > 0)
								{
									return BXBlogSearchParentID($arComments[$commentID]["PARENT_ID"], $arComments);
								}
								else
									return $commentID;
							}
							$parentCommentId = BXBlogSearchParentID($commentUrlID, $this->arResult["Comments"]);
							
							if(IntVal($parentCommentId) > 0)
							{
								foreach($this->arResult["CommentsResult"][0] as $k => $v)
								{
									if($v["ID"] == $parentCommentId)
									{
										if($k < $firstPageCount)
											$this->arResult["PAGE"] = 1;
										else
											$this->arResult["PAGE"] = ceil(($k + 1 - $firstPageCount) / $this->arParams["COMMENTS_COUNT"]) + 1;
										break;
									}
								}
							}
						}
						
						$this->arResult["AllCommentsResult"] = $this->arResult["CommentsResult"][0];
						$this->arResult["PagesComment"] = Array();
						foreach($this->arResult["CommentsResult"][0] as $k => $v)
						{
							
							if($this->arResult["PAGE"] == 1)
							{
								if($k > ($firstPageCount-1))
									unset($this->arResult["CommentsResult"][0][$k]);
							}
							else
							{
								
								if($k >= ($firstPageCount + ($this->arResult["PAGE"]-1)*$this->arParams["COMMENTS_COUNT"]) ||
									$k < ($firstPageCount + ($this->arResult["PAGE"]-2)*$this->arParams["COMMENTS_COUNT"]))
									unset($this->arResult["CommentsResult"][0][$k]);
							}
						}
						
						for($i = 1; $i <= $this->arResult["PAGE_COUNT"]; $i++)
						{
							foreach($this->arResult["AllCommentsResult"] as $k => $v)
							{
								
								if($i == 1)
								{
									if($k <= ($firstPageCount-1))
										$this->arResult["PagesComment"][$i][$k] = $v;
								}
								else
								{
									if($k < ($firstPageCount + ($i-1)*$this->arParams["COMMENTS_COUNT"]) && $k >= ($firstPageCount + ($i-2)*$this->arParams["COMMENTS_COUNT"]))
										$this->arResult["PagesComment"][$i][$k] = $v;
								}
							}
						}
						unset($this->arResult["AllCommentsResult"]);
						
						$this->arResult["NEED_NAV"] = "Y";
						$this->arResult["PAGES"] = Array();
						$this->arResult["NEW_PAGES"] = Array();
						
						for($i = 1; $i <= $this->arResult["PAGE_COUNT"]; $i++)
						{
							if($i == 1)
								$this->arResult["NEW_PAGES"][$i] = htmlspecialcharsbx($APPLICATION->GetCurPageParam("", Array($this->arParams["NAV_PAGE_VAR"], "commentID"))."#comments");
							else
								$this->arResult["NEW_PAGES"][$i] = htmlspecialcharsbx($APPLICATION->GetCurPageParam($this->arParams["NAV_PAGE_VAR"].'='.$i, array($this->arParams["NAV_PAGE_VAR"], "commentID"))."#comments");
							
							if($i != $this->arResult["PAGE"])
							{
								if($i == 1)
									$this->arResult["PAGES"][] = '<a href="'.$link.'">'.$i.'</a>&nbsp;&nbsp;';
								else
									$this->arResult["PAGES"][] = '<a href="'.htmlspecialcharsbx($APPLICATION->GetCurPageParam($this->arParams["NAV_PAGE_VAR"].'='.$i, array($this->arParams["NAV_PAGE_VAR"], "commentID"))).'#comments">'.$i.'</a>&nbsp;&nbsp;';
							}
							else
								$this->arResult["PAGES"][] = "<b>".$i."</b>&nbsp;&nbsp;";
						}
					}
				}
				
				$this->IncludeComponentTemplate();
			}
		}
	}
	
	public function createPostFormId()
	{
		return self::POST_COMMENT_FORM_PREFIX;
	}
	
	public function createEditorId()
	{
		return self::POST_COMMENT_MESSAGE;
	}
	
	private function createXmlId($entityId)
	{
		return "BLOG_" . $entityId;
	}
	
	private function parseFilesArray()
	{
		$existingFiles = array();
		if ($this->arParams["ID"] > 0 && strlen($_POST["blog_upload_cid"]) <= 0)
		{
			$dbP = CBlogComment::GetList(array(), array("ID" => $this->arParams["ID"]), false, false, array("ID", "UF_BLOG_COMMENT_DOC"));
			if ($arP = $dbP->Fetch())
			{
				$existingFiles = $arP["UF_BLOG_COMMENT_DOC"];
			}
		}
		
		$imagesToAttach = array();    // images ids to attach them to blog post
		$arAttachedFiles = array();
		$toReplaseInText = array('SEARCH' => array(), 'REPLACE' => array());
		$notAttachedImages = $this->getNotAttachedFiles(true);
		foreach ($GLOBALS[CBlogComment::UF_NAME] as $fileID)
		{
			$fileID = intval($fileID);
			if ($fileID <= 0)
			{
				continue;
			}
			elseif (!is_array($_SESSION["MFI_UPLOADED_FILES_" . $_POST["blog_upload_cid"]]) || !in_array($fileID, $_SESSION["MFI_UPLOADED_FILES_" . $_POST["blog_upload_cid"]]))
			{
				if (empty($existingFiles) || !in_array($fileID, $existingFiles))
					continue;
			}

//			$arFile = CFile::GetFileArray($fileID);
			if (CFile::CheckImageFile(CFile::MakeFileArray($fileID)) === NULL)
			{
				if (isset($notAttachedImages[$fileID]) && $notAttachedImages[$fileID])
				{
					$imagesToAttach[] = $notAttachedImages[$fileID];
//					collect strings to replace in DETAIL TEXT
					$toReplaseInText['SEARCH'][] = "[IMG ID=" . $fileID . "file";
					$toReplaseInText['REPLACE'][] = "[IMG ID=" . $notAttachedImages[$fileID] . "";
				}
			}
			else
			{
				$arAttachedFiles[] = $fileID;
			}
		}

//								save in userfields only NOT_IMAGE files
		
		
		return array(
			'ATTACHED_FILES' => $arAttachedFiles,
			'IMAGES_TO_ATTACH' => $imagesToAttach,
			'TO_REPLACE' => $toReplaseInText,
		);
	}
	
	private function getNotAttachedFiles($removeOldFiles = false)
	{
		$notAttachedImages = array();
		$resNotAttachedImages = CBlogImage::GetList(
			array(),
			array(
				"POST_ID" => 0,
				"BLOG_ID" => 0,
				"IS_COMMENT" => 'Y',
				"COMMENT_ID" => 0
			),
			false, false,
			array("ID", "FILE_ID", "TIMESTAMP_X")
		);
		while ($image = $resNotAttachedImages->Fetch())
		{
//			if file upload in current session
			if (
				is_array($_SESSION["MFI_UPLOADED_FILES_" . $_POST["blog_upload_cid"]]) &&
				in_array($image["FILE_ID"], $_SESSION["MFI_UPLOADED_FILES_" . $_POST["blog_upload_cid"]])
			)
				$notAttachedImages[$image["FILE_ID"]] = $image["ID"];
			
			if ($removeOldFiles)
			{
//				remove too old files
//				default lifetime - 1 day
				$imageCreateDate = new DateTime($image["TIMESTAMP_X"]);
				$nowDate = new DateTime();
				if ($nowDate > $imageCreateDate->add(new DateInterval('PT' . CBlogImage::NOT_ATTACHED_IMAGES_LIFETIME . 'S')))
				{
					CBlogImage::Delete($image["ID"]);
					unset($notAttachedImages[$image["FILE_ID"]]);
				}
			}
		}
		
		return $notAttachedImages;
	}
	
	public function bindPostToEditorForm($xmlId, $formIdGet = NULL, $arParams)
	{
		static $formId = NULL;
		if ($formIdGet !== NULL)
		{
			$formId = $formIdGet;
			
			return '';
		}
		
		$scriptStr = "
			<script type=\"text/javascript\">
				BX.ready(function(){
					__blogLinkEntity({" .
			CUtil::JSEscape($xmlId) . " : ['BG', " . $arParams["ID"] . ", '" . $arParams["LOG_ID"] . "']},";
		
		if ($formId == NULL)
			$scriptStr .= "\"" . $this->createPostFormId() . "\"";
		else
			$scriptStr .= "\"" . $formId . "\"";
		
		$scriptStr .= ");});</script>";
		
		return $scriptStr;
	}
	
	private function isUserGivenConsent()
	{
		if(isset($this->arParams["USER_CONSENT"]) && $this->arParams["USER_CONSENT"] == "Y"
			&& isset($this->arParams["USER_CONSENT_ID"]) && $this->arParams["USER_CONSENT_ID"])
		{
			$this->arParams["USER_CONSENT_WAS_GIVEN"] = \Bitrix\Blog\BlogUser::isUserGivenConsent(
				$this->arResult['arUser']['ID'],
				$this->arParams["USER_CONSENT_ID"]
			);
		}
	}
}

?>
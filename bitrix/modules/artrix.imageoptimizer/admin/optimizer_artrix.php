<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php"); 
\Bitrix\Main\Loader::includeModule('artrix.imageoptimizer');
IncludeModuleLangFile(__FILE__);
global $DB;
use Artrix\ImageArtrix;

set_time_limit(0);

if (isset($_REQUEST["save_settings"])){
	foreach ($_REQUEST["SETTINGS"] as $key => $value){
		if (intval($value) <= 0)
			continue;
		
		$sql = "SELECT * FROM `artrix_image_settings` WHERE `SETTINGS_NAME` = '".$key."'";
		$res = $DB->Query($sql, false, $err_mess.__LINE__);
		if ($arr = $res -> Fetch()){
			$sqlUpdate = "UPDATE `artrix_image_settings` SET `SETTINGS_VALUE`='".intval($value)."' WHERE  `SETTINGS_NAME` = '".$key."'";
				
			$DB->Query($sqlUpdate, false, $err_mess.__LINE__);
		}
	}
}

$sql = "SELECT * FROM `artrix_image_settings` WHERE `SETTINGS_NAME` = 'JPEG_QUALITY'";
$res = $DB->Query($sql, false, $err_mess.__LINE__);
if ($arr = $res -> Fetch()){
	$JPEG_QUALITY = $arr["SETTINGS_VALUE"];
}




require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");
$APPLICATION->SetTitle(GetMessage("ARTRIX_OPTIMIZE_TITLE"));
$APPLICATION->SetAdditionalCSS("/bitrix/css/artrix.imageoptimizer/style.css");

$aTabs = array();
$sess_id = str_replace("sessid=", "", bitrix_sessid_get());

$aTabs[] = array("DIV" => "edit1", "TAB" => GetMessage("ARTRIX_OPTIMIZE_SITE_SCAN"), "ICON" => "site_check", "TITLE" => GetMessage("ARTRIX_OPTIMIZE_SITE_SCAN"));
$aTabs[] = array("DIV" => "edit2", "TAB" => GetMessage("ARTRIX_OPTIMIZE_SETTINGS"), "ICON" => "site_check", "TITLE" => GetMessage("ARTRIX_OPTIMIZE_SETTINGS"));
$tabControl = new CAdminTabControl("tabControl", $aTabs);
$tabControl->Begin();
$tabControl->BeginNextTab();

set_time_limit(0);
?>
<tr>
<td>
	<table id="artrix_scan">
		<tr>
			<td>
				<div id="scan-dirs-warning">
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id="scan-dirs-result">
					<div class="adm-info-message-wrap adm-info-message-green">
						<div class="adm-info-message">
							<div class="adm-info-message-title"></div>
							<p><?=GetMessage("ARTRIX_OPTIMIZE_DIR_SCAN_COUNT")?> <span id='dir_scan_count'>0</span></p>
							<p><?=GetMessage("ARTRIX_OPTIMIZE_DIR_SCAN_RESULT")?>  <span id='dir_scan_result'>0</span></p>
							<p><?=GetMessage("ARTRIX_OPTIMIZE_DIR_SCAN_SIZE")?>  <span id='dir_scan_size'>0</span> <?=GetMessage("ARTRIX_OPTIMIZE_MB")?></p>
							<div class="adm-info-message-icon"></div>
						</div>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id="image-result-ok">
					<div class="adm-info-message-wrap adm-info-message-green">
						<div class="adm-info-message">
							<div class="adm-info-message-title"></div>
							<p><?=GetMessage("ARTRIX_OPTIMIZE_FILES_COUNT")?> <span id='file_result'>0</span></p>
							<p><?=GetMessage("ARTRIX_OPTIMIZE_RESULT")?>  <span id='size_result'>0</span></p>
							<div class="adm-info-message-icon"></div>
						</div>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id="image-result-done">
					<div class="adm-info-message-wrap adm-info-message-green">
						<div class="adm-info-message">
							<div class="adm-info-message-title"></div>
							<p><?=GetMessage("ARTRIX_OPTIMIZE_DONE")?></p>
							<div class="adm-info-message-icon"></div>
						</div>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id="image-result-error">
					<div class="adm-info-message-wrap adm-info-message-red">
						<div class="adm-info-message">
							<div class="adm-info-message-title"><?=GetMessage("ARTRIX_OPTIMIZE_COMMAND")?></div>
							<div class="adm-info-message-icon"></div>
						</div>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id="image-file-optimize">
					<div class="adm-info-message-wrap adm-info-message-grey">
						<div class="adm-info-message">
							<p><?=GetMessage("ARTRIX_OPTIMIZE_FILE")?> <span id='file_name'>0</span></p>
							<p><?=GetMessage("ARTRIX_OPTIMIZE_OLD_FILE")?>  <span id='file_size'>0</span></p>
							<p><?=GetMessage("ARTRIX_OPTIMIZE_NEW_FILE")?>  <span id='file_new_size'>0</span></p>
							<p><?=GetMessage("ARTRIX_OPTIMIZE_RESULT")?> <span id='size_file_result'>0</span></p>
						</div>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<ul class="section-tree">
					<li>
						<?
						Artrix\ImageArtrix\ImageTable::getStartSubsectionHtml("root");
						?>
					</li>
				</ul>
			</td>
		</tr>
		<tr>
			<td>
				<input type="button" id="start_scan" value="<?=GetMessage("ARTRIX_OPTIMIZE_START")?>" onclick="start_scan()" class="adm-btn-green">
			</td>
		</tr>
	</table>

</td>
	</tr>
<?
$tabControl->BeginNextTab();
?>
	<tr>
	<td>
	<form name="artrix_scan_settings" method="post">
		<table style="width: 100%;">
			<tr>
				<td style="width: 50%; text-align: right; padding: 0 20px 0 0;">
					<?=GetMessage("ARTRIX_OPTIMIZE_JPEG_QUALITY")?>
				</td>
				<td style="width: 50%; text-align: left; padding: 0  0 0 20px;">
					<input type="text" name="SETTINGS[JPEG_QUALITY]" value="<?=intval($JPEG_QUALITY) > 0 ? $JPEG_QUALITY : 85?>">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: left; padding: 20px 0 0;">
					<input name="save_settings" type="submit" value="<?=GetMessage("ARTRIX_OPTIMIZE_SAVE")?>" class="adm-btn-green">
				</td>
			</tr>
		</table>
	</form>
	
</td>
	</tr>
<?
$tabControl->End();



?>
<script>
	function open_directory(id, path){
		var li = document.getElementById('list-' + id);
		var ul = li.getElementsByTagName("ul");
		if (ul.length <= 0){
			var checkbox = li.getElementsByTagName("input");
			var checked = checkbox[0].checked;
			BX.ajax({   
                url: '/bitrix/tools/artrix/actions.php',
                data: {"PATH": path, "FIND_SUB" : "Y", "lang" : "<?=LANGUAGE_ID?>", },
                method: 'POST',
                dataType: 'html',
                async: true,
                onsuccess: function(data){
					li.innerHTML = document.getElementById('list-' + id).innerHTML + data;
					var inputs = li.getElementsByTagName("input");
					for (var i in inputs){
						inputs[i].checked = checked;
					}
					for (var i in li.childNodes){
						if (li.childNodes[i].tagName.toLowerCase() == "input"){
							li.childNodes[i].setAttribute("data-open", "Y");
						}
					}
                },
                onfailure: function(){
                }
            });
			
		}
	}

	function setActive(obj, id){
		var li = document.getElementById('list-' + id);
		var inputs = li.querySelectorAll("input");
		for (var i in inputs){
			inputs[i].checked = obj.checked;
		}
	}
	
	var DIRS = {};
	var ITT = 0;
	var iITT = 0;
	var dirsITT = 0;
	var IMAGES = {};
	var ALL_DIFF = 0;
	
	function start_scan(){
		
		DIRS = {};
		ITT = 0;
		iITT = 0;
		IMAGES = {};
		ALL_DIFF = 0;
		dirsITT = 0;
		var div = document.getElementById("artrix_scan");
		document.getElementById("start_scan").disabled = true;
		var inputs = div.querySelectorAll("input[type=checkbox]:checked");
		var count = 0;
		for (var i in inputs){
			if (inputs[i].checked && typeof inputs[i].value != "undefined"){
				var open = "N";
				
				if (inputs[i].getAttribute("data-open") == "Y")
					open = "Y";
				
				DIRS[count] = {DIR: inputs[i].value, OPEN: open};
				count++;
			}
		}
		
		BX.style(document.getElementById('scan-dirs-result'), 'display', 'none');
		BX('dir_scan_count').innerHTML = 0;
		BX('dir_scan_result').innerHTML = 0;
		BX('dir_scan_size').innerHTML = 0;
		
		if (count > 0){
			scan_dirs(dirsITT);
		} else {
			document.getElementById("start_scan").disabled = false;
		}
	}
	function scan_dirs(i){
		if (typeof DIRS[i] != "undefined"){
			
			BX.ajax({   
                url: '/bitrix/tools/artrix/actions.php',
                data: {"DIRS" : DIRS[i], "SCAN_DIRS":"Y", "lang" : "<?=LANGUAGE_ID?>", },
                method: 'POST',
                dataType: 'html',
                async: true,
                onsuccess: function(data){
					var result = JSON.parse(data);
					
					BX.style(document.getElementById('scan-dirs-result'), 'display', 'block');
					var count = parseInt(BX('dir_scan_count').innerHTML);
					BX('dir_scan_count').innerHTML = count + 1;
					
					var count = parseInt(BX('dir_scan_result').innerHTML);
					BX('dir_scan_result').innerHTML = count + result.COUNT;
					
					var count = parseFloat(BX('dir_scan_size').innerHTML);
					BX('dir_scan_size').innerHTML = Math.round(parseFloat(count + result.SIZE) * 100) / 100;
					dirsITT++;
					scan_dirs(dirsITT);
					
                },
                onfailure: function(){
                }
            });
			
		} else {
			if (typeof DIRS[ITT] != "undefined"){
				scan_dir(ITT);
			} else {
				document.getElementById("start_scan").disabled = false;
			}
		}
	}
	function scan_dir(i){
		if (typeof DIRS[i] != "undefined"){
			
			BX.ajax({   
                url: '/bitrix/tools/artrix/actions.php',
                data: {"DIRS" : DIRS[i], "SCAN_DIR":"Y", "lang" : "<?=LANGUAGE_ID?>", },
                method: 'POST',
                dataType: 'html',
                async: true,
                onsuccess: function(data){
                   IMAGES = JSON.parse(data);
					iITT = 0;
					start_optimize(iITT);
					
                },
                onfailure: function(){
                }
            });
			
		} else {
			BX.style(document.getElementById('image-result-ok'), 'display', 'none');
			BX.style(document.getElementById('image-result-error'), 'display', 'none');
			BX.style(document.getElementById('image-file-optimize'), 'display', 'none');
			BX.style(document.getElementById('image-result-done'), 'display', 'block');
			document.getElementById("start_scan").disabled = false;
			BX.closeWait();
		}
	}
	function start_optimize(i){
		console.log(IMAGES[i]);
		if (typeof IMAGES[i] != "undefined"){
			BX.ajax({   
                url: '/bitrix/tools/artrix/actions.php',
                data: {"OPTIMIZE": "Y", "IMAGE": IMAGES[i], "lang" : "<?=LANGUAGE_ID?>", "sessid" : "<?=$sess_id?>"},
				method: 'POST',
                dataType: 'html',
                async: true,
                onsuccess: function(data){
				
					waitResult(IMAGES[i]);
                },
                onfailure: function(){
					start_optimize(i);
                }
            });
			
		} else {
			ITT++;
			scan_dir(ITT);
		}
	}
	
	function waitResult(image){
		if (typeof image != "undefined"){
			BX.ajax({   
                url: '/bitrix/tools/artrix/actions.php',
                data: {"WAIT_RESULT": "Y", "IMAGE": image, "lang" : "<?=LANGUAGE_ID?>", "sessid" : "<?=$sess_id?>"},
                method: 'POST',
                dataType: 'html',
                onsuccess: function(data){
					var result = JSON.parse(data);
					if (result.STATUS == "progress"){
						setTimeout(function(){waitResult(image)}, 7000);
					} else {
						if (result.STATUS == "error"){
							start_optimize(iITT);
						} else {
							getResult(image, result);
						}
					}
                },
                onfailure: function(){
					setTimeout(function(){waitResult(image)}, 7000);
                }
            });
			
		} else {
			ITT++;
			scan_dir(ITT);
		}
	}
	function getResult(image, data){
		BX.ajax({   
                url: '/bitrix/tools/artrix/actions.php',
                data: {"SHOW_RESULT": "Y", "DATA": data, "IMAGE": image, "lang" : "<?=LANGUAGE_ID?>", "sessid" : "<?=$sess_id?>"},
                method: 'POST',
                dataType: 'html',
                async: true,
                onsuccess: function(data){
					showResult(data);
                },
                onfailure: function(){
					getResult(image, data);
                }
            });
	}
	function showResult(data){
		var result = JSON.parse(data);

		if (result.WARNING && result.WARNING.length > 0){
			document.getElementById("scan-dirs-warning").innerHTML = result.WARNING;
			alert(result.WARNING);
			return;
		}
		
		if (result.STATUS == "progress"){
			var count = document.getElementById("file_result").innerHTML;
			var file_count = parseInt(count) + 1;
			document.getElementById("file_result").innerHTML = file_count;
			document.getElementById("file_name").innerHTML = result.FILE;
			document.getElementById("file_size").innerHTML = result.OLD_SIZE;
			document.getElementById("file_new_size").innerHTML = result.NEW_SIZE;
			document.getElementById("size_file_result").innerHTML = result.SIZE_DIFF;
			ALL_DIFF += parseInt(result.SIZE_DIFF);
			document.getElementById("size_result").innerHTML = ALL_DIFF;
			BX.style(document.getElementById('image-result-ok'), 'display', 'block');
			BX.style(document.getElementById('image-file-optimize'), 'display', 'block');
			BX.style(document.getElementById('image-result-error'), 'display', 'none');
			BX.style(document.getElementById('image-result-done'), 'display', 'none');
			iITT++;
			start_optimize(iITT);
		} else {
			BX.style(document.getElementById('image-result-ok'), 'display', 'none');
			BX.style(document.getElementById('image-file-optimize'), 'display', 'block');
			BX.style(document.getElementById('image-result-error'), 'display', 'block');
			BX.style(document.getElementById('image-result-done'), 'display', 'none');
		}
	}
</script>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php")?>
<?php
// @codingStandardsIgnoreStart
$moduleId = "roistat.b24";
$CAT_RIGHT = $APPLICATION->GetGroupRight($moduleId);
if ($CAT_RIGHT >= "R") :

    IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/options.php");
    IncludeModuleLangFile(__FILE__);

    include_once($GLOBALS["DOCUMENT_ROOT"] . "/bitrix/modules/roistat.b24/include.php");

    if ($REQUEST_METHOD == "GET" && strlen($RestoreDefaults) > 0 && $CAT_RIGHT == "W" && check_bitrix_sessid())
    {
        COption::RemoveOption("roistat.b24");
        $z = CGroup::GetList($v1 = "id", $v2 = "asc", array("ACTIVE" => "Y", "ADMIN" => "N"));
        while ($zr = $z->Fetch())
            $APPLICATION->DelGroupRight($moduleId, array($zr["ID"]));
        COption::RemoveOption($moduleId);

        LocalRedirect($APPLICATION->GetCurPage() . "?lang=" . LANG . "&mid=" . urlencode($mid));
    }

    if ($REQUEST_METHOD == "POST" && strlen($Update) > 0 && $CAT_RIGHT == "W" && check_bitrix_sessid())
    {
        COption::SetOptionString($moduleId, 'LOGIN', $_REQUEST["ROISTAT_LOGIN"]);
        COption::SetOptionString($moduleId, 'PASSWORD', $_REQUEST["ROISTAT_PASSWORD"]);
    }

    $aTabs = array(
        array("DIV" => "edit1", "TAB" => GetMessage("ROISTAT_TAB_NAME"), "ICON" => "default", "TITLE" => GetMessage("ROISTAT_TAB_TITLE")),
        array("DIV" => "edit2", "TAB" => GetMessage("MAIN_TAB_RIGHTS"), "ICON" => "default", "TITLE" => GetMessage("MAIN_TAB_TITLE_RIGHTS")),
    );
    $tabControl = new CAdminTabControl("tabControl", $aTabs);

    $tabControl->Begin();
    ?>
    <form method="POST"
          action="<? echo $APPLICATION->GetCurPage() ?>?mid=<?= htmlspecialcharsbx($mid) ?>&lang=<? echo LANGUAGE_ID ?>"
          name="ara">
        <? echo bitrix_sessid_post();

        $tabControl->BeginNextTab();

        ?>
        <tr>
            <td valign="top" width="50%">
                <?= GetMessage('ROISTAT_LOGIN_LABEL') ?>
            </td>
            <td valign="top" width="50%">
                <input name="ROISTAT_LOGIN" value="<?= COption::GetOptionString($moduleId, 'LOGIN') ?>">
            </td>
        </tr>
        <tr>
            <td valign="top" width="50%">
                <?= GetMessage('ROISTAT_PASSWORD_LABEL') ?>
            </td>
            <td valign="top" width="50%">
                <input name="ROISTAT_PASSWORD" value="<?= COption::GetOptionString($moduleId, 'PASSWORD') ?>">
            </td>
        </tr>
        <?
        $tabControl->BeginNextTab();

        require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/admin/group_rights.php");

        $tabControl->Buttons();?>
        <script type="text/javascript">
            function RestoreDefaults() {
                if (confirm('<? echo GetMessageJS("MAIN_HINT_RESTORE_DEFAULTS_WARNING"); ?>'))
                    window.location = "<?echo $APPLICATION->GetCurPage()?>?RestoreDefaults=Y&lang=<?echo LANGUAGE_ID; ?>&mid=<?echo urlencode($mid)?>&<?=bitrix_sessid_get()?>";
            }
        </script>
        <input type="submit" <? if ($CAT_RIGHT < "W") echo "disabled" ?> name="Update"
               value="<? echo GetMessage("MAIN_SAVE") ?>">
        <input type="hidden" name="Update" value="Y">
        <input type="reset" name="reset" value="<? echo GetMessage("MAIN_RESET") ?>">
        <input type="button" <? if ($CAT_RIGHT < "W") echo "disabled" ?>
               title="<? echo GetMessage("MAIN_HINT_RESTORE_DEFAULTS") ?>" OnClick="RestoreDefaults();"
               value="<? echo GetMessage("MAIN_RESTORE_DEFAULTS") ?>">
        <? $tabControl->End(); ?>
    </form>
<? endif; ?>
<?php
// @codingStandardsIgnoreEnd
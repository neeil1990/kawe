<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if ($arResult["NavShowAlways"] || $arResult["NavPageCount"] > 1):?>

    <nav aria-label="Page navigation example">

        <ul class="pagination">

            <?for ($PAGE_NUMBER=$arResult["NAV"]["START_PAGE"]; $PAGE_NUMBER<=$arResult["NAV"]["END_PAGE"]; $PAGE_NUMBER++):?>
                <?if ($PAGE_NUMBER == $arResult["NAV"]["PAGE_NUMBER"]):?>
                    <li class="pagination__item"><span class="pagination__link"><?=$PAGE_NUMBER?></span></li>
                <?else:?>
                    <li class="pagination__item"><a class="pagination__link" href="<?=$arResult["NAV"]["URL"]["SOME_PAGE"][$PAGE_NUMBER]?>"><?=$PAGE_NUMBER?></a></li>
                <?endif;?>
            <?endfor;?>

        </ul>

    </nav>

<?endif;?>



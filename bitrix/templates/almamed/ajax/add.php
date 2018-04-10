<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if( !empty( $_GET["id"] ) )
    $id = (int)$_GET["id"];

if( !empty( $_GET["quantity"] ) )
    $quantity = (int)$_GET["quantity"];
else
    $quantity = 1;

if( !$id )
    die( 'Ошибка добавления товара в корзину!' );

CModule::IncludeModule( 'catalog' );
CModule::IncludeModule( 'sale' );

$FIELDS = [];
$PROPS = [];
if( !empty( $_GET["art"] ) ){
    $arSelect = Array("ID", "IBLOCK_ID", "NAME","PROPERTY_*");
    $arFilter = Array("IBLOCK_ID" => IBLOCK_CATALOG, "ID" => $id, "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    if($ob = $res->GetNextElement()){
        $arProps = $ob->GetProperties();
        $key_price = array_search(trim($_GET["art"]),$arProps['PRICES']['DESCRIPTION']);
        if($key_price){
            $FIELDS = ["PRICE" => $arProps['PRICES']['VALUE'][$key_price],"CUSTOM_PRICE" => "Y"];
        }
    }
    $PROPS[] = ["NAME" => "Артикул","CODE" => "CML2_ARTICLE","VALUE" => $_GET["art"]];
}

if( !empty( $_GET["color"] ) )
$PROPS[] = ["NAME" => "Вариант","CODE" => "CML2_OPTION","VALUE" => $_GET["color"]];

if(Add2BasketByProductID(
    $id,
    $quantity,
    $FIELDS,
    $PROPS
    )
){
    print 'Товар успешно добавлен в корзину';
}else{
    print 'Ошибка добавления товара в корзину';
}
?>
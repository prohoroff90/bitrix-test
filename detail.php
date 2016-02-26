<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.element", 
	"template1", 
	Array(
		"DETAIL_PICTURE_MODE" => "IMG",	// Режим показа детальной картинки
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],	// ID элемента
		"IBLOCK_ID" => 3,	// Инфоблок
		"IBLOCK_TYPE" => "Car",	// Тип инфоблока
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
	), false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
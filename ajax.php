<?require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");

if ($_REQUEST['TYPE'] == 'sections'){
	$APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list", 
		"select", 
		Array(
			"IBLOCK_ID" => "3",	// Инфоблок
			"IBLOCK_TYPE" => "Car",	// Тип инфоблока
			"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
			"TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
			"SELECT_NAME" => "model",
			"SELECT_TEXT" => "Выберите модель..."
		), false
	);
} elseif($_REQUEST['TYPE'] == 'elements'){
	$APPLICATION->IncludeComponent(
		"bitrix:catalog.section", 
		"select", 
		Array(
			"IBLOCK_ID" => "3",	// Инфоблок
			"IBLOCK_TYPE" => "Car",	// Тип инфоблока
			"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
			"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
			"SELECT_NAME" => "package",
			"SELECT_TEXT" => "Выберите комплектацию..."
		), false
	);
};
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>

<div class="selects row">
	<div class="select-brand col-xs-3">
		<?$APPLICATION->IncludeComponent(
			"bitrix:catalog.section.list",
			"select",
			Array(
				"IBLOCK_ID" => "3",
				"IBLOCK_TYPE" => "Car",
				"TOP_DEPTH" => "1",
				"SELECT_NAME" => "brand",
				"SELECT_TEXT" => "Выберите марку..."
			), false
		);?>
	</div>
	<div class="select-model col-xs-3"></div>
	<div class="select-package col-xs-3"></div>
	<div class="show-button col-xs-3"></div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/about/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/about.php",
	),
	array(
		"CONDITION" => "#^/catalog/(.*)/(.*)/(.*)/(\\?.*|\$)#",
		"RULE" => "ELEMENT_ID=\$3",
		"ID" => "",
		"PATH" => "/detail.php",
	),
	array(
		"CONDITION" => "#^/catalog/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/catalog.php",
	),
);

?>
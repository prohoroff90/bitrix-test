<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?=SITE_CHARSET?>"/>
<link href="<?=SITE_TEMPLATE_PATH?>/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="<?=SITE_TEMPLATE_PATH?>/template_styles.css" type="text/css" rel="stylesheet" />

<?CJSCore::Init();?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/jquery-2.1.3.min.js');?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/scripts.js');?>
<?$APPLICATION->ShowCSS(true, true);?>
<?$APPLICATION->ShowHeadStrings();?>
<?$APPLICATION->ShowHeadScripts();?>
<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body class="<?=$APPLICATION->ShowProperty("BodyClass");?>">
<?$APPLICATION->ShowPanel();?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<img src="<?=SITE_TEMPLATE_PATH?>/picture.jpg" alt="фон"/>
				<?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
				
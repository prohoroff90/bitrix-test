<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?=SITE_CHARSET?>"/>
<link href="<?=CUtil::GetAdditionalFileURL(SITE_TEMPLATE_PATH."/template_styles.css")?>" type="text/css" rel="stylesheet" />
<?CJSCore::Init();?>
<?$APPLICATION->ShowCSS(true, true);?>
<?$APPLICATION->ShowHeadStrings();?>
<?$APPLICATION->ShowHeadScripts();?>
<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body class="<?=$APPLICATION->ShowProperty("BodyClass");?>">
	<div style="height:200px;width:100%;background:#ddd"></div>
	<div style="height:50px;background:#eee">Меню|Главная|О нас|Каталог|</div>

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<select class="<?=$arParams['SELECT_NAME']?>">
	<option value="0"><?=$arParams['SELECT_TEXT']?></option>
	<?foreach($arResult['SECTIONS'] as $section):?>
		<option value="<?=$section['ID']?>"><?=$section['NAME']?></option>
	<?endforeach;?>
</select>

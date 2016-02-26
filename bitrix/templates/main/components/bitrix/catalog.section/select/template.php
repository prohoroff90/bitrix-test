<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<select class="<?=$arParams['SELECT_NAME']?>">
	<option value="0"><?=$arParams['SELECT_TEXT']?></option>
	<?foreach($arResult['ITEMS'] as $item):?>
		<option value="<?=$item['ID']?>"><?=$item['NAME']?></option>
	<?endforeach;?>
</select>
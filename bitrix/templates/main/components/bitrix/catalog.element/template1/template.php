<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="bx_item_detail <? echo $templateData['TEMPLATE_CLASS']; ?>" id="<? echo $arItemIDs['ID']; ?>">
	<?
	reset($arResult['MORE_PHOTO']);
	$arFirstPhoto = current($arResult['MORE_PHOTO']);
	?>
	<div class="bx_item_container">
		<div class="bx_lt">
			<div class="bx_item_slider" id="<? echo $arItemIDs['BIG_SLIDER_ID']; ?>">
				<div class="bx_bigimages" id="<? echo $arItemIDs['BIG_IMG_CONT_ID']; ?>">
					<div class="bx_bigimages_imgcontainer">
						<span class="bx_bigimages_aligner"><img id="<? echo $arItemIDs['PICT']; ?>" src="<? echo $arFirstPhoto['SRC']; ?>" alt="<? echo $strAlt; ?>" title="<? echo $strTitle; ?>"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<div class="detail_name"><?=$arResult["SECTION"]["PATH"]["0"]["NAME"]?> <?=$arResult["SECTION"]["PATH"]["1"]["NAME"]?> <?=$arResult["NAME"]?></div>
	<div class="detail_text"><?=$arResult["DETAIL_TEXT"]?></div>
</div>
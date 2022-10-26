<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>



<!--<pre><? //print_r($arResult);?></pre>-->

<div class="site-section site-section-sm bg-light">
<div class="container">
<div class="row mb-5">
      <?foreach($arResult["ITEMS"] as $arItem):?>
         <?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
     
      <div class="col-md-6 col-lg-4 mb-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
       <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block"> <figure> <img alt="Image" src="<?echo$arItem["DETAIL_PICTURE"]["SRC"]?>" class="img-fluid"> </figure>
				<div class="prop-text">
					<div class="inner">
                  <span class="price rounded"><?echo $arItem["PROPERTY_PRICE_VALUE"]?></span>
						<h3 class="title"><?echo $arItem["NAME"]?></h3>
						<p class="location">
							 <?echo $arItem["DETAIL_TEXT"];?>
						</p>
					</div>
					<div class="prop-more-info">
						<div class="inner d-flex">
							<div class="col">
								 Area: <strong><?echo $arItem["PROPERTY_SQUARE_VALUE"]?></strong>
							</div>
							<div class="col">
								 Beds: <strong><?echo $arItem["PROPERTY_FLOOR_VALUE"]?></strong>
							</div>
							<div class="col">
								 Baths: <strong><?echo $arItem["PROPERTY_BATHROOM_VALUE"]?></strong>
							</div>
							<div class="col">
								 Garages: <strong><?echo $arItem["PROPERTY_GARAGE_VALUE"]?></strong>
							</div>
						</div>
					</div>
				</div>
       </a>
	</div>
   <?endforeach;?>
</div>
</div>
</div>
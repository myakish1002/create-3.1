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
<div class="row mb-5">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

		<div class="col-md-6 col-lg-4 mb-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block">
              <figure>
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid">
              </figure>
              <div class="prop-text">
                <div class="inner">
                  <span class="price rounded">$<?=$arItem["DISPLAY_PROPERTIES"]["COST"]["DISPLAY_VALUE"]?></span>
                  <h3 class="title"><?=$arItem["NAME"]?></h3>
                  <p class="location"><?=$arItem["PREVIEW_TEXT"]?></p>
                </div>
                <div class="prop-more-info">
                  <div class="inner d-flex">
                    <div class="col">
                      <span><?=GetMessage("SQUARE")?></span>
                      <strong><?=$arItem["DISPLAY_PROPERTIES"]["SQUARE"]["DISPLAY_VALUE"]?><?=GetMessage("EDIZ")?></strong>
                    </div>
                    <div class="col">
                      <span><?=GetMessage("FLOORS")?></span>
                      <strong><?=$arItem["DISPLAY_PROPERTIES"]["FLOORS"]["DISPLAY_VALUE"]?></strong>
                    </div>
                    <div class="col">
                      <span><?=GetMessage("BATHROOMS")?></span>
                      <strong><?=$arItem["DISPLAY_PROPERTIES"]["BATHROOMS"]["DISPLAY_VALUE"]?></strong>
                    </div>
                    <div class="col">
                      <span><?=GetMessage("GARAGE")?></span> 
                      <strong><?if(isset($arItem["DISPLAY_PROPERTIES"]["GARAGE"])) echo $arItem["DISPLAY_PROPERTIES"]["GARAGE"]["DISPLAY_VALUE"]; else echo GetMessage("NO");?></strong>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
	
<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

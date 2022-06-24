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

<div class="site-section">
	<div class="container">
		<div class="row align-items-center">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
          <div class="col-md-6 order-md-2" data-aos="fade-up" data-aos-delay="100">
            <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid">
          </div>
		<?endif;?>
          <div class="col-md-5 mr-auto order-md-1"  data-aos="fade-up" data-aos-delay="200">
            <div class="site-section-title mb-3">
			<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
              <h2><?=$arResult["NAME"]?></h2>
			<?endif;?>
            </div>
			<?if($arResult["DETAIL_TEXT"] <> ''):?>
            	<p><?=$arResult["DETAIL_TEXT"];?></p>
			<?endif;?>
          </div>
        </div>
    </div>
</div>
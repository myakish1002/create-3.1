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
	<div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
            <h1 class="mb-2"><?=$arResult["NAME"]?></h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold">$<?=$arResult["DISPLAY_PROPERTIES"]["COST"]["VALUE"]?></strong></p>
          </div>
        </div>
      </div>
    </div>
	<div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" style="margin-top: -150px;">
            <div class="mb-5">
              <div class="slide-one-item home-slider owl-carousel">
			  	<?if(isset($arResult["DISPLAY_PROPERTIES"]["GALLERY"])):?>
					<?if(isset($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"])):?>
						<div><img src="<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"]?>" alt="Image" class="img-fluid"></div>
					<?else:?>
						<?foreach($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"] as $galleryFile):?>
							<div><img src="<?=$galleryFile["SRC"]?>" alt="Image" class="img-fluid"></div>
						<?endforeach;?>
					<?endif;?>
				<?else:?>
					<div><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid"></div>
				<?endif;?>
              </div>
            </div>
            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3">$<?=$arResult["DISPLAY_PROPERTIES"]["COST"]["VALUE"]?></strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Этажи</span>
                    <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["FLOORS"]["VALUE"]?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Площадь</span>
                    <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["SQUARE"]["VALUE"]?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Обновлено</span>
                    <span class="property-specs-number"><?=stristr($arResult["TIMESTAMP_X"], " ", true)?></span>
                    
                  </li>
                </ul>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Количество санузлов</span>
                  <strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["BATHROOMS"]["VALUE"]?></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Наличие гаража</span>
                  <strong class="d-block"><?= isset($arResult["DISPLAY_PROPERTIES"]["GARAGE"]) ? $arResult["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"] : "Нет"; ?></strong>
                </div>
                <!--<div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Price/Sqft</span>
                  <strong class="d-block">$520</strong>
                </div>-->
              </div>
              <h2 class="h4 text-black">More Info</h2>
              <p><?=$arResult["DETAIL_TEXT"]?></p>
              <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Property Gallery</h2>
                </div>
				<?if(isset($arResult["DISPLAY_PROPERTIES"]["GALLERY"])):?>
					<?if(isset($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"])):?>
						<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
							<a href="<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"]?>" class="image-popup gal-item"><img src="<?=$arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"]["SRC"]?>" alt="Image" class="img-fluid"></a>
						</div>
					<?else:?>
						<?foreach($arResult["DISPLAY_PROPERTIES"]["GALLERY"]["FILE_VALUE"] as $galleryFile):?>
							<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
								<a href="<?=$galleryFile["SRC"]?>" class="image-popup gal-item"><img src="<?=$galleryFile["SRC"]?>" alt="Image" class="img-fluid"></a>
							</div>
						<?endforeach;?>
					<?endif;?>
				<?else:?>
					<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
						<a href="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" class="image-popup gal-item"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="Image" class="img-fluid"></a>
					</div>
				<?endif;?>
              </div>
            </div>

			<?if(isset($arResult["DISPLAY_PROPERTIES"]["MATERIALS"])):?>
            <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Дополнительные материалы</h2>
                </div>
					<?if(isset($arResult["DISPLAY_PROPERTIES"]["MATERIALS"]["FILE_VALUE"]["SRC"])):?>
						<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
							<a href="<?=$arResult["DISPLAY_PROPERTIES"]["MATERIALS"]["FILE_VALUE"]["SRC"]?>">Доп.материал</a>
						</div>
					<?else:?>
						<?foreach($arResult["DISPLAY_PROPERTIES"]["MATERIALS"]["FILE_VALUE"] as $galleryFile):?>
							<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
								<a href="<?=$galleryFile["SRC"]?>">Доп.материал</a>
							</div>
						<?endforeach;?>
					<?endif;?>
            </div>
			<?endif;?>

			<?if(isset($arResult["DISPLAY_PROPERTIES"]["LINKS"])):?>
            <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Дополнительные ссылки</h2>
                </div>
					<?if(!is_array($arResult["DISPLAY_PROPERTIES"]["LINKS"]["VALUE"])):?>
						<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
							<a href="<?=$arResult["DISPLAY_PROPERTIES"]["LINKS"]["VALUE"]?>">Доп. ссылка</a>
						</div>
					<?else:?>
						<?foreach($arResult["DISPLAY_PROPERTIES"]["LINKS"]["VALUE"] as $links):?>
							<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
								<a href="<?=$links?>">Доп. ссылка</a>
							</div>
						<?endforeach;?>
					<?endif;?>
            </div>
			<?endif;?>

          </div>
          <div class="col-lg-4 pl-md-5">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
            </div>

          </div>
          
        </div>
      </div>
    </div>

<!--
<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>
-->
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Объявления");
?>

<?if($APPLICATION->GetCurPage(false) === '/ads/'):?>
    <div class="pt-5">
      <div class="container">
        <form class="row">
          
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Lot Area</option>
                <option value="1000">1000</option>
                <option value="800">800</option>
                <option value="600">600</option>
                <option value="400">400</option>
                <option value="200">200</option>
                <option value="100">100</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Property Status</option>
                <option value="For Sale">For Sale</option>
                <option value="For Rent">For Rent</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Location</option>
                <option value="United States">United States</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Canada">Canada</option>
                <option value="Belgium">Belgium</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Lot Area</option>
                <option value="1000">1000</option>
                <option value="800">800</option>
                <option value="600">600</option>
                <option value="400">400</option>
                <option value="200">200</option>
                <option value="100">100</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Bedrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5+">5+</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Bathrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5+">5+</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="mb-4">
              <div id="slider-range" class="border-primary"></div>
              <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" value="Search">
          </div>
          
        </form>

        
      </div>
    </div>

<div class="site-section site-section-sm bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="site-section-title">
              <h2>New Properties for You</h2>
            </div>
          </div>
        </div>
<?endif;?>     
		<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"ads", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "BATHROOMS",
			1 => "FLOORS",
			2 => "GARAGE",
			3 => "SQUARE",
			4 => "PRIORITY",
			5 => "LINKS",
			6 => "COST",
			7 => "GALLERY",
			8 => "MATERIALS",
			9 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "BATHROOMS",
			1 => "FLOORS",
			2 => "GARAGE",
			3 => "SQUARE",
			4 => "PRIORITY",
			5 => "LINKS",
			6 => "COST",
			7 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "my_paginate",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/ads/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "ads",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>      
      </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
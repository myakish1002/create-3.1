<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
  <head>

    <?php
      use Bitrix\Main\Page\Asset;

      Asset::getInstance()->addCss("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");
      Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");

      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");
      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");
      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");
      Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
    ?>
    
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?$APPLICATION->ShowHead();?>
  </head>
  <body>
  <div id="panel"><?$APPLICATION->ShowPanel();?></div>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => SITE_DIR."/includes/header-phone.php"
					),
					false
			  );?>
			  <?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => SITE_DIR."/includes/header-mail.php"
					),
					false
			  );?>
            </p>  
          </div>
          <div class="col-6 col-md-6 text-right">
			  <?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => SITE_DIR."/includes/header-social.php"
					),
					false
			  );?>
          </div>
        </div>
      </div>
      
    </div>
    <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class=""><a href="<?=SITE_DIR?>" class="h5 text-uppercase text-black"><strong>
			  <?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default",
						"PATH" => SITE_DIR."/includes/header-logo.php"
					),
					false
			  );?>
			  <span class="text-danger">.</span></strong></a></h1>
            </div>
            <?$APPLICATION->IncludeComponent(
              "bitrix:menu", 
              "my_template", 
              array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N",
                "MAX_LEVEL" => "3",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "MENU_CACHE_TIME" => "36000000000",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N",
                "COMPONENT_TEMPLATE" => "my_template"
              ),
              false
            );?>
            <!--<div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="<?=SITE_DIR?>">Home</a>
                  </li>
                  <li class="has-children">
                    <a href="properties.html">Properties</a>
                    <ul class="dropdown">
                      <li><a href="#">Buy</a></li>
                      <li><a href="#">Rent</a></li>
                      <li><a href="#">Lease</a></li>
                      <li class="has-children">
                        <a href="#">Menu</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </nav>
            </div>-->
           

          </div>
        </div>
      </div>
    </div>

    <?if($APPLICATION->GetCurPage(false) !== '/'):?>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2"><?$APPLICATION->ShowTitle()?></h1>
            <?$APPLICATION->IncludeComponent(
              "bitrix:breadcrumb", 
              "breadcrumbs", 
              array(
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0",
                "COMPONENT_TEMPLATE" => "breadcrumbs"
              ),
              false
            );?>
          </div>
        </div>
      </div>
    </div>
    <?endif;?>
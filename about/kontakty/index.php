<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="site-section">
      <div class="container">
        <div class="row">
		  	<?$APPLICATION->IncludeComponent(
				"bitrix:main.include", 
				".default", 
				array(
					"COMPONENT_TEMPLATE" => ".default",
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."/includes/contactindex-content.php",
					"EDIT_TEMPLATE" => ""
				),
				false
			);?>
        </div>
      </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
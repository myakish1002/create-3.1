<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?>

<div class="site-section">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.feedback",
				"feedback",
				Array(
					"EMAIL_TO" => "andreas.gulai@yandex.ru",
					"EVENT_MESSAGE_ID" => array(0=>"7",),
					"OK_TEXT" => "Спасибо, ваше сообщение принято.",
					"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"MESSAGE",),
					"USE_CAPTCHA" => "Y"
				)
			);?>
          </div>
		  	<?$APPLICATION->IncludeComponent(
				"bitrix:main.include", 
				".default", 
				array(
					"COMPONENT_TEMPLATE" => ".default",
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."/includes/contacts-content.php",
					"EDIT_TEMPLATE" => ""
				),
				false
			);?>
        </div>
      </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent("bitrix:main.register", "rega", Array(
	"AUTH" => "Y",	// Автоматически авторизовать пользователей
		"REQUIRED_FIELDS" => array(	// Поля, обязательные для заполнения
			0 => "EMAIL",
			1 => "NAME",
			2 => "LAST_NAME",
		),
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_FIELDS" => array(	// Поля, которые показывать в форме
			0 => "EMAIL",
			1 => "TITLE",
			2 => "NAME",
			3 => "SECOND_NAME",
			4 => "LAST_NAME",
			5 => "PERSONAL_GENDER",
			6 => "PERSONAL_BIRTHDAY",
			7 => "PERSONAL_PHOTO",
			8 => "PERSONAL_PHONE",
		),
		"SUCCESS_PAGE" => "",	// Страница окончания регистрации
		"USER_PROPERTY" => array(	// Показывать доп. свойства
			0 => "UF_ROLE",
		),
		"USER_PROPERTY_NAME" => "",	// Название блока пользовательских свойств
		"USE_BACKURL" => "Y",	// Отправлять пользователя по обратной ссылке, если она есть
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
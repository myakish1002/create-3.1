<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

$formId = 'feedback_form_' . $this->randString();

?>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form class="p-5 bg-white border" id="<?=$formId?>" action="<?=POST_FORM_ACTION_URI?>" method="POST">
<?=bitrix_sessid_post()?>
	<div class="row form-group">
        <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold" for="fullname"><?=GetMessage("MFT_NAME")?></label>
			<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
            <input type="text" name="user_name" id="fullname" class="form-control" placeholder="<?=GetMessage("MFT_NAME")?>" value="<?=$arResult["AUTHOR_NAME"]?>">
        </div>
    </div>
	<div class="row form-group">
        <div class="col-md-12">
            <label class="font-weight-bold" for="email"><?=GetMessage("MFT_EMAIL")?></label>
			<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
            <input type="email" name="user_email" id="email" class="form-control" placeholder="<?=GetMessage("MFT_EMAIL")?>" value="<?=$arResult["AUTHOR_EMAIL"]?>">
        </div>
    </div>
	<div class="row form-group">
        <div class="col-md-12">
            <label class="font-weight-bold" for="message"><?=GetMessage("MFT_MESSAGE")?></label>
			<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
            <textarea name="MESSAGE" id="message" cols="30" rows="5" class="form-control" placeholder="<?=GetMessage("MFT_MESSAGE")?>"><?=$arResult["MESSAGE"]?></textarea>
        </div>
    </div>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<div class="row form-group">
        <div class="col-md-12">
        	<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn btn-primary  py-2 px-4 rounded-0">
        </div>
    </div>
</form>
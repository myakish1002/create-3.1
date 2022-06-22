<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<?
	global $countMenuItem;
	$countMenuItem = 0;
?>
<?
foreach($arResult as $arItem):
	$countMenuItem++;
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
<?if($countMenuItem == 1):?>
<div class="col-md-6 col-lg-6">
    <ul class="list-unstyled">
<?endif;?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
<?if($countMenuItem % 4 == 0 && $countMenuItem != count($arResult)):?>	
	</ul>
</div>
<?$countMenuItem = 0;?>
<?endif;?>
<?endforeach?>
	</ul>
</div>
<?endif?>
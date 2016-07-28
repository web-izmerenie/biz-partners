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
<section class="back">
	<div class="wrapper">
		<a href="<?=$arResult['SECTION_PAGE_URL'];?>"><?=$arResult['NAME'];?></a>
	</div>
</section>
<!--noindex-->
<?if(!isBot()){?>
	<section class="items">
		<div class="wrapper">
			<nav>
				<?foreach($arResult['ITEMS'] as $arItem){?>
					<a href="http://biz-partners.ru<?=$arItem['DETAIL_PAGE_URL']?>"
						<?if($_GET['ELEMENT_CODE'] == $arItem['CODE']){?>class="active"<?}?>>
						<?=$arItem['NAME'];?>
					</a>
				<?}?>
			</nav>
		</div>
	</section>
<?}?>
<!--/noindex-->

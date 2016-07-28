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
<?$this->SetViewTarget('subitem');?>
	<?if($arResult['ITEMS']){?>
		<!--noindex-->
		<?if(!isBot()){?>
			<div class="subitem">
				<div class="wrapper">
					<nav>
						<ul>
							<?foreach($arResult['ITEMS'] as $arItem){?>
								<li>
									<a <?if($arItem['ACTIVE_CLASS']){?>class="active"<?}?> href="http://biz-partners.ru/<?=$arItem['DETAIL_PAGE_URL'];?>">
										<?=$arItem['NAME'];?>
									</a>
								</li>
							<?}?>
						</ul>
					</nav>
				</div>
			</div>
		<?}?>
		<!--/noindex-->
	<?}?>
<?$this->EndViewTarget();?>

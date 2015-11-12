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

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>
<section class="pager">
	<div class="wrapper">
		<?if ($arResult["NavPageNomer"] > 1){?>
			<a class="arrow" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>
				PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
			</a>
		<?}?>
		<ul>
			<?while($arResult["nStartPage"] <= $arResult["nEndPage"]){?>
			  <?if($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
					<li>
						<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"
							<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]){?>class="active"<?}?>>
							<?=$arResult["nStartPage"]?>
						</a>
					</li>
			  <?else:?>
					<li>
						<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>
							PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"
							<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]){?>class="active"<?}?>>
							<?=$arResult["nStartPage"]?>
						</a>
					</li>
			  <?endif?>
			  <?$arResult["nStartPage"]++?>
			<?}?>
		</ul>
		<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]){?>
		  <a class="arrow next" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>
				PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"></a>
		<?}?>
	</div>
</section>

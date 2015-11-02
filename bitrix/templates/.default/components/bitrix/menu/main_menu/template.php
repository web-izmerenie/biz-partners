<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>
	<div id="menu" class="column">
		<nav>
			<ul>
				<?foreach($arResult as $arItem){?>
					<li <?if($arItem['SELECTED']){?> class="active"<?}?>>
						<a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT'];?></a>
						<?if($arItem['PARAMS']['INSILDE_MENU']){?>
							<?$APPLICATION->IncludeComponent(
								"bitrix:catalog.section.list",
								"catalog_menu",
								array(
									"ADD_SECTIONS_CHAIN" => "N",
									"CACHE_GROUPS" => "Y",
									"CACHE_TIME" => "36000000",
									"CACHE_TYPE" => "A",
									"COMPONENT_TEMPLATE" => "footer_catalog",
									"COUNT_ELEMENTS" => "Y",
									"IBLOCK_ID" => "6",
									"IBLOCK_TYPE" => "content",
									"SECTION_CODE" => "",
									"SECTION_FIELDS" => array(
										0 => "",
										1 => "",
									),
									"SECTION_ID" => $_REQUEST["SECTION_ID"],
									"SECTION_URL" => "",
									"SECTION_USER_FIELDS" => array(
										0 => "",
										1 => "",
									),
									"SHOW_PARENT_NAME" => "Y",
									"TOP_DEPTH" => "2",
									"VIEW_MODE" => "LIST",
									"NAME_COMPONENT" => ""
								),
								false
							);?>
						<?}?>
					</li>
				<?}?>
			</ul>
		</nav>
	</div>
<?}?>

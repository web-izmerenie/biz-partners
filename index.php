<?
if($_SERVER["HTTP_HOST"] != "biz-partners.ru"){
	define("CATALOG_DETAIL", "Y");
}else{
	define('MAIN', 'Y');
}
define('NO_WRAP', 'Y');
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("title", "Biz-Partners - услуги бухгалтерского аудита");
$APPLICATION->SetTitle("Главная");
?>
<?if($_SERVER["HTTP_HOST"] != "biz-partners.ru"){
	if($_SERVER["HTTP_HOST"] == "bankrotstvo-ooo.biz-partners.ru"){

		$_REQUEST["subitem"] = "bankrotstvo-ooo";
		$_REQUEST["SECTION_CODE"] = "korporativnye-yuridicheskie-uslugi";
		$_REQUEST["ELEMENT_CODE"] = "registratsiya-i-likvidatsiya-otechestvennykh-i-inostrannykh-kompaniy";

	}else if($_SERVER["HTTP_HOST"] == "razreshinie-na-rabotu.biz-partners.ru"){

		$_REQUEST["subitem"] = "razreshenie-na-rabotu";
		$_REQUEST["SECTION_CODE"] = "korporativnye-yuridicheskie-uslugi";
		$_REQUEST["ELEMENT_CODE"] = "vizovaya-podderzhka-i-razreshenie-na-rabotu-dlya-inostrannykh-grazhdan";

	}else if($_SERVER["HTTP_HOST"] == "vedenie-buh-uchet.biz-partners.ru" || $_SERVER["HTTP_HOST"] == "dev.biz-partners.ru"){

		$_REQUEST["subitem"] = "vedenie-bukhgalterskogo-ucheta";
		$_REQUEST["SECTION_CODE"] = "bukhgalterskiy-i-nalogovyy-uchet";
		$_REQUEST["ELEMENT_CODE"] = "autsorsing-bukhgalterskikh-protsessov";

	}
	require($_SERVER["DOCUMENT_ROOT"]."/uslugi/detail.php");
	}else{?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list",
		"module_mainpage_catalog",
		Array(
			"ADD_SECTIONS_CHAIN" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"COMPONENT_TEMPLATE" => ".default",
			"COUNT_ELEMENTS" => "Y",
			"IBLOCK_ID" => "6",
			"IBLOCK_TYPE" => "content",
			"SECTION_CODE" => "",
			"SECTION_FIELDS" => array(0=>"",1=>"",),
			"SECTION_ID" => $_REQUEST["SECTION_ID"],
			"SECTION_URL" => "",
			"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
			"SHOW_PARENT_NAME" => "Y",
			"TOP_DEPTH" => "2",
			"VIEW_MODE" => "LINE"
		)
	);?>

	<section class="main-advenurage">
		<div class="wrapper">
			<h1>Преимущества компании «Бизнес Партнерс»</h1>
			<ul>
				<li><img src="../bitrix/templates/main/img/main-adventure-1.png">
					<div class="text">Строгое соблюдение всех сроков: от текущих вопросов до отчетности.</div>
				</li>
				<li><img src="../bitrix/templates/main/img/main-adventure-2.png">
					<div class="text">Финансовая ответственность за предложенные решения.</div>
				</li>
				<li><img src="../bitrix/templates/main/img/main-adventure-3.png">
					<div class="text">
						Профессионализм и опытность сотрудников – более 10 лет опыта
						<br> работы.
					</div>
				</li>
				<li><img src="../bitrix/templates/main/img/main-adventure-4.png">
					<div class="text">Вы платите только за необходимые вам услуги.</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="main-news">
		<div class="wrapper">
			<div class="column">
				<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"module_news_main",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPONENT_TEMPLATE" => ".default",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => "",
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "3",
			"IBLOCK_TYPE" => "content",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "1",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => "",
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC"
		)
	);?>
			</div>
			<div class="column">
				<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"module_news_main",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"COMPONENT_TEMPLATE" => "module_news_main",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array(0=>"",1=>"",),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "4",
			"IBLOCK_TYPE" => "content",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "1",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array(0=>"",1=>"",),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "DESC",
			"SORT_ORDER2" => "ASC"
		)
	);?>
			</div>
		</div>
	</section>
<?}?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>

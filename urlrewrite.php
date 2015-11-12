<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/izmeneniya-v-zakonodatelstve/([^/]+?)/([^/]+?).php\\??(.*)#",
		"RULE" => "SECTION_CODE=\$1&ELEMENT_CODE=\$2&\$3",
		"ID" => "",
		"PATH" => "/izmeneniya-v-zakonodatelstve/detail.php",
	),
	array(
		"CONDITION" => "#^/izmeneniya-v-zakonodatelstve/([^/]+?)/\\??(.*)#",
		"RULE" => "SECTION_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/izmeneniya-v-zakonodatelstve/sections.php",
	),
	array(
		"CONDITION" => "#^/uslugi/([^/]+?)/([^/]+?).php\\??(.*)#",
		"RULE" => "SECTION_CODE=\$1&ELEMENT_CODE=\$2&\$3",
		"ID" => "bitrix:catalog.element",
		"PATH" => "/uslugi/detail.php",
	),
	array(
		"CONDITION" => "#^/uslugi/([^/]+?)/\\??(.*)#",
		"RULE" => "SECTION_CODE=\$1&\$2",
		"ID" => "bitrix:catalog.section",
		"PATH" => "/uslugi/section.php",
	),
	array(
		"CONDITION" => "#^/novosti/([^/]+?).php\\??(.*)#",
		"RULE" => "ELEMENT_CODE=\$1&\$2",
		"ID" => "",
		"PATH" => "/novosti/detail.php",
	),
);

?>

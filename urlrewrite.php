<?
$arUrlRewrite = array(
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
);

?>

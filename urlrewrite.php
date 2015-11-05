<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/uslugi/([^/]+?)/\\??(.*)#",
		"RULE" => "SECTION_CODE=\$1&\$2",
		"ID" => "bitrix:catalog.section",
		"PATH" => "/uslugi/section.php",
	),
);

?>
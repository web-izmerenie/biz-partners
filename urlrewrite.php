<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/izmeneniya-v-zakonodatelstve/(.+?)/(.+?).php(\\?|\$)#",
		"RULE" => "SECTION_CODE=\$1&ELEMENT_CODE=\$2&",
		"ID" => "",
		"PATH" => "/izmeneniya-v-zakonodatelstve/detail.php",
	),
	array(
		"CONDITION" => "#^/izmeneniya-v-zakonodatelstve/(.+?)/(\\?|\$)#",
		"RULE" => "SECTION_CODE=\$1&",
		"ID" => "",
		"PATH" => "/izmeneniya-v-zakonodatelstve/sections.php",
	),
	array(
		"CONDITION" => "#^/uslugi/(.+?)/(.+?).php(\\?|\$)#",
		"RULE" => "SECTION_CODE=\$1&ELEMENT_CODE=\$2&",
		"ID" => "",
		"PATH" => "/uslugi/detail.php",
	),
	array(
		"CONDITION" => "#^/novosti/(.+?).php(\\?|\$)#",
		"RULE" => "ELEMENT_CODE=\$1&",
		"ID" => "",
		"PATH" => "/novosti/detail.php",
	),
	array(
		"CONDITION" => "#^/uslugi/(.+?)/(\\?|\$)#",
		"RULE" => "SECTION_CODE=\$1&",
		"ID" => "",
		"PATH" => "/uslugi/section.php",
	),
);

?>

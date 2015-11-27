<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_POST['name'] and $_POST['email']){
	$section ="";

	if($_POST['section_id'] == 12)
		$section = 26;
	if($_POST['section_id'] == 13)
		$section = 27;
	if($_POST['section_id'] == 14)
		$section = 28;
	else
		$section = 29;

	$arFileds = array(
		"MODIFIED_BY" => $USER->GetID(),
		"IBLOCK_ID" => 12,
		"IBLOCK_SECTION_ID" => $section,
		"NAME" => $_POST['name'],
		"PROPERTY_VALUES" => array(
			"ATT_MAIL" => $_POST['email']
		),
		"ACTIVE" => "Y"
	);

	CModule::IncludeModule("iblock");
	$element = new CIBlockElement;
	$newElement = $element->Add($arFileds);
	print_r($_POST);
}

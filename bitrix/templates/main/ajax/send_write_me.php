<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_POST['name'] and $_POST['tel'] and $_POST['email'] and $_POST['text']){

	$text = '
		<ul>
			<li>Имя - '.$_POST['name'].'</li>
			<li>E-mail - '.$_POST['email'].'</li>
			<li>Телефон - '.$_POST['tel'].'</li>
		</ul>
		<p>'.$_POST['text'].'</p>
	';

	$arFileds = array(
		"MODIFIED_BY" => $USER->GetID(),
		"IBLOCK_ID" => 11,
		"IBLOCK_SECTION_ID" => 11,
		"NAME" => "Заявка от ".$_POST['name'],
		"ACTIVE" => "N",
		"DETAIL_TEXT" => $text
	);

	CModule::IncludeModule("iblock");
	$element = new CIBlockElement;
	$newElement = $element->Add($arFileds);

	$arEventFields = array(
		"NAME" => $_POST['name'],
		"EMAIL" => $_POST['email'],
		"TEL" => $_POST['tel'],
		"TEXT" => $_POST['text']
	);

	if(CModule::includeModule("main")){
		CEvent::Send("SEND_WRITE_ME", "s1", $arEventFields);
	}
}

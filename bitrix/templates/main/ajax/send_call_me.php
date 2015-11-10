<?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if($_POST['name'] and $_POST['tel'] and $_POST['time']){

	$text = '
		<ul>
			<li>Имя - '.$_POST['name'].'</li>
			<li>Телефон - '.$_POST['tel'].'</li>
			<li>Удобное время - '.$_POST['time'].'</li>
		</ul>
	';

	$arFileds = array(
		"MODIFIED_BY" => $USER->GetID(),
		"IBLOCK_ID" => 11,
		"IBLOCK_SECTION_ID" => 10,
		"NAME" => "Заявка от ".$_POST['name'],
		"ACTIVE" => "N",
		"DETAIL_TEXT" => $text
	);

	CModule::IncludeModule("iblock");
	$element = new CIBlockElement;
	$newElement = $element->Add($arFileds);

	$arEventFields = array(
		"NAME" => $_POST['name'],
		"TEL" => $_POST['tel'],
		"TIME" => $_POST['time']
	);

	if(CModule::includeModule("main")){
		CEvent::Send("SEND_CALL_ME", "s1", $arEventFields);
		print 'Отправлено';
		print_r($_POST);
	}
}

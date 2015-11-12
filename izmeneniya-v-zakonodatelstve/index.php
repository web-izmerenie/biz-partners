<?
define('NO_WRAP', 'Y');
define('CHANGE', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Изменения в законодательстве");
?>
<?localredirect("sections.php?SECTION_CODE=bukh-uchet", false, "301 Moved permanently");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

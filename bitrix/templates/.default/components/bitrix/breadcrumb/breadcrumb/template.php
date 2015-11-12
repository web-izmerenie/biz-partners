<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '<section class="pathway"><div class="wrapper">';
$num_items = count($arResult);
for($index = 0, $itemSize = $num_items; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1){
		$strReturn .= ' <a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a>';
	}else{
		$title = substr($title, 0, 38);
		$title = rtrim($title, "!?.,-");
		$title = substr($title, 0, strrpos($title, ' '));
		$strReturn .= '<span>'.$title.'... </span>';
	}
}
$strReturn .= '</div></section>';
return $strReturn;

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>

<section class="main-catalog">
	<div class="wrapper">
		<h1>Компания "Бизнес Партнерс" </br>
Аутсорсинг бизнес-процессов вашего предприятия</h1>
		<ul>
			<?foreach($arResult['SECTIONS'] as $arSection){
				$photo = CFile::ResizeImageGet($arSection['PICTURE'],
					array('width'=>51, 'height'=>59),
					BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
				<li><a href="<?=$arSection['SECTION_PAGE_URL'];?>">
					<img src="<?=$photo['src'];?>" alt="<?=$arSection['PICTURE']['ALT']?>">
					<div class="text"><?=$arSection['NAME'];?></div></a>
				</li>
			<?}?>
			<li>
				<div class="more-text">Предоставляем полный цикл обслуживания,
					комплексные решения и отдельные услуги для вас и вашего бизнеса. </br>
					Ведем работу с иностранными и российскими юридическими и физическими
					лицами.</div>
			</li>
		</ul>
	</div>
</section>

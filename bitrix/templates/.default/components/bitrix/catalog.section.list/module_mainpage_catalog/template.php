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
		<h1>Компания «Biz Partners» ведет работу <br>
			с иностранными и отечественными организациями, <br>
			юридическими и физическими лицами.
		</h1>
		<ul>
			<?foreach($arResult['SECTIONS'] as $arSection){?>
				<li><a href="<?=$arSection['SECTION_PAGE_URL'];?>">
					<img src="<?=$arSection['PICTURE']['SRC']?>" alt="<?=$arSection['PICTURE']['ALT']?>">
					<div class="text"><?=$arSection['NAME'];?></div></a>
				</li>
			<?}?>
			<li>
				<div class="more-text">Предлагая полный цикл обслуживания, мы предоставляем как отдельные <br>
					услуги, так и комплексные решения для вашей компании в сфере <br>
					бухгалтерского учета, подбора персонала, юридического сопровождения и <br>
					ведения бизнеса в целом.
				</div>
			</li>
		</ul>
	</div>
</section>

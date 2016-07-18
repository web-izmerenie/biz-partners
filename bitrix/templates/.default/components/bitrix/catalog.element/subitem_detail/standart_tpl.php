<section class="title">
	<div class="wrapper">
		<h1><?=$arResult['NAME'];?></h1>
		<div class="text"><?=$arResult['PREVIEW_TEXT'];?></div>
	</div>
</section>
<section class="subitem_description">
	<div class="wrapper">
		<?=$arResult['DETAIL_TEXT'];?>

		<?if($arResult['PROPERTIES']['ATT_TEXT']['~VALUE']['TEXT']){?>
			<div class="tabs visible">
				<div class="row">
					<div id="price" class="column">
						<?=$arResult['PROPERTIES']['ATT_TEXT']['~VALUE']['TEXT'];?>
					</div>
					<div id="tel" class="column"><span>Узнать подробности по телефону:</span>
						<p><?=$arResult['PROPERTIES']['ATT_TEL']['VALUE']?></p>
					</div>
				</div>
			</div>
		<?}?>
	</div>
</section>

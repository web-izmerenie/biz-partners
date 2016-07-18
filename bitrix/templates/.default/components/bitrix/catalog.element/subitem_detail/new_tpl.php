<div class="new-catalog-detail">
	<section class="title">
		<div class="wrapper">
			<h1><?=$arResult['NAME'];?></h1>
			<div class="text"><?=$arResult['~PREVIEW_TEXT'];?></div>
		</div>
	</section>
	<section class="description">
		<div class="wrapper">
			<div class="tabs visible">
				<div class="row">
					<div id="price" class="column">
						<?=$arResult['PROPERTIES']['ATT_TEXT_2']['~VALUE']['TEXT'];?>
					</div>
					<div id="download" class="column">
						<a href="<?=$arResult['PROPERTIES']['ATT_FILE']['SRC'];?>">
							<?=$arResult['PROPERTIES']['ATT_FILE']['DESCRIPTION'];?>
						</a>
					</div>
				</div>
			</div>
			<div class="about-service">
				<h2>Подробности услуги</h2>
				<ul>
					<?foreach($arResult['PROPERTIES']['ATT_MORE_SERVICE']['~VALUE'] as $k => $arMore){?>
					<li>
						<h3><?=$arResult['PROPERTIES']['ATT_MORE_SERVICE']['DESCRIPTION'][$k];?></h3>
						<?=$arMore['TEXT'];?>
					</li>
					<?}?>
				</ul>
				<a href="1" class="btn">Подробнее</a>
			</div>
		</div>
	</section>
	<section class="more-info-block">
		<div class="wrapper">
			<h2><?=$arResult['PROPERTIES']['ATT_DANGER_TEXT']['DESCRIPTION'];?></h2>
			<div class="row">
				<div class="column img">
					<?if($arResult['PROPERTIES']['ATT_DANGER_FILE']['VALUE']){?>
						<img src="<?=$arResult['PROPERTIES']['ATT_DANGER_FILE']['SRC']?>">
					<?}?>
				</div>
				<div class="column text">
					<?=$arResult['PROPERTIES']['ATT_DANGER_TEXT']['~VALUE']['TEXT'];?>
				</div>
			</div>
		</div>
	</section>
	<section class="call-button">
		<div class="text"><a href="#writeme" class="call-window">Записаться на консультацию</a>
			<p>Записываясь на консультацию с сайта <br>
				вы получаете скидку 15%

			</p>
		</div>
	</section>
	<section class="chose-us">
		<div class="wrapper">
			<h2>Почему выбирают нас?</h2>
			<ul>
				<li>
					<div class="icon"><img src="<?=$arParams['MAIN_TEMPALTE_PATH'];?>/img/chose1.png"></div>
					<p>лет опыта</p>
				</li>
				<li>
					<div class="icon">
						<p>114</p><img src="<?=$arParams['MAIN_TEMPALTE_PATH'];?>/img/chose2.png">
					</div>
					<p>выигранных процессов</p>
				</li>
				<li>
					<div class="icon">
						<p>50</p><img src="<?=$arParams['MAIN_TEMPALTE_PATH'];?>/img/chose3.png">
					</div>
					<p>постоянных клиентов</p>
				</li>
				<li>
					<div class="icon">
						<p>4</p><img src="<?=$arParams['MAIN_TEMPALTE_PATH'];?>/img/chose3.png">
					</div>
					<p>сотрудника в штате</p>
				</li>
			</ul>
		</div>
	</section>
</div>

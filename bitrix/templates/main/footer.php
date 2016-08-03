<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
	<?if(!defined('NO_WRAP')){?>
		</div>
	<?}?>
	<?$APPLICATION->IncludeFile("inc/seo_text.php", Array(
		"IBLOCK_TYPE" => "service",
		"IBLOCK_ID" => "13",
		"ELEMENT_LINK" => $_SERVER['REQUEST_URI']
	));?>
</main>
<footer>
	<div class="wrapper">
		<div id="copy" class="column">© Бизнес Партнерс, 2001-2015
			<p>
				<?$APPLICATION->IncludeComponent(
					"bitrix:news.detail",
					".default",
					array(
						"ACTIVE_DATE_FORMAT" => "d.m.Y",
						"ADD_ELEMENT_CHAIN" => "N",
						"ADD_SECTIONS_CHAIN" => "N",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"BROWSER_TITLE" => "-",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"CHECK_DATES" => "Y",
						"COMPONENT_TEMPLATE" => ".default",
						"DETAIL_URL" => "",
						"DISPLAY_BOTTOM_PAGER" => "Y",
						"DISPLAY_DATE" => "N",
						"DISPLAY_NAME" => "N",
						"DISPLAY_PICTURE" => "N",
						"DISPLAY_PREVIEW_TEXT" => "Y",
						"DISPLAY_TOP_PAGER" => "N",
						"ELEMENT_CODE" => "",
						"ELEMENT_ID" => "2",
						"FIELD_CODE" => array(
							0 => "",
							1 => "",
						),
						"IBLOCK_ID" => "1",
						"IBLOCK_TYPE" => "content",
						"IBLOCK_URL" => "",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"MESSAGE_404" => "",
						"META_DESCRIPTION" => "-",
						"META_KEYWORDS" => "-",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_TEMPLATE" => ".default",
						"PAGER_TITLE" => "Страница",
						"PROPERTY_CODE" => array(
							0 => "",
							1 => "",
						),
						"SET_BROWSER_TITLE" => "N",
						"SET_CANONICAL_URL" => "N",
						"SET_LAST_MODIFIED" => "N",
						"SET_META_DESCRIPTION" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
						"SHOW_404" => "N",
						"USE_PERMISSIONS" => "N",
						"USE_SHARE" => "N"
					),
					false
				);?>
			</p>
		</div>
		<div id="footer-menu" class="column">
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"bottom_menu",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"COMPONENT_TEMPLATE" => "bottom_menu",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => array(
					),
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "bottom",
					"USE_EXT" => "N"
				),
				false
			);?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:catalog.section.list",
				"catalog_menu",
				array(
					"ADD_SECTIONS_CHAIN" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"COMPONENT_TEMPLATE" => "footer_catalog",
					"COUNT_ELEMENTS" => "Y",
					"IBLOCK_ID" => "6",
					"IBLOCK_TYPE" => "content",
					"SECTION_CODE" => "",
					"SECTION_FIELDS" => array(
						0 => "",
						1 => "",
					),
					"SECTION_ID" => $_REQUEST["SECTION_ID"],
					"SECTION_URL" => "",
					"SECTION_USER_FIELDS" => array(
						0 => "",
						1 => "",
					),
					"SHOW_PARENT_NAME" => "Y",
					"TOP_DEPTH" => "2",
					"VIEW_MODE" => "LIST",
					"NAME_COMPONENT" => "Услуги"
				),
				false
			);?>
		</div>
		<div id="developer" class="column"><a href="http://web-izmerenie.ru/">сделано в</a></div>
	</div>
</footer>
<?if($_SERVER["HTTP_HOST"] == "bankrotstvo-ooo.biz-partners.ru"){?>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter38723445 = new Ya.Metrika({
                    id:38723445,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38723445" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?}else if($_SERVER["HTTP_HOST"] == "vedenie-buh-uchet.biz-partners.ru" || $_SERVER["HTTP_HOST"] == "dev.biz-partners.ru"){?>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter38840870 = new Ya.Metrika({
	                    id:38840870,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true,
	                    webvisor:true
	                });
	            } catch(e) { }
	        });

	        var n = d.getElementsByTagName("script")[0],
	            s = d.createElement("script"),
	            f = function () { n.parentNode.insertBefore(s, n); };
	        s.type = "text/javascript";
	        s.async = true;
	        s.src = "https://mc.yandex.ru/metrika/watch.js";

	        if (w.opera == "[object Opera]") {
	            d.addEventListener("DOMContentLoaded", f, false);
	        } else { f(); }
	    })(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/38840870" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
<?}else{?>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	(function (d, w, c) {
	(w[c] = w[c] || []).push(function() {
	try {
	w.yaCounter36048365 = new Ya.Metrika({
	id:36048365,
	clickmap:true,
	trackLinks:true,
	accurateTrackBounce:true,
	webvisor:true,
	trackHash:true
	});
	} catch(e) { }
	});

	var n = d.getElementsByTagName("script")[0],
	s = d.createElement("script"),
	f = function () { n.parentNode.insertBefore(s, n); };
	s.type = "text/javascript";
	s.async = true;
	s.src = "https://mc.yandex.ru/metrika/watch.js";

	if (w.opera == "[object Opera]") {
	d.addEventListener("DOMContentLoaded", f, false);
	} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img
	src="https://mc.yandex.ru/watch/36048365" style="position:absolute;
	left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
<?}?>
<!--noindex-->
<div class="overlay"></div>
<div id="callme" class="module-window">
	<div class="title"><img src="<?=$tplPath;?>img/green-call.png">
		<p>Заказать звонок</p>
	</div>
	<form method="post" data-send="<?=$tplPath;?>ajax/send_call_me.php">
		<input type="text" name="name" placeholder="Имя" class="require">
		<input type="text" name="tel" placeholder="Телефон" class="require">
		<input type="text" name="time" placeholder="Удобное для вас время" class="require">
		<div class="error">Ошибка отправки. Необходимо заполнить все поля</div>
		<input type="submit" value="Отправить">
		<div class="sucsess">
			<p>«Спасибо за заявку.<br>
				Мы свяжемся с вами
				в течение часа».

			</p>
		</div>
	</form>
</div>
<div id="writeme" class="module-window">
	<div class="title"><img src="<?=$tplPath;?>img/green-mail.png">
		<p>Написать нам</p>
	</div>
	<form method="post" data-send="<?=$tplPath;?>ajax/send_write_me.php">
		<input type="text" name="name" placeholder="Имя" class="require">
		<input type="text" name="email" placeholder="E-mail" class="require">
		<input type="text" name="tel" placeholder="Телефон" class="require">
		<textarea name="text" placeholder="Текст письма" class="require"></textarea>
		<div class="error">Ошибка отправки. Необходимо заполнить все поля</div>
		<input type="submit" value="Отправить">
		<div class="sucsess">
			<p>
				Спасибо за ваше
				сообщение.<br>
				Мы рассмотрим
				и свяжемся с вами.

			</p>
		</div>
	</form>
</div>
<div id="rss" class="module-window">
	<div class="title"><img src="<?=$tplPath;?>img/green-mail.png">
		<p>Подписаться на рассылку</p>
	</div>
	<form method="post" data-send="<?=$tplPath;?>ajax/send_rss.php">
		<input type="text" name="name" placeholder="Имя" class="require">
		<input type="text" name="email" placeholder="E-mail" class="require">
		<input type="hidden" name="section_id" value="<?=$GLOBALS['SECTION_ID'];?>">
		<div class="error">Ошибка отправки. Необходимо заполнить все поля</div>
		<input type="submit" value="Отправить">
		<div class="sucsess">
			<p>Спасибо.<br>
				Вы подписаны<br>
				на рассылку.
			</p>
		</div>
	</form>
</div>
<!--/noindex-->
<div style="display:none;" class="sitemap">
	<p>Fdkhgfdo dbkkbt</p>
	<a href="http://biz-partners.ru/uslugi/bukhgalterskiy-i-nalogovyy-uchet/autsorsing-bukhgalterskikh-protsessov.php?subitem=postanovka-bukhgalterskogo-ucheta&">1</a><br/>
	<a href="http://biz-partners.ru/uslugi/bukhgalterskiy-i-nalogovyy-uchet/autsorsing-bukhgalterskikh-protsessov.php?subitem=postanovka-na-nalogovyy-uchet&">2</a><br/>
	<a href="http://biz-partners.ru/uslugi/audit/audit-otchetnosti-podgotovlennoy-v-sootvetstvii-s-rsbu.php?subitem=organizatsiya-audita&">3</a><br/>
	<a href="http://biz-partners.ru/uslugi/audit/audit-otchetnosti-podgotovlennoy-v-sootvetstvii-s-rsbu.php?subitem=finansovyy-audit&">4</a><br/>
	<a href="http://biz-partners.ru/uslugi/audit/audit-otchetnosti-podgotovlennoy-v-sootvetstvii-s-rsbu.php?subitem=audit-otchetnosti&">5</a><br/>
	<a href="http://biz-partners.ru/uslugi/audit/audit-otchetnosti-podgotovlennoy-v-sootvetstvii-s-rsbu.php?subitem=audit-nalogov&">6</a><br/>
	<a href="http://biz-partners.ru/uslugi/audit/audit-otchetnosti-podgotovlennoy-v-sootvetstvii-s-rsbu.php?subitem=kadrovyy-audit&">7</a><br/>
	<a href="http://biz-partners.ru/uslugi/audit/audit-otchetnosti-podgotovlennoy-v-sootvetstvii-s-rsbu.php?subitem=audit-osnovnykh-sredstv&">8</a><br/>
	<a href="http://biz-partners.ru/uslugi/audit/audit-otchetnosti-podgotovlennoy-v-sootvetstvii-s-rsbu.php?subitem=audit-bukhgalterii&">9</a><br/>
	<a href="http://biz-partners.ru/uslugi/bukhgalterskiy-i-nalogovyy-uchet/autsorsing-bukhgalterskikh-protsessov.php">10</a><br/>
	<a href="http://biz-partners.ru/uslugi/bukhgalterskiy-i-nalogovyy-uchet/autsorsing-bukhgalterskikh-protsessov.php?subitem=nalogovoe-konsultirovanie&">11</a><br/>
	<a href="http://biz-partners.ru/uslugi/bukhgalterskiy-i-nalogovyy-uchet/konsultatsionnye-uslugi.php">12</a><br/>
	<a href="http://biz-partners.ru/uslugi/korporativnye-yuridicheskie-uslugi/registratsiya-i-likvidatsiya-otechestvennykh-i-inostrannykh-kompaniy.php?subitem=registratsiya-kompaniy&">13</a><br/>
	<a href="http://biz-partners.ru/uslugi/korporativnye-yuridicheskie-uslugi/registratsiya-i-likvidatsiya-otechestvennykh-i-inostrannykh-kompaniy.php?subitem=registratsiya-zao&">14</a><br/>
	<a href="http://biz-partners.ru/uslugi/korporativnye-yuridicheskie-uslugi/registratsiya-i-likvidatsiya-otechestvennykh-i-inostrannykh-kompaniy.php?subitem=likvidatsiya-kompaniy&">15</a><br/>
	<a href="http://biz-partners.ru/uslugi/korporativnye-yuridicheskie-uslugi/vizovaya-podderzhka-i-razreshenie-na-rabotu-dlya-inostrannykh-grazhdan.php?subitem=vizovaya-podderzhka&">16</a><br/>
	<a href="http://biz-partners.ru/uslugi/korporativnye-yuridicheskie-uslugi/vizovaya-podderzhka-i-razreshenie-na-rabotu-dlya-inostrannykh-grazhdan.php?subitem=razreshenie-na-rabotu&">17</a><br/>
</div>
</body>
</html>

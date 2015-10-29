<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
</main>
<footer>
	<div class="wrapper">
		<div id="copy" class="column">© Biz Partners, 2001-2015
			<p><b>Адрес: 107023 г. Москва,</b> <br>
				ул. Большая почтовая, 36, <br>
				18 подъезд, сектор А, 1 этаж, офис 110

			</p>
		</div>
		<div id="footer-menu" class="column">
			<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"COMPONENT_TEMPLATE" => ".default",
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
			<ul>
				<li>Каталог услуг</li>
				<li><a href="#">Бухгалтерский и налоговыйучет</a></li>
				<li><a href="#">Корпоративные юридические услуги</a></li>
				<li><a href="#">Кадровое законодательство</a></li>
				<li><a href="#">Аудит</a></li>
				<li><a href="#">Дополнительные услуги</a></li>
				<li><a href="#">Подбор персонала</a></li>
				<li><a href="#">Услуги для физических лиц</a></li>
			</ul>
		</div>
		<div id="developer" class="column"><a href="http://web-izmerenie.ru/">сделано в</a></div>
	</div>
</footer>
<div class="overlay"></div>
<div id="callme" class="module-window">
	<div class="title"><img src="../bitrix/templates/main/img/green-call.png">
		<p>Заказать звонок</p>
	</div>
	<form method="post">
		<input type="text" name="name" placeholder="Имя" class="require">
		<input type="text" name="name" placeholder="Телефон" class="require">
		<input type="text" name="name" placeholder="Удобное для вас время" class="require">
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
	<div class="title"><img src="../bitrix/templates/main/img/green-mail.png">
		<p>Написать нам</p>
	</div>
	<form method="post">
		<input type="text" name="name" placeholder="Имя" class="require">
		<input type="text" name="name" placeholder="E-mail" class="require">
		<input type="text" name="name" placeholder="Телефон" class="require">
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
	<div class="title"><img src="../bitrix/templates/main/img/green-mail.png">
		<p>Подписаться на рассылку</p>
	</div>
	<form method="post">
		<input type="text" name="name" placeholder="Имя" class="require">
		<input type="text" name="name" placeholder="E-mail" class="require">
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
</body>
</html>

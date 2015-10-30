<?
define('MAIN', 'Y');
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?>
<section class="main-catalog">
	<div class="wrapper">
		<h1>Компания «Biz Partners» ведет работу <br>
			с иностранными и отечественными организациями, <br>
			юридическими и физическими лицами.
		</h1>
		<ul>
			<li><a href="#"><img src="../bitrix/templates/main/img/catalog1.png">
					<div class="text">Бухгалтерский и налоговый учет</div></a></li>
			<li><a href="#"><img src="../bitrix/templates/main/img/catalog2.png">
					<div class="text">Корпоративные юридические услуги</div></a></li>
			<li><a href="#"><img src="../bitrix/templates/main/img/catalog3.png">
					<div class="text">Кадровое делопроизводство</div></a></li>
			<li><a href="#"><img src="../bitrix/templates/main/img/catalog4.png">
					<div class="text">Аудит</div></a></li>
			<li><a href="#"><img src="../bitrix/templates/main/img/catalog5.png">
					<div class="text">Подбор персонала</div></a></li>
			<li><a href="#"><img src="../bitrix/templates/main/img/catalog6.png">
					<div class="text">Безопасность труда на производстве</div></a></li>
			<li><a href="#"><img src="../bitrix/templates/main/img/catalog7.png">
					<div class="text">Услуги для физических лиц</div></a></li>
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
<section class="main-advenurage">
	<div class="wrapper">
		<h1>Преимущества компании «Biz Partneers»</h1>
		<ul>
			<li><img src="../bitrix/templates/main/img/main-adventure-1.png">
				<div class="text">Строгое соблюдение всех сроков: от текущих вопросов до отчетности.</div>
			</li>
			<li><img src="../bitrix/templates/main/img/main-adventure-2.png">
				<div class="text">Финансовая ответственность за предложенные решения.</div>
			</li>
			<li><img src="../bitrix/templates/main/img/main-adventure-3.png">
				<div class="text">
					Профессионализм и опытность сотрудников – более 10 лет опыта
					<br> работы.
				</div>
			</li>
			<li><img src="../bitrix/templates/main/img/main-adventure-4.png">
				<div class="text">Вы платите только за необходимые вам услуги.</div>
			</li>
		</ul>
	</div>
</section>
<section class="main-news">
	<div class="wrapper">
		<div class="column">
			<h2>Новости</h2>
			<p class="date">25.06.2015</p><a href="#">
				Заголовок новости: «Biz Partners» работают в области аутсорсинга уже
				более 10 лет. Это уверенные в своих знаниях, доброжелательные
				и ответственные специалисты, которыеф продолжают повышать
				квалификацию и развиваться по своим направлениям.  Главной задачей
				нашей команды является предоставление максимально эффективных
				и качественных решений для вашего бизнеса.
				</a>
			<div class="text">
				Пару строк о новости: «Biz Partners» работают в области аутсорсинга уже более 10 лет.
				Это уверенные в своих знаниях, доброжелательные и ответственные специалисты,
				которые продолжают повышать квалификацию и развиваться по своим направлениям.
				Главной задачей нашей команды является предоставление максимально эффективных
				и качественных решений для вашего бизнеса.

			</div><a href="#" class="news-link">Все новости</a>
		</div>
		<div class="column">
			<h2>Изменения <br> в законодательстве</h2>
			<p class="date">25.06.2015</p><a href="#">
				Разграничена налоговая ответственность за непредоставление сведений
				и документов по контрагентам
				</a>
			<div class="text">
				Подпункт "б" п. 29 ст. 1 Федерального закона от 23 июля 2013 г. № 248-ФЗ. Изменения
				вносятся в ст. 93.1 НК РФ, ст. 126 и ст. 129.1 НК РФ и вступают в силу с 1 января 2014 года.
				Ранее в ст. 93.1 НК РФ закреплялось, что отказ от представления запрашиваемых при
				проведении налоговой проверки документов или непредставление их в установленные
				сроки влекут ответственность, предусмотренную ст. 129.1 НК РФ ("Неправомерное
				несообщение сведений налоговому органу"). Согласно поправкам, совершение данного
				правонарушения теперь влечет ответственность в соответствии со ст. 126 НК РФ 
				("Непредставление налоговому органу сведений, необходимых для осуществления
				налогового контроля").

			</div>
		</div>
	</div>
</section>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "partners_list", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => "",	// Поля
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "2",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => "",	// Свойства
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
	),
	false
);?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>

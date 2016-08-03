###
* Yandex targets from subdomens
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

$ = require 'jquery'

module.exports.init = ->
	if(location.host == "bankrotstvo-ooo.biz-partners.ru" || location.host == "vedenie-buh-uchet.biz-partners.ru")

		if(location.host == "bankrotstvo-ooo.biz-partners.ru")
			idCounter = window.yaCounter38723445
		else if(location.host == "vedenie-buh-uchet.biz-partners.ru")
			idCounter = window.yaCounter38840870

		$header = $ "header"
		$headerTelephone = $header.find "#contacts a:first"
		$headerPresention = $header.find "#contacts a:last"
		$callMeBtn = $header.find "#contacts .callme a"
		$main = $ ".new-catalog-detail"
		$downloadLink = $main.find "#download a"
		$callBtn = $main.find ".call-button .call-window"
		$formWriteMe = $ "#writeme form"
		$formWriteMeSubmitBtn = $formWriteMe.find "input[type='submit']"
		$callMeFormBtn = $ "#callme form input[type='submit']"
		$headerMenu = $header.find "#menu"
		$uslugiLinkMenu = $headerMenu.find "ul li ul li a"
		$uslugiSubmenu = $ ".catalog-detail nav a"
		$footerUslugi = $ "#footer-menu ul:last li a"
		$aboutLink = $headerMenu.find "ul li:first a"
		$contactsLink = $headerMenu.find "ul li:last a"

		$headerTelephone.hover(->
			idCounter.reachGoal('HOVER_TELEPHONE', -> console.log "навели")
		)

		$downloadLink.click(->
			idCounter.reachGoal('CLICK_DOWNLOAD')
		)

		$callBtn.click(->
			idCounter.reachGoal('CALL_BUTTON')
		)

		$formWriteMeSubmitBtn.click(->
			idCounter.reachGoal('CLICK_SUBMIT_WRITE_ME')
		)

		$callMeBtn.click(->
			idCounter.reachGoal('CALL_ME_CLICK')
		)

		$callMeFormBtn.click(->
			idCounter.reachGoal('CALL_ME_CLICK_SUBMIT')
		)

		$uslugiLinkMenu.click(->
			idCounter.reachGoal('USLUGI_LINK')
		)

		$uslugiSubmenu.click(->
			idCounter.reachGoal('USLUGI_LINK')
		)

		$footerUslugi.click(->
			idCounter.reachGoal('USLUGI_LINK')
		)

		$aboutLink.click(->
			idCounter.reachGoal('ABOUT_LINK')
		)

		$contactsLink.click(->
			idCounter.reachGoal('CONTACTS_LINK')
		)

		$headerPresention.click(->
			idCounter.reachGoal('PRESENTATION')
		)

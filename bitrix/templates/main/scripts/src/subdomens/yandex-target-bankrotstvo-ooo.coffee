###
* Yandex targets from bankrotstvo-ooo
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

$ = require 'jquery'

module.exports.init = ->
	if(location.host == "bankrotstvo-ooo.biz-partners.ru")
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
			yaCounter38723445.reachGoal('HOVER_TELEPHONE')
		)

		$downloadLink.click(->
			yaCounter38723445.reachGoal('CLICK_DOWNLOAD')
		)

		$callBtn.click(->
			yaCounter38723445.reachGoal('CALL_BUTTON')
		)

		$formWriteMeSubmitBtn.click(->
			yaCounter38723445.reachGoal('CLICK_SUBMIT_WRITE_ME')
		)

		$callMeBtn.click(->
			yaCounter38723445.reachGoal('CALL_ME_CLICK')
		)

		$callMeFormBtn.click(->
			yaCounter38723445.reachGoal('CALL_ME_CLICK_SUBMIT')
		)

		$uslugiLinkMenu.click(->
			yaCounter38723445.reachGoal('USLUGI_LINK')
		)

		$uslugiSubmenu.click(->
			yaCounter38723445.reachGoal('USLUGI_LINK')
		)

		$footerUslugi.click(->
			yaCounter38723445.reachGoal('USLUGI_LINK')
		)

		$aboutLink.click(->
			yaCounter38723445.reachGoal('ABOUT_LINK')
		)

		$contactsLink.click(->
			yaCounter38723445.reachGoal('CONTACTS_LINK')
		)

		$headerPresention.click(->
			yaCounter38723445.reachGoal('PRESENTATION')
		)

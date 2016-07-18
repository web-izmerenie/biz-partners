###
* Catalog detail page scripts
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

$ = require 'jquery'

module.exports.init = ->
	$main = $ '.services'
	$links = $main.find '> ul > li > a'
	$tabs = $main.find '.tabs'
	$aboutServ = $ '.about-service'
	$aboutServList = $aboutServ.find 'ul li'
	$aboutServBtn = $aboutServ.find '.btn'
	aboutServBtnCnt = parseFloat($aboutServBtn.attr('href'))

	$links.click (e) ->
		tab_id = $(@).attr 'href'

		return false if $(@).hasClass 'active'

		do e.preventDefault
		$links.removeClass 'active'
		$tabs.hide().removeClass 'active'

		$(@).addClass 'active'
		$(tab_id).fadeIn(
			700,
			->
				$(@).addClass 'active'
		)

	do $aboutServList.hide
	$aboutServList.slice(0, aboutServBtnCnt).show()
	console.log($aboutServList.length)

	$aboutServBtn.click (e) ->
		do e.preventDefault
		aboutServBtnCnt++
		$aboutServList.slice(0, aboutServBtnCnt).fadeIn()
		$(@).hide() if $aboutServList.length == aboutServBtnCnt

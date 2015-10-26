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

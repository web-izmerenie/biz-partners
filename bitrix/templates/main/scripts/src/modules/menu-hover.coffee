###
* effect from hover menu
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

$ = require 'jquery'

module.exports.init = ->
	$main = $ '#menu'
	$mainItems = $main.find 'li'

	$mainItems.hover(
		->
				$(@).find('ul').stop( true, true ).fadeIn()
		->
			$(@).find('ul').stop( true, true ).fadeOut()
	)

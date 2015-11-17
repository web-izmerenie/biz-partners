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
	speedAnimation = 300

	$mainItems.hover(
		->
				$(@).find('ul').stop(true, true).slideDown(speedAnimation)
		->
			$(@).find('ul').stop(true, true).slideUp(speedAnimation)
	)

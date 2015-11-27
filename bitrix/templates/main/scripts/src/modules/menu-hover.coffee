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
	speedAnimation = 400

	$mainItems.hover(
		->
				$(@).children('ul').stop(false, true).slideDown(speedAnimation)
		->
			$(@).children('ul').stop(false, true).slideUp(speedAnimation)
	)

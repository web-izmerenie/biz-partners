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
	animateComplete = false

	$mainItems.hover(
		->
			$(@).find('ul').show().removeClass().addClass('animated flipInX')
		->
			$(@).find('ul').removeClass().addClass('animated flipOutX')
	)

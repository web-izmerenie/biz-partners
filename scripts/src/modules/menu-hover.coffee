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
	animateComplete = true

	$mainItems.hover(
		->
			if animateComplete
				$(@).find('ul').show().removeClass().addClass('animated flipInX')
				animateComplete = false
		->
			$(@).find('ul').removeClass().addClass('animated flipOutX').fadeOut()
			animateComplete = true
	)

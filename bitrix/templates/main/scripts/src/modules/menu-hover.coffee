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

	$mainItems.hover (->
		clearTimeout $.data(this, 'timer')
		$(@).children('ul').stop(true, true).slideDown(speedAnimation)
		return
	), ->
		$.data this, 'timer', setTimeout($.proxy((->
			$(@).children('ul').stop(true, true).slideUp(speedAnimation)
			return
		), this), 100)
		return

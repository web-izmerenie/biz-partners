###
* Catalog scripts
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

$ = require 'jquery'

module.exports.init = ->

	$main = $ '.catalog'
	$sectionslist = $main.find '.catalog-sections'
	$items = $sectionslist.find '.item'
	$link = $items.find '> a'
	$orig = null
	$hover = null

	$link.hover(
		->
			$orig = $(@).find '.original'
			$hover = $(@).find '.hover'

			do $orig.hide
			do $hover.show
		->
			do $hover.hide
			do $orig.show
	)

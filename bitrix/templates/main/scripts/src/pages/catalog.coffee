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
	$img = null
	$src = null

	$link.hover(
		->
			$img = $(@).find '> img'
			$src = $img.attr 'src'

			$img.attr('src', $img.data('hover'))
		->
			$img.attr('src', $src)
	)

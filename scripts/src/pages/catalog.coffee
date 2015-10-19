###
* Catalog scripts
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

module.exports.init = ->
	$ = require 'jquery'
	wookmark = require 'wookmark'

	$main = $ '.catalog'
	$sectionslist = $main.find '.catalog-sections'
	$items = $sectionslist.find '.item'

	do $sectionslist.wookmark

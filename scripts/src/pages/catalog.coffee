###
* Catalog scripts
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

$ = require 'jquery'
wookmark = require 'wookmark'

module.exports.init = ->

	$main = $ '.catalog'
	$sectionslist = $main.find '.catalog-sections'
	$items = $sectionslist.find '.item'

	do $sectionslist.wookmark

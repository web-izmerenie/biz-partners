###
* Main scripts file
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

$ = require 'jquery'

catalog = require './pages/catalog.coffee'
menu = require './modules/menu-hover.coffee'

$ ->
	do menu.init
	do catalog.init

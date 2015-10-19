###
* Main scripts file
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

$ = require 'jquery'

catalog = require './pages/catalog.coffee'

$ ->
	do catalog.init

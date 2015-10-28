###
* Main scripts file
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

$ = require 'jquery'

catalog = require './pages/catalog.coffee'
catalogDetail = require './pages/catalog-detail.coffee'
menu = require './modules/menu-hover.coffee'
forms = require './modules/forms.coffee'
header = require './modules/header.coffee'

$ ->
	do menu.init
	do forms.init
	do catalog.init
	do catalogDetail.init
	do header.init

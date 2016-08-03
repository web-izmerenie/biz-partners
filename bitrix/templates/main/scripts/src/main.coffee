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
seo = require './modules/seo_text.coffee'
yandexTarget = require './subdomens/yandex-target'

$ ->
	do menu.init
	do catalog.init
	do catalogDetail.init
	do header.init
	do seo.init

window.onload = ->
	do forms.init
	do yandexTarget.init

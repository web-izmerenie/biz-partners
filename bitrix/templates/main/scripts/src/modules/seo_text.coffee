###
* action seo text
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

$ = require 'jquery'

module.exports.init = ->
	$('.additional-text').click(->
		if($(@).hasClass 'active-seo')
			$(@).animate
				'height': '150px'
				500
			.removeClass 'active-seo'

		else
			$(@).animate
				'height': '100%'
				500
			.addClass 'active-seo'
	)

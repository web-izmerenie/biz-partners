###
* Scripts from module-window, validation form and Ajax send
*
* @author Andrey Chechkin
* @license GNU/AGPLv3
* @see {@link https://www.gnu.org/licenses/agpl-3.0.txt|License}
###

$ = require 'jquery'

module.exports.init = ->
	$callWindow = $ '.call-window'
	$overlay = $ '.overlay'
	$moduleWindow = $ '.module-window'
	$form = $moduleWindow.find 'form'
	$errorMessage = $form.find '.error'
	$sucsessMessage = $form.find '.sucsess'
	speedAnimation = 500

	$overlay.click ->
		do $moduleWindow.hide
		do $sucsessMessage.hide
		$errorMessage.slideUp(speedAnimation)
		$overlay.fadeOut(speedAnimation)
		do $form.trigger 'reset'

	$callWindow.click (e) ->
		id = $(@).attr 'href'

		do e.preventDefault
		$overlay.fadeIn(speedAnimation, -> $(id).show())

	$form.submit (e) ->
		error = false
		input = $(@).find '.require'
		errorMessage = $(@).find '.error'
		sucsessMessage = $(@).find '.sucsess'

		do e.preventDefault

		input.each ->
			$(@).val '' if $(@).val().replace(/\s/g, '') == ''
			error = true if $(@).val() == ''

		if error
			errorMessage.slideDown(speedAnimation)
		else
			errorMessage.slideUp(speedAnimation)
			sucsessMessage.css
				display: 'flex',
				opacity: 0
			sucsessMessage.animate
				opacity: 1
				speedAnimation

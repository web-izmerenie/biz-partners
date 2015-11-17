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
	speedAnimation = 300

	$overlay.click ->
		do $moduleWindow.hide
		do $sucsessMessage.hide
		$errorMessage.slideUp(speedAnimation)
		$overlay.fadeOut(speedAnimation)
		$form.trigger 'reset'
		return

	$callWindow.click (e) ->
		id = $(@).attr 'href'

		do e.preventDefault
		$overlay.fadeIn(speedAnimation)
		$(id).fadeIn(speedAnimation)

	$form.submit (e) ->
		error = false
		input = $(@).find '.require'
		errorMessage = $(@).find '.error'
		sucsessMessage = $(@).find '.sucsess'
		$tel = $(@).find 'input[name="tel"]'
		regTel = /^[+]{0,1}[- (),0-9]{5,}$/
		$mail = $(@).find 'input[name="email"]'
		regMail = /^([0-9a-zA-Z]([-.w]*[0-9a-zA-Z])*@[0-9a-zA-Z]([-.w]*[0-9a-zA-Z])+[a-zA-Z])$/
		$sendUrl = $(@).data 'send'

		do e.preventDefault

		input.each ->
			$(@).val '' if $(@).val().replace(/\s/g, '') == ''
			error = true if $(@).val() == ''

		if $tel.length == 1
			if regTel.test($tel.val()) == false
				error = true

		if $mail.length == 1
			if regMail.test($mail.val()) == false
				error = true

		if error
			errorMessage.slideDown(speedAnimation)
		else
			$.ajax
				type: "POST"
				url: $sendUrl
				data: $(@).serialize()
				error: (jqXHR, textStatus, errorThrown) ->
					alert 'Ошибка при отправке #{textStatus}'
				success: ->
					errorMessage.slideUp(speedAnimation)
					sucsessMessage.css
						display: 'flex',
						opacity: 0
					sucsessMessage.animate
						opacity: 1
						speedAnimation

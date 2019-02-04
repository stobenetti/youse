Common.header = function () {
	const $window = $(window)
	const $body = $(document.body)

	// Menu Toggle
	$('.menu-toggle').on('click', () => {
		$body.toggleClass('menu-toggled')

		if ($body.is(`.menu-toggled`))
			$window.trigger(`cad.backdrop.show`)
		else
			$window.trigger(`cad.backdrop.hide`)
	})

	$(window).on(`cad.backdrop.off`, () => $body.removeClass('menu-toggled'))

	const loginModal = $('.component-login-modal')
	$('.header-login-button').on('click', () => loginModal.modal('show'))
}

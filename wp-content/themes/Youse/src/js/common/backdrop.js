Common[`backdrop`] = () => {
	const wrapper = $(`.gl-backdrop`)
	const $window = $(window)

	$window.on(`cad.backdrop.show`, () => {
		wrapper.addClass(`active`)
		$window.trigger(`cad.backdrop.on`)
	})

	$window.on(`cad.backdrop.hide`, () => {
		wrapper.removeClass(`active`)
		$window.trigger(`cad.backdrop.off`)
	})

	$window.on(`cad.backdrop.toggle`, () => {
		wrapper.toggleClass(`active`)

		const event = wrapper.is(`.active`) ? `on` : `off`
		$window.trigger(`cad.backdrop.${event}`)
	})

	wrapper.on(`click`, () => $window.trigger(`cad.backdrop.hide`))
}

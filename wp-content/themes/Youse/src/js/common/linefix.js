Common.linefix = () => {
	const wrappers = $('.gl-line-fix');
	const children = wrappers.map((i, el) => $(el).children())

	const calculateFixItem = () => {
		wrappers.each(i => {
			let scroll = children[i].first().offset().top

			children[i].removeClass('line-fix-item')
				.each((i, el) => {
					if (i == 0) return;
					const $el = $(el)
					if ($el.offset().top > scroll) {
						$el.addClass('line-fix-item')
						scroll = $el.offset().top
					}
				})
		})
	}

	if (wrappers.length)
		$(window).on('resize', calculateFixItem)

	calculateFixItem()
}
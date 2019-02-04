(function () {
	$(function () {
		const body = $(document.body)
		body.attr('class').trim().split(' ').forEach(key => {
			if (Page[key]) Page[key]()
		})

		for (let i in Common) Common[i]()

		body.addClass('js-loaded');

		for (let c in Component) {
			const wrapper = $(`.` + c)

			if (wrapper.length)
				Component[c](wrapper)
		}
	});
})();

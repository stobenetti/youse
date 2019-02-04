Page['home'] = () => {
	$('.partner-list').slick({
		arrows: false,
		dots: true,
		autoplay: true,
		autoplaySpeed: 2000,
		lazyLoad: 'ondemand',
		responsive: [
			{
				breakpoint: Infinity,
				settings: 'unslick',
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				},
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				},
			},
		],
	})
}

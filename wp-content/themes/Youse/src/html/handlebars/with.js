module.exports = (context, options) => {
	return typeof options.hash.index != 'undefined' ? options.fn(context[options.hash.index]) : options.fn(context)
}

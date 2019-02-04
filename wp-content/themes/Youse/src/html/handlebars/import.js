const Handlebars = require('handlebars')

module.exports = function (file, obj) {
	const attribs = Object.keys(obj.hash).map(key => `${key}="${obj.hash[key]}"`).join(' ')
	return new Handlebars.SafeString(`<import ${attribs}>${file}</import>`)
}

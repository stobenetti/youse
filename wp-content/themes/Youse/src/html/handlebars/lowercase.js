module.exports = str => {
	if (str && str.string)
		return str.string.toLowerCase()
	return (str || '').toLowerCase()
}

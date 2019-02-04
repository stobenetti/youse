module.exports = cache => {
	const key = Object.keys(require.cache).filter(key => key.indexOf(cache) > -1).shift()
	delete require.cache[key];
}

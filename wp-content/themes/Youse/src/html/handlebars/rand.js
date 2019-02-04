module.exports = (...args) => {
	const chance = args.length > 1 ? args[0] : 2
	return !!(Math.round(Math.random() * Math.pow(10, chance.toString().length)) % chance)
}

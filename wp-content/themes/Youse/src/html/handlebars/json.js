module.exports = json => {
	try {
		return JSON.parse(json)
	} catch (e) {
		console.log(`Não foi possível fazer o parse do JSON '${json}'`)
	}
	return json
}

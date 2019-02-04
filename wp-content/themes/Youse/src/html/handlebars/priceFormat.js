module.exports = value => ((parseInt(value) || 0) / 100).toFixed(2).replace('.', ',')

module.exports = function (a, b) {
	var next = arguments[arguments.length - 1];
	return (typeof a == 'string' && typeof b == 'string' ? a.toLowerCase() == b.toLowerCase() : a == b) ? next.fn(this) : next.inverse(this);
}

//Usage in template
//{{#eq type "all" }}
//<button class="orderer" data-target="sortableAnswers_{{type}}">save order</button>
//{{/eq}}

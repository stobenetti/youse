module.exports = function (a, b) {
	var next = arguments[arguments.length - 1];
	return (a != b) ? next.fn(this) : next.inverse(this);
}

//Usage in template
//{{#neq type "all" }}
//<button class="orderer" data-target="sortableAnswers_{{type}}">save order</button>
//{{/neq}}

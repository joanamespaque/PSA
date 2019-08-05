function getStyle(elem, prop) {
	if (elem.currentStyle) { //IE8
		prop = prop.replace(/-([a-z])/gi, function (value) {
			return value.toLowerCase();
		});
		return elem.currentStyle[prop];
	} else if (window.getComputedStyle) { //Navegadores modernos
		prop = prop.replace(/([A-Z])/g, '-$1').toLowerCase();

		return window.getComputedStyle(elem, null).getPropertyValue(prop);
	}
}
var countA = 0;
var countD = 0;
var ul = $('.navbar ul');
var itens = $('.navItem');

function fonte(e) {
	var elementos = $(".acessibilidadeFonte");
	// var ulWidth = ul.width();
	if (e == 'a') {
		if ((countA >= 0) && (countA < 8)) {
			if ((countD !== countA) && (countD === 0)) {
				countA += 1;
			} else if (countD !== 0) {
				countD -= 1;

			} else {
				countA += 1;
			}
		}
	} else if ('d') {
		if ((countD >= 0) && (countD < 5)) {
			if ((countA !== countD) && (countA === 0)) {
				countD += 1;
			} else if (countA !== 0) {
				countA -= 1;
			} else {
				countD += 1;
			}
		}
	}
	for (let i = 0; i < elementos.length; i++) {
		var fontSizeItem = getStyle(elementos[i], 'font-size');
		var size = parseInt(fontSizeItem.substr(0, fontSizeItem.length - 2));
		if (e == 'a') {
			if ((countA >= 0) && (countA < 8)) {
				elementos[i].style.fontSize = (size + 1).toString() + 'px';
			}
		} else if ('d') {
			if ((countD >= 0) && (countD < 5)) {
				elementos[i].style.fontSize = (size - 1).toString() + 'px';
			}
		}
	}
	var soma = 0;
	for (let i = 0; i < itens.length; i++) {
		soma += itens[i].offsetWidth;
	}
	if($('body').width() >= 753){
		if (ul.is('[navInicial]')) {
			ul.css({
				'width': (soma + 2) + 'px'
			});
		} else {
			ul.css({
				'width': (soma + 76) + 'px'
			});
		}
	}
}
$(window).on('resize', function() {
	var soma = 0;
	for (let i = 0; i < itens.length; i++) {
		soma += itens[i].offsetWidth;
	}
	if($('body').width() >= 753){
		if (ul.is('[navInicial]')) {
			ul.css({
				'width': (soma + 2) + 'px'
			});
		} else {
			ul.css({
				'width': (soma + 76) + 'px'
			});
		}
	}
});

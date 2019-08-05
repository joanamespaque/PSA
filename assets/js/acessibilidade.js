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

function fonte(e) {
	ul = $('.navbar ul');
	ulWidth = ul.width();
	var elementos = $(".acessibilidadeFonte");
	if (e == 'a') {
    	if ((countA >= 0) && (countA < 8)) {
        if((countD !== countA)&&(countD === 0)){
            countA += 1;            
        }else if(countD !== 0){
            countD -= 1;

        } else {
            countA +=1;
        } 
        console.log("width aumentado");
        if (ul.is('[navInicial]')) {
			ul.css({
				'width': (ulWidth + 6) + 'px'
			});
		} else {
			ul.css({
				'width': (ulWidth + 20) + 'px'
			});
        }      
		console.log("countA " + countA);
		console.log("countD " + countD);
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
			if (ul.is('[navInicial]')) {
				ul.css({
					'width': (ulWidth - 6) + 'px'
				});
			} else {
				ul.css({
					'width': (ulWidth - 20) + 'px'
				});
			}
			console.log("countA " + countA);
			console.log("countD " + countD);
		}
	}
	for (let i = 0; i < elementos.length; i++) {
		var fontSizeItem = getStyle(elementos[i], 'font-size');
		var size = parseInt(fontSizeItem.substr(0, fontSizeItem.length - 2));
		if (e == 'a') {
            if ((countA >= 0) && (countA < 8)) {
                console.log("fonte aumentada");
                elementos[i].style.fontSize = (size + 1).toString() + 'px';
            }
		} else if ('d') {
            if ((countD >= 0) && (countD < 5)) {
                    elementos[i].style.fontSize = (size - 1).toString() + 'px';
            }
		}
	}
}

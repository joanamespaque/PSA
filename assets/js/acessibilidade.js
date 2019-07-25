function getStyle(elem, prop){
    if (elem.currentStyle) { //IE8
        prop = prop.replace(/-([a-z])/gi, function (value) {
            return value.toLowerCase();
        });
        return elem.currentStyle[prop];
    } else if (window.getComputedStyle) {//Navegadores modernos
        prop = prop.replace(/([A-Z])/g, '-$1').toLowerCase();
        
        return window.getComputedStyle(elem, null).getPropertyValue(prop);
    }
}
function fonte(e){
    ul = $('.navbar ul');
    ulWidth = ul.width();
    var elementos = $(".acessibilidadeFonte");
    if(e == 'a'){
        if(ul.is('[navInicial]')){
            ul.css({ 'width': (ulWidth+7)+'px' });
        } else{
            ul.css({ 'width': (ulWidth+20)+'px' });
        }
    } else if ('d'){
        if(ul.is('[navInicial]')){
            ul.css({ 'width': (ulWidth-7)+'px' });
        } else{
            ul.css({ 'width': (ulWidth-20)+'px' });
        }

    }
    for (let i = 0; i < elementos.length; i++) {
        var fontSizeItem = getStyle(elementos[i], 'font-size');
        var size = parseInt(fontSizeItem.substr(0, fontSizeItem.length-2));
        if(e == 'a'){
            elementos[i].style.fontSize = (size+1).toString()+'px';
            
        }else if('d'){
            elementos[i].style.fontSize = (size-1).toString()+'px';
        }
    }
}
document.querySelector('.active').classList.remove('active');
document.querySelector('.atividades').classList.add('active');
$('.criar').click(function() {
    let expandir = $(this).attr('expandir');
    if(expandir === "false"){
        $('.opcoes').css("display", "block");
        $(this).attr('expandir', true);
        console.log("Oi");
    } else{
        $('.opcoes').css("display", "none");
        $(this).attr('expandir', false);
        console.log("tchau");
    }
});
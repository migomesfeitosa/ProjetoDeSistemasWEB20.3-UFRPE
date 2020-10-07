

$('.container_usuario').mousemove(function (e) { 
    $('.drop-menu').css({"visibility":"initial","display":"block"});
    
});
$('.drop-menu').mousemove(function (e) { 
    $('.drop-menu').css({"visibility":"initial","display":"block"});
    
});
$('.drop-menu').mouseout(function () { 
    $('.drop-menu').css({"visibility":"hidden","display":"none"});
});
$('.container_usuario').mouseout(function () { 
    $('.drop-menu').css({"visibility":"hidden","display":"none"});
});

$('#btnInicio').click(function (e) { 
    e.preventDefault();
    $('#btnInicio').css({'color':'tomato'});
    $('#btnCardapio').css({'color':'white'});
    $('#btnPedido').css({'color':'white'});
    $('#btnSobre').css({'color':'white'});

    window.location.href = "/";

});

$('#btnCardapio').click(function (e) { 
    e.preventDefault();
    $('#btnInicio').css({'color':'white'});
    $('#btnCardapio').css({'color':'tomato'});
    $('#btnPedido').css({'color':'white'});
    $('#btnSobre').css({'color':'white'});
    window.location.href = "/cardapioPrincipal?index";
});

$('#btnPedido').click(function (e) { 
    e.preventDefault();
    $('#btnInicio').css({'color':'white'});
    $('#btnCardapio').css({'color':'white'});
    $('#btnPedido').css({'color':'tomato'});
    $('#btnSobre').css({'color':'white'});
    window.location.href = "/pedidoUsuario?index";
});

$('#btnSobre').click(function (e) { 
    e.preventDefault();
    $('#btnInicio').css({'color':'white'});
    $('#btnCardapio').css({'color':'white'});
    $('#btnPedido').css({'color':'white'});
    $('#btnSobre').css({'color':'tomato'});
});
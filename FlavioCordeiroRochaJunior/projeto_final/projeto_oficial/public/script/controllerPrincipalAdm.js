


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



$('#btnCardapio').click(function (e) {
    e.preventDefault();

    $('#btnCardapio').css({'color':'tomato'});
    $('#btnPedido').css({'color':'white'});
    $('#btnSobre').css({'color':'white'});
    window.location.href = "/cardapio?index";

});

$('#btnPedido').click(function (e) {
    e.preventDefault();

    $('#btnCardapio').css({'color':'white'});
    $('#btnPedido').css({'color':'tomato'});
    $('#btnSobre').css({'color':'white'});
    window.location.href="/pedido?index";
});

$('#btnSobre').click(function (e) {
    e.preventDefault();

    $('#btnCardapio').css({'color':'white'});
    $('#btnPedido').css({'color':'white'});
    $('#btnSobre').css({'color':'tomato'});
    window.location.href = "/usuario?index";
});

$('#btnFuncionario').click(function (e){
    e.preventDefault();
    $('#btnCardapio').css({'color':'white'});
    $('#btnPedido').css({'color':'white'});
    $('#btnSobre').css({'color':'white'});
    $('#btnFuncionario').css({'color':'tomato'});
    window.location.href = "/funcionario?index";

})
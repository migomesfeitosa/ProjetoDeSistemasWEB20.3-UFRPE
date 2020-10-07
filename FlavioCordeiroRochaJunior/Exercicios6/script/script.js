var img = 1
$(".anterior").click(function (event){
    switch(img){
        case 3:
            img = 2;
            $(".imagem").css('background-image','url(imagem2.jpg)');
            break;
        case 2:
            $(".imagem").css('background-image','url(imagem1.jpg)');
            img = 1;
            break;
        case 1:
            $(".imagem").css('background-image','url(imagem3.jpg)');
            img = 3;
            break;
    }
});

function posterior(event){
    switch(img){
        case 1:
            img = 2;
           $(".imagem").css('background-image','url(imagem2.jpg)');
            break;
        case 2:
            
            img = 3;
            $(".imagem").css('background-image','url(imagem3.jpg)');
            break;
        case 3:
            
            img = 1;
            $(".imagem").css('background-image','url(imagem1.jpg)');
            break;
    }
}

$(".posterior").click(posterior);

setInterval(posterior,3000);


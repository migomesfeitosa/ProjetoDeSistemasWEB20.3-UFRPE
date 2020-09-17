$(document).ready(function() {
    var atual = 1;

    setImage();

    function setImage(){
        $("#carrossel").css({"background-image":"url(img/" + atual + ".jpg"});
    }

    setInterval(function(){
        if (atual == 5){
            atual = 1;
        } else{
            atual++;
        }
        setImage();
    }, 5000);

    $("#previous").click(function(){
        if (atual <= 1){
            atual = 5;
        } else{
            atual--;
        }
        setImage();
    })

    $("#next").click(function(){
        if (atual >= 5){
            atual = 1
        } else{
            atual++;
        }
        setImage();
    })
});
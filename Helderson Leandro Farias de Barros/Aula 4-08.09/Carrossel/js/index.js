$(document).ready(function() {
    var atual = 1;
    var imagens = {1:"https://wallpapercave.com/wp/OeKvIK6.jpg",
    2: "https://wallpaperaccess.com/full/2495654.jpg",
    3: "https://wallpapercave.com/wp/wp2014803.jpg",
    4: "https://wallpaperaccess.com/full/1477316.jpg",
    5: "https://wallpaperaccess.com/full/2298969.jpg"
    };

    setImage();

    function setImage(){
        $("#carrossel").css({"background-image":"url(" + imagens[atual]+ ")"});
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
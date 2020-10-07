
/*var xmlAjax = new XMLHttpRequest();
var cidade = "sao paulo";
xmlAjax.open("GET","http://api.openweathermap.org/data/2.5/weather?q=sao paulo,55,BR&appid=cea92b98b002497444773faf51f22dee");

xmlAjax.onreadystatechange = function (){
    document.body.innerText = xmlAjax.responseText;
}
xmlAjax.send();
*/
$('.botao').click(function(event){
    var cidade = $('.textfield').val();
    var xmlAjax = new XMLHttpRequest();
   
    xmlAjax.open("GET","http://api.openweathermap.org/data/2.5/weather?q="+cidade+",55,BR&appid=cea92b98b002497444773faf51f22dee");

    xmlAjax.onreadystatechange = function (){
    var json = JSON.parse(xmlAjax.responseText);
    
    $('#long').text(json.coord.lon);
    $('#lat').text(json.coord.lat);
    $('#cidade').text(json.name);
    $('#vento').text(json.wind.speed);
    $('#pressao').text(json.main.pressure);
    $('#umidade').text(json.main.humidity);
}
xmlAjax.send();
});

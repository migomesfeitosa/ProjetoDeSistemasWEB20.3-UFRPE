function getData(){
    cidade = document.getElementById("cidade")
    var xmlAjax = new XMLHttpRequest();
    xmlAjax.open("GET", "http://api.openweathermap.org/data/2.5/weather?q="+cidade.value+"&appid=5fd9e56fe9f8b1492c69958218ee8def&lang=pt_br&units=metric", true);
    xmlAjax.onload = function (e) {
      if (xmlAjax.readyState === 4) {
        if (xmlAjax.status === 200) {
          var data = JSON.parse(xmlAjax.responseText);
          document.getElementById("fundo").style.visibility = 'visible';
          document.getElementById("icone").src = "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png"
          document.getElementById("cidade-nome").innerText = data.name;
          document.getElementById("descricao").innerText = data.weather[0].description;
          document.getElementById("temperatura").innerText = data.main.temp + "°";
          document.getElementById("umidade").innerText = "Umidade: " + data.main.humidity + "%";
          document.getElementById("sensacao").innerText = "Sensação Térmica: " + data.main.feels_like + "°"
          
        } else {
          console.error(xmlAjax.statusText);
        }
      }
    };
    xmlAjax.onerror = function (e) {
      console.error(xmlAjax.statusText);
    };
    xmlAjax.send(null);

}

document.getElementById("pesquisar").onclick = function(){
    getData();
}

    function procurar(){
        var cidade = document.getElementById("cidade").value;
        var humidade = document.getElementById("humi");
        var temperatura = document.getElementById("temp");
        var vento = document.getElementById("vent");
        var tmax = document.getElementById("tmax");
        var tmin = document.getElementById("tmin");
        var nuvens = document.getElementById("nuv");
    
        var ajax = new XMLHttpRequest();
    
        ajax.open("GET","http://api.openweathermap.org/data/2.5/weather?q="+cidade+"&appid=63fdd93d9a13e20018e653478a84cab3&lang=pt_br&units=metric",true);
    
        ajax.onreadystatechange = function(){
        
            if(ajax.readyState === 4 && ajax.status===200){
                var retorno = JSON.parse(ajax.responseText);
    
                temperatura.value = retorno.main.temp +"°C";
                humidade.value = retorno.main.humidity+"%";
                vento.value = retorno.wind.speed+" m/s";
                tmax.value = retorno.main.temp_max+"°C";
                tmin.value = retorno.main.temp_min+"°C";
                nuvens.value = retorno.clouds.all+"% Nublado";
        
            }
        }	
    
        ajax.send();
    }	
   
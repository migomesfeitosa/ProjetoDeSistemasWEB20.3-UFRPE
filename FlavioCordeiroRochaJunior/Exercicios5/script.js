window.onload = function (){
    var campo = document.getElementById("numero");
    var botao = document.getElementById("botao");
    var saida = document.getElementById("saida");

    var entrada = document.getElementById("entrada");
    var saida = document.getElementById("saida");



    botao.onclick = function (){
    
    campo.disabled = true;
    botao.disabled = true;
    entrada.style.visibility = "hidden";
    entrada.style.display = "none";

    saida.style.visibility = "initial";
    saida.style.display = "initial";

    var min = parseInt(campo.value);
    var h=0,m=0,s=0;
    if(min>=60){
        if(min%60!=0){
            m = min%60;
            h = ((min - (min%60))/60);
        }else{
            h = min/60;
            min-=h*60;
        }
    }else{
        m = min
    }
    
    
    var temp_h = h>9?h:"0"+h;
    var temp_m = m>9?m:"0"+m;
    var temp_s = s>9?s:"0"+s;
    saida.innerText = temp_h+" : "+temp_m+" : "+temp_s;
    
    var time = setInterval(function (){
        
        
        if(s>0){
            s--;
        }
        if(s==0 && m>0){
            s=59;
            m--;
        }

        if(m==0 && h>=1){
            m=59;
            s=59;
            h--;
        }
    
        temp_h = h>9?h:"0"+h;
        temp_m = m>9?m:"0"+m;
        temp_s = s>9?s:"0"+s;
        
        saida.innerText = temp_h+" : "+temp_m+" : "+temp_s;
        
        if(h==0 && m==0 && s==0){
            clearInterval(time);
            
            campo.disabled = false;
            botao.disabled = false;

            entrada.style.visibility = "initial";
            entrada.style.display = "flex";
            
            
        
            saida.style.visibility = "hidden";
            saida.style.display = "none";
        }
    },1000);
    };
    
    
};
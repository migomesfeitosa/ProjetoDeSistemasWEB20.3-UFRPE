''
   var hor=0,min=0, seg=59;	

   var capturando = "";

   function play(){
     
    capturando = document.getElementById('tempo').value;
    minutos = document.getElementById('minutos');
    segudnos = document.getElementById('segundos');
    horas = document.getElementById('horas')
    document.getElementById('inicio').style.display = 'none';

 
    if(capturando>60){
      hor=parseInt(capturando / 60);
      min = (capturando ) - (hor * 60)  ;  

      }else{
      hor=0;
      min=capturando;
    }

    if(min>0){
    min = min-1;
    }
    seg=59;

    setInterval(function(){

      if(hor==0 && min==0 && seg==0 ){
        clearInterval();
        document.getElementById('inicio').style.display = 'inline';
        document.getElementById('tempo').value ='0';
       ;
      }

        if (min == 0 && hor > 0){
        hor-=1;
        min =59;
        }
        if(seg>0){ 
            seg-=1;   
        } else if(seg == 0 && min >0){
          seg =59; min-=1;  
        } else if(seg == 0 && min ==0  && hor>0){
          hor-=1; min=59;  
        }
        horas.innerHTML=hor+"";
        minutos.innerHTML = min+"";
        segundos.innerHTML = seg+ "";

    }, 1000);

   }
   


     
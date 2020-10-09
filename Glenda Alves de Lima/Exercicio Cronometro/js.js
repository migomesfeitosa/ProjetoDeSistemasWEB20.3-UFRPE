''
   var hor=0,min=0, seg=59;	

   var input = "";

   function iniciar(){
     
    input = document.getElementById('campo').value;
    minutos = document.getElementById('minutos');
    segudnos = document.getElementById('segundos');
    horas = document.getElementById('horas');

  
 
    if(input>60){
    hor=parseInt(input / 60);
    min = (input ) - (hor * 60)  ;
       
    }else{
      hor=0;
      min=input;
    }

    if(min>0){
    min = min-1;
    }
   
    seg=59;

    setInterval(function(){

      if(hor==0 && min == 0 && seg ==0){
        document.getElementById('eventos').style.display = 'inline';
        document.getElementById('campo').value = '0';

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
        horas.innerHTML=hor+'H';
        minutos.innerHTML = min+'M';
        segundos.innerHTML = seg+ 'S';


    }, 1000);

   }
   


     
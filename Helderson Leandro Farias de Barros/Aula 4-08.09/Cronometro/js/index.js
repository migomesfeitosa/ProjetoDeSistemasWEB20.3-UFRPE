var button = document.getElementById("iniciar");
var hour = document.getElementById("hour");
var minute = document.getElementById("minute");
var second = document.getElementById("second");
var input = document.getElementById("valor");
var state = false;
var secondTime = 0;
var minuteTime = 0;
var hourTime = 0;
var secondInterval = null;

function buttonClicked() {
    if (state == false){
        button.innerText = "Parar"
        button.style.backgroundColor = "red"
        state = true;
        input.disabled = true;
        
        converterTime()

        hourTime = hour.innerText;
        minuteTime = minute.innerText;
        secondTime = second.innerText;

        secondInterval = setInterval(function(){
        handleSecond();
        }, 1000)

    } else{
        //button.innerText = "Iniciar"
        state = false;
        input.disabled = false;
        clearInterval(secondInterval);
        button.innerText = "Iniciar"
        button.style.backgroundColor = "forestgreen"

        hour.innerText = "00"
        minute.innerText = "00"
        second.innerText = "00"
    }

}

function converterTime() {

    var value = input.value
    if (value < 1){
        second.innerText = value * 60
    } else if (value < 60){
        if (value % 1 == 0){
            minute.innerText = value;
        } else{
            second.innerText = (value % 1) * 60
            minute.innerText = parseInt(value);
        }
    } else {
        hour.innerText = parseInt(value / 60);
        minuteValue = value % 1;
        if (value % 1 != 0){
            if (minuteValue % 1 == 0){
                minute.innerText = value;
            } else{
                second.innerText = (minuteValue % 1) * 60;
                minute.innerText = parseInt(minuteValue);
            }
        } else{
            minute.innerText = value % 60;
        }
    }

}

function handleSecond(){
    secondTime--;
    second.innerText = secondTime;

    if (secondTime <= 0){
        if (hourTime== 0 && minuteTime == 0){
            clearInterval(secondInterval);
            second.innerText = "00"
        } else{
            if (minuteTime == 0){
                secondTime= 59;
                second.innerText = secondTime;
                minuteTime = 59;
                minute.innerText = minuteTime;
                if (hourTime != 0){
                    hourTime--;
                    hour.innerText = hourTime;
                }
            } else{
                minuteTime--;
                minute.innerText = minuteTime;

                secondTime = 59;
                second.innerText = secondTime;
            }
        }
    }
}

button.onclick = function (){
    buttonClicked();
}
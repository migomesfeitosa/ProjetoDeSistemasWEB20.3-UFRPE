$(document).ready(function(){
    var count = 2;

    $("#add-option").on("click", function(){
        if (count < 5){
            $(".options-div").append("<input type='text' class='element' id='option-" + count + "'"
            + " placeholder='Opção " + count + "'" + " name='option-" + count + "'" + " value='" + $(".add-input").val() + "'" + "required" + ">");
            count++;
            $(".add-input").val("");
            $(".add-input").attr("placeholder", "Opção " + count);
            $(".add-input").attr("name", "option-"+ count);
            $(".add-input").attr("id", "option-"+ count);
        } else{
            $("#add-option").css("color", "gray");
        }
    })
})
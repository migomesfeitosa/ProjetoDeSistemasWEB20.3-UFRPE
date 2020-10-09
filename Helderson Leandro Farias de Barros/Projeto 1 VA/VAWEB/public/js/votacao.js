$(document).ready(function() {
    $('input[type=radio]').change(function(){
        var xmlAjax = new XMLHttpRequest();
        var poll_id = $(this).attr('poll_id');
        var option_id = $(this).attr('option_id');

        xmlAjax.open("POST", "/vote?poll_id=" + poll_id + "&" + "option_id=" + option_id, true);
        xmlAjax.onload = function (e) {
          if (xmlAjax.readyState === 4) {
            if (xmlAjax.status === 200) {
                var data = JSON.parse(xmlAjax.responseText);
                //O option_id não funcional para todos
                $("#question"+poll_id).text("Obrigado por votar!");
                $("#question"+poll_id).css({"font-weight": "bold"});
                $("#span"+poll_id).text("Total de votos: " + data.Count);
                
                for ([key, value] of Object.entries(data.Options)) {
                  $("#option"+key).css({"display": "none"});
                  $("#label"+key).css({"display": "none"});
                  $("#progress"+key).css({"display": "block"});
                  $("#progress"+key).attr("value", value)
                }

            } else {
              console.error(xmlAjax.statusText);
            }
          }
        };
        xmlAjax.onerror = function (e) {
          console.error(xmlAjax.statusText);
        };
        xmlAjax.send(null);
    })
})
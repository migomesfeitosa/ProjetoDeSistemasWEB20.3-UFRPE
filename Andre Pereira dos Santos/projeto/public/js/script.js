var local = document.getElementById("local");

document.getElementById("foto").onchange = function(e) {
    var file = e.target.files[0];

    formulario = new FormData();
    formulario.append("imagem", file)
    var xmlAjax = new XMLHttpRequest();
    xmlAjax.open("POST", "receber.php", true);
    xmlAjax.onreadystatechange = function() {
        if (xmlAjax.readyState == 4 && xmlAjax.status == 200) {
            local.innerHTML = local.innerHTML + '<img src="' + xmlAjax.responseText + '" height="200px">';
        } else if (xmlAjax.status != 200) {
            alert(xmlAjax.status + xmlAjax.readyState);
        }
    }
    xmlAjax.send(formulario);
}
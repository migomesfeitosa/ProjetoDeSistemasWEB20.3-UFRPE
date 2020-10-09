var local = document.getElementById("local");

document.getElementById("arquivo").onchange = function(e) {
    var file = e.target.files[0];

    formulario = new FormData();
    formulario.append("documento", file)
    var xmlAjax = new XMLHttpRequest();
    xmlAjax.open("POST", "receber.php", true);
    xmlAjax.send(formulario);
}
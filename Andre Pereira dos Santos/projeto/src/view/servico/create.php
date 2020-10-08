<?php include __DIR__ . "/../layout/header.php" ?>

<html>
<head>
    <meta name="viewport" content="width=device=width,initial-scale=1.0">
    <title> Pagina inicial </title>
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/centro.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/create-edit-view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>

<body>
<?php include __DIR__ . "/../layout/body.php" ?>

<div class="centro">

<fieldset class="field" >

<legend  style="background-color: white;" >CADASTRO DE SERVIÇOS</legend>
<div id="operacoes">
        <br>
        <form  class="formulario" action="/servicos" method="post">
        <div id="componentes">
        <br>
        <label>Descricao:</label>
        <input type="text" name="descricao">
        <p>
        <label>valor:</label>
        <input type="text" name="valor">
        <p>
        <label>Duracao em minutos:</label>
        <input type="text" name="duracao">
        <br>
        <br>
        <button id="salvarS"  type="submit"><i class="fas fa-save fa-4x"></i></button>
</div>
</div>
    </form>
</div>
</fieldset>
</div>

<footer >
 <?php include __DIR__ . "/../layout/footer.php" ?>
</footer>


</body>
</html>






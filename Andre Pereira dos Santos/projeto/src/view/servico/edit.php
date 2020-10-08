<?php include __DIR__ . "/../layout/header.php" ?>
<?php include __DIR__ . "/../layout/body.php" ?>

<html>
<head>
    <meta name="viewport" content="width=device=width,initial-scale=1.0">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/centro.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/create-edit-view.css">
</head>

<body>

<div class="centro">
<fieldset class="field" >
<legend  style="background-color: white;" >EDIÇAO DE SERVIÇOS</legend>
<div id="operacoes">

<form  class="formulario" action="/servicos?update&id=<?php echo $servico->getId() ?>" method="POST">
        <input type="hidden" name="_method" value="PUT">
       
        <br>
        <div id="componentes">
        <label>Nome do animal:</label>
        <input type="text" name="descricao" value="<?php echo $servico->getDescricao() ?>">
        <br>
        <label>Especie:</label>
        <input type="text" name="valor" value="<?php echo $servico->getValor() ?>">
        <br>
        <label>Raça:</label>
        <input type="text" name="duracao" value="<?php echo $servico->getDuracao() ?>">
        <br>
        <button id="salvarS"  type="submit"><i class="fas fa-save fa-4x"></i></button>
</div>
</div>
    </form>
</div>
</fieldset>

<footer >
    <?php include __DIR__ . "/../layout/footer.php" ?>
</footer>

</body>
</html>






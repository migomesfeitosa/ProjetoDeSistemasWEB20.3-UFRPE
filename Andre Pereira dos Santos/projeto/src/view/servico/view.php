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
<legend  style="background-color: white;" >DETALHES DO SERVIÇO</legend>

<div id="operacoes">
        <br>
        <div class="esquerda">
        <label>Descricao:</label>
        <input type="text" value="<?php echo $servico->getDescricao() ?>">
        <br>
        <label>Valor:</label>
        <input type="text" value="<?php echo $servico->getValor() ?>">
        <br>
        <label>Duracao:</label>
        <input type="text" value="<?php echo $servico->getDuracao() ?>">
        <br>
        
      </div>
      
        <br>
     
</div>

</fieldset>
</div>

<footer >
  <?php include __DIR__ . "/../layout/footer.php" ?>
</footer>
</body>
</html>






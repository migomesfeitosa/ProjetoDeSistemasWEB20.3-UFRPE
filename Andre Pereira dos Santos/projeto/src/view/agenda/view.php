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
<legend  style="background-color: white;" >DETALHES DA AGENDA</legend>

<div id="operacoes">
  <br>
<div id="componentes">
        <br>
        <label>Data:</label>
        <input type="text" value="<?php echo $agenda->getData() ?>">
        <br>
        <label>Horario:</label>
        <input type="text" value="<?php echo $agenda->getHorario() ?>">
        <br>
        <label>Serviço:</label>
        <input type="text" value="<?php echo $agenda->getServico() ?>">
        <br>
        <label>Animal:</label>
        <input type="text" value="<?php echo $agenda->getAnimal() ?>">
        <br>
        <label>Lembrete:</label>
        <input type="text" value="<?php echo $agenda->getAnotacao() ?>">
        <br>
        <br>
        <form action="agendas" method="GET">
                <button id="botao" type="submit">Voltar</button >
        </form>

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






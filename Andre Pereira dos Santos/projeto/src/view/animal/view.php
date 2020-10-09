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
<legend  style="background-color: white;" >DETALHES DO ANIMAL</legend>

<div id="operacoes">
        <br>
        <div class="esquerda">
        <label>Nome do animal:</label>
        <label id="view" ><?php echo $animal->getNome() ?></label>
        <br>
        <label>Especie:</label>
        <label id="view" ><?php echo $animal->getEspecie() ?></label>
        <br>
        <label>Raça:</label>
        <label id="view" ><?php echo $animal->getRaca() ?></label>
        <br>
        <label>Porte:</label>
        <label id="view" ><?php echo $animal->getPorte() ?></label>
        <br>
        <label>Nascimento:</label>
        <label id="view" ><?php echo $animal->getNascimento() ?></label>
        <p>
        <label>Castrado:</label>
        <label id="view" ><?php echo $animal->getCastrado() ?></label>
        <p>
        <label>Sexo:</label>
        <label id="view" ><?php echo $animal->getSexo() ?></label>
        <p>
        <br>
        <form action="animais" method="GET">
                <button id="botao" type="submit">Voltar</button >
        </form>
      </div>
      <div class="esquerda"> 
        <img id="imgAnimal" src="//<?php echo $_SERVER["HTTP_HOST"]; ?>/img/<?php echo $animal->getImagem()?>">
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






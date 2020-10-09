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
<legend  style="background-color: white;" >EDIÇAO DE ANIMAL</legend>
<div id="operacoes">

<form  class="formulario" action="/animais?id=<?php echo $id ?>" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <br>
        <div id="componentes">
        <label>Nome do animal:</label>
        <input type="text" name="nome" value="<?php echo $animal->getNome() ?>">
        <br>
        <label>Raça:</label>
        <input type="text" name="raca" value="<?php echo $animal->getRaca() ?>">
        <br>
        <label>Porte:</label>
        <input type="text" name="porte" value="<?php echo $animal->getPorte() ?>">
        <br>
        <label>Nascimento:</label>
        <input type="date" name="data" value="<?php echo $animal->getNascimento() ?>">
        <p>
        <label>Opções:</label>
        <br>
        <input type="radio" name="castrado" value="sim"/> CASTRADO
        <input type="radio" name="castrado" value="nao"/> NÃO CASTRADO
        <p>
    <br>
    <br>
     
        <button type="submit">Salvar</button>
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






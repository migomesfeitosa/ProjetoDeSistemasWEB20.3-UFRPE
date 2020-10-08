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
<legend  style="background-color: white;" >EDIÇAO DE CLIENTE</legend>
    <div id="operacoes">

<form  class="formulario" action="/clientes?id=<?php echo $id ?>" method="POST">

        <input type="hidden" name="_method" value="PUT">
        <br>
        
        <div id="componentes">
        <label>Nome do Cliente:</label>
        <input type="text" name="nome" value="<?php echo $cliente->getNome() ?>">
        <br>
        <label>Nascimento:</label>
        <input type="date" name="nascimento" value="<?php echo $cliente->getNascimento() ?>">
        <p>
        <label>Sexo:</label>
        <br>
        <input type="radio" name="sexo" value="Feminino"/> Feminino
        <input type="radio" name="sexo" value="Masculino"/> Masculino
        <br>
        <label>Telefone:</label>
        <input type="text" name="telefone" value="<?php echo $cliente->getTelefone() ?>">
        <br>
        

        <p>
     
        <button type="submit">Salvar</button>
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






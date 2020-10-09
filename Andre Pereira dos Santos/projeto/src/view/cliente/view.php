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
<legend  style="background-color: white;" >DETALHES DO CLIENTE</legend>

<div id="operacoes">
        <br>
        <div id="componentes">
        <label>Nome do Cliente:</label>
        <label id="view" ><?php echo $cliente->getNome() ?></label>
        <br>
        <label>Nascimento:</label>
        <label id="view"><?php echo $cliente->getNascimento() ?></label>
        <p>
        <label>Sexo:</label>
        <label id="view"><?php echo $cliente->getSexo() ?></label> 
        <p>
        <label>Tel:</label>
        <label id="view"><?php echo $cliente->getTelefone() ?>"</label> 
        <p>
        <label>Email:</label>
        <label id="view" ><?php echo $cliente->getEmail() ?></label> 
        <p>
        <br>
        <form action="clientes" method="GET">
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






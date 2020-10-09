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

<legend  style="background-color: white;" >CADASTRO DE CLIENTE</legend>

        <br>
        <div id="operacoes">

        <br>
        <form  class="formulario" action="/clientes" method="post">
        <div id="componentes">
        <br>
        <div>
        <label>Nome do Cliente:</label>
        <input type="text" require name="nome">
</div>
        <p>
        <div>
        <label>Nascimento:</label>
        <input type="date" required name="nascimento">
</div>
        <p>
        <div>
        <label>Sexo:</label>
        <br>
        <input type="radio" name="sexo" required value="Feminino"/> Feminino
        <input type="radio" name="sexo" required value="Masculino"/> Masculino
</div>
        <p>
        <div>
        <label>Telefone:</label>
        <input type="text" required name="telefone">
</div>
        <p>
        <div>
        <label>Email:</label>
        <input type="text" required name="email">
</div>
        <p>
        <div>
        <label>senha:</label>
        <input type="password" required name="senha">
</div>
<br>
        
        <div>
</div>
<div id="salvar">
        <button  type="submit"><i class="fas fa-save fa-4x"></i></button><label> Salvar</label>
        <label name="id"></label>
</div>
        
    </form>

</fieldset>
</div>

<footer >
 <?php include __DIR__ . "/../layout/footer.php" ?>
</footer>

</body>
</html>






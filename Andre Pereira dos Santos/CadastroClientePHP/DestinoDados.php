
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/style.css">
    <title>Dados do Cliente</title>
</head>
<body>
    <div id="dados">
        <br>
    <label id="titulo">DADOS DO CLIENTE</label>
        <div id="exibir">
<br>
<label id="txt" >Nome do Cliente:</label> <label> <?php echo $_POST['nome']?> </label>
<br>
<label id="txt"> Sobrenome:</label>       <label ><?php echo $_POST['sob']?> </label>
<br>
<label id="txt" >Rua:</label>             <label > <?php echo $_POST['rua']?> </label>
<br>
<label id="txt" >Bairro:</label>          <label >  <?php echo $_POST['bairro']?> </label>
<br>
<label id="txt" >Cidade:</label>          <label >  <?php echo $_POST['cidade']?> </label>
<br>
<label id="txt" >Email:</label>           <label ><?php echo $_POST['email']?> </label>
<br>
<label id="txt" >Telefone: </label>       <label > <?php echo $_POST['telefone']?> </label>
<br>
<label id="txt" >Sexo:</label>            <label >  <?php echo $_POST['sexo']?> </label>
<br>
<label id="txt" >Estado:</label>          <label ><?php echo $_POST['estado']?> </label>
<br>
</div>
</body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/estilo.css">
    <title>Document</title>
</head>
<body>
<div class="Apresentacao">
    <h1>Meus Dados</h1>
<label > Nome do Cliente: <?php echo $_POST['nome']?> </label>
<br><br>
<label > Sobrenome: <?php echo $_POST['sob']?> </label>
<br><br>
<label > Rua: <?php echo $_POST['rua']?> </label>
<br><br>
<label > Bairro: <?php echo $_POST['bairro']?> </label>
<br><br>
<label > Cidade: <?php echo $_POST['cidade']?> </label>
<br><br>
<label > Estado: <?php echo $_POST['estado']?> </label>
<br><br>
<label > Email: <?php echo $_POST['email']?> </label>
<br><br>
<label > Telefone: <?php echo $_POST['telefone']?> </label>
<br><br>
<label > Sexo: <?php echo $_POST['sexo']?> </label>
<br><br>


</div>
    
</body>
</html>





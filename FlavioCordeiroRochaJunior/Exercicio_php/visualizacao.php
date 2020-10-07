<?php
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
   // echo "<label>Nome:".$nome." </label><br>";
   // echo "<label>Sobrenome:".$sobrenome." </label><br>";
   // echo "<label>Rua:".$rua." </label><br>";
   // echo "<label>Bairro:".$bairro." </label><br>";
    //echo "<label>Cidade:".$cidade." </label><br>";
    //echo "<label>Estado:".$estado." </label><br>";
   // echo "<label>Email:".$email." </label><br>";
    //echo "<label>Telefone:".$telefone." </label><br>";
    //echo "<label>Sexo:".$sexo." </label><br>";


?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualização</title>
    <link rel="stylesheet" href="styleV.css">
</head>
<body>
<fieldset class="caixa_r">
    <legend class="legenda">Dados:</legend>
    <label class="label_r">Nome: </label>
    <label class="resultado"><?php echo $nome?></label><br>
    <label class="label_r">Sobrenome: </label>
    <label class="resultado"><?php echo $sobrenome?></label><br>
    <label class="label_r">Rua: </label>
    <label class="resultado"><?php echo $rua?></label><br>
    <label class="label_r">Bairro: </label>
    <label class="resultado"><?php echo $bairro?></label><br>
    <label class="label_r">Cidade: </label>
    <label class="resultado"><?php echo $cidade?></label><br>
    <label class="label_r">Estado: </label>
    <label class="resultado"><?php echo $estado?></label><br>
    <label class="label_r">Email: </label>
    <label class="resultado"><?php echo $email?></label><br>
    <label class="label_r">Telefone: </label>
    <label class="resultado"><?php echo $telefone?></label><br>
    <label class="label_r">Sexo: </label>
    <label class="resultado"><?php echo $sexo?></label>

</fieldset>

</body>
</html>


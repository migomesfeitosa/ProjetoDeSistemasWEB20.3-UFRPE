<?php

?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="visualizacao.php" method="post">

    <fieldset class="caixa" ><legend class="legenda">Dados:</legend>

    <input type="text" name="nome" id="" class="textfield" placeholder="Nome" required><br>

    <input type="text" name="sobrenome" id="" class="textfield" placeholder="Sobrenome" required><br>

    <input type="text" name="rua" id="" class="textfield" placeholder="Rua" required><br>

    <input type="text" name="bairro" id=""  class="textfield" placeholder="Bairro" required><br>

    <input type="text" name="cidade" id="" class="textfield" placeholder="Cidade" required><br>
    <label for=""  class="label">Estado: </label>
    <select name="estado" id="" class="combo">
        <option value="Alagoas">Alagoas</option>
        <option value="Minas Gerais">Minas Gerais</option>
        <option value="Bahia">Bahia</option>
        <option value="Sao Paulo">São Paulo</option>
        <option value="Pernambuco">Pernambuco</option>
    </select><br>

    <input type="email" name="email" id="" class="textfield" placeholder="Email" required><br>

    <input type="text" name="telefone" id="" class="textfield" placeholder="Telefone"  required><br>

    <label  class="label">Sexo: </label>
    <input type="radio" name="sexo" id="masculino" value="masculino"  required>
    <label for="masculino"  class="label">Masculino</label>
    <input type="radio" name="sexo" id="feminino" value="feminino"  required>
    <label for="feminino" class="label">Feminino</label><br><br>
    <input type="submit" value="Concluir" class="button">


    </fieldset>


</form>
</body>
</html>

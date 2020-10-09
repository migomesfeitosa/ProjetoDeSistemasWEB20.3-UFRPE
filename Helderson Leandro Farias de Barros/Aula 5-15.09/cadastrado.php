<?php
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        header("Location: cadastrar.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastrado.css">
    <title>Cadastrado</title>
</head>
<body>
    <div class="texto-div">
        <?php
            echo "<p> Nome: ".$_POST['nome']."</p>";
            echo "<p>Sobrenome: ".$_POST['sobrenome']."</p>";
            echo "<p>Rua: ".$_POST['rua']."</p>";
            echo "<p>Bairro: ".$_POST['bairro']."</p>";
            echo "<p>Cidade: ".$_POST['cidade']."</p>";
            echo "<p>Estado: ".$_POST['estado']."</p>";
            echo "<p>Email: ".$_POST['email']."</p>";
            echo "<p>Telefone: ".$_POST['telefone']."</p>";
            echo "<p>Sexo: ".$_POST['sexo']."</p>";
        ?>
    </div>
    
</body>
</html>
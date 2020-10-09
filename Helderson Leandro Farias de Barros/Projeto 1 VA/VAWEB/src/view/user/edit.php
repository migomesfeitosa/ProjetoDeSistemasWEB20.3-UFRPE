<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfil</title>
    <link rel="stylesheet" href="css/form.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-div">
        <h1>Editar perfil</h1>
        <?php 
            if (isset($_SESSION["message"])){
                echo "<div class='{$_SESSION['message-type']}'>{$_SESSION['message']}</div>";
                unset($_SESSION["message"]);
                unset($_SESSION["message-type"]);
            }
        ?>
        <form action="/edit_profile" method="POST">
            <input type="text" class="element" name="user" id="usuario" placeholder="Usuário" value=<?php echo $_SESSION["user_name"]?>>
            <input type="email" class="element" name="email" id="usuario" placeholder="Email" value=<?php echo $_SESSION["user_email"]?>>
            <input type="password" class="element" name="old-password" id="senha" placeholder="Senha atual">
            <input type="password" class="element" name="new-password" id="senha" placeholder="Nova senha">
            <input type="password" class="element" name="repeat-password" placeholder="Repetir nova senha">  
            <button >Editar</button>
        </form>
    </div>
</body>
</html>
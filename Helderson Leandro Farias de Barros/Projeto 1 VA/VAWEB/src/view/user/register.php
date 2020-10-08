<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar-se</title>
    <link rel="stylesheet" href="css/form.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>

    <div class="login-div">
        <h1>Registrar-se</h1>
        <?php 
            if (isset($_SESSION["message"])){
                echo "<div class='{$_SESSION['message-type']}'>{$_SESSION['message']}</div>";
                unset($_SESSION["message"]);
                unset($_SESSION["message-type"]);
            }
        ?>
        <form action="" method="POST">
            <input type="email" class="element" name="email" id="email" placeholder="Endereço de email">
            <input type="text" class="element" name="user" id="user" placeholder="Nome de Usuário">
            <input type="password" class="element" name="password" id="password" placeholder="Senha">
            <input type="password" class="element" name="repeat-password" id="repeat-password" placeholder="Repetir senha">
            <button class="element">Registrar</button>
        </form>
    </div>
</body>
</html>
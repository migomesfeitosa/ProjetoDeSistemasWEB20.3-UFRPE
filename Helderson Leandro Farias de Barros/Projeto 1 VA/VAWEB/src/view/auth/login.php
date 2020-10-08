<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/form.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>

<div class="login-div">
        <h1>Login</h1>
        <form action="/login" method="POST">
        <?php 
            if (isset($_SESSION["message"])){
                echo "<div class='{$_SESSION['message-type']}'>{$_SESSION['message']}</div>";
                unset($_SESSION["message"]);
                unset($_SESSION["message-type"]);
            }
        ?>
            <input type="text" class="element" name="user" id="usuario" placeholder="Usuário ou endereço de email">
            <input type="password" class="element" name="password" id="senha" placeholder="Senha">
            <div class="links">
                <a class="new-account" href="/register">Cadastrar nova conta</a>
            </div>
            <button >Entrar</button>
        </form>
    </div>
</body>
</html>
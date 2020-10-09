
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style_login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <div class="img">
        <img src="/images/img-login/bg.svg">
    </div>
    <div class="login-content">
        <form action="auth" method="post">
            <img src="/images/img-login/avatar.svg">
            <h2 class="title">Bem-Vindo</h2>
            <?php if(isset($_SESSION['msg'])){
                echo "<p style='color: red'>".$_SESSION['msg']."</p>";
                unset($_SESSION['msg']);
            } ?>
            <br>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Usuario</h5>
                    <input type="text" class="input" required name="email">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Senha</h5>
                    <input type="password" class="input" required name="password">
                </div>
            </div>
            <input type="submit" class="btn" value="Login">
            <div class="criar-cadastro">
                <a href="/cadastrar.php"><h4>Não tem usuário? Cadastre-se Aqui!</h4></a>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="./js/main.js"></script>
</body>
</html>

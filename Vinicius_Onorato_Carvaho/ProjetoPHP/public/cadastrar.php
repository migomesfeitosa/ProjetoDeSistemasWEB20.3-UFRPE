<?php
session_start();
if(isset($_SESSION['usuario'])){
    header("Location: logado.php");
}

?>

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
            <img src="/images/img-login/bh.svg">
        </div>
		<div class="login-content">
			<form action="/processa.php" method="post">
				<img src="/images/img-login/avatar.svg">
				<h3 class="title">Preencha seus dados abaixo</h3>
                <?php
                if(isset($_SESSION['msg'])){
                    echo "<p>".$_SESSION['msg']."</p>";
                    unset($_SESSION['msg']);
                }
                ?>
                <br>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Nome</h5>
                        <input type="text" class="input" required name="name">
                    </div>
                </div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email/Usuario</h5>
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
                <input type="submit" class="btn" value="Cadastrar">
                <div class="criar-cadastro">
                    <a href="auth"><h4>Já tem usuário? Faça login Aqui!</h4></a>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>

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
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
        <div class="img">
            <img src="img/bg.svg">
        </div>
		<div class="login-content">
			<form action="validar.php" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Bem-Vindo</h2>
                <?php
                if(isset($_SESSION['message'])){
                    echo "<p>".$_SESSION['message']."</p>";
                    unset($_SESSION['message']);
                }
                ?>
                <br>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="text" class="input" required name="usuario">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input type="password" class="input" required name="senha">
            	   </div>
            	</div>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>

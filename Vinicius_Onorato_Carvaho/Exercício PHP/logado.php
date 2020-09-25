<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Sidebar Dashboard Template With Sub Menu</title>
		<link rel="stylesheet" href="./style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<body>
	<div class="logado">
	<h1>Bem Vindo ao sistema</h1>
	<a href="./loggout.php"><i class="fas fa-power-off"><h4>Para sair do sistema precione aqui ou no botao acima</h4></i></a></li>
	</div>
	

	</body>
</html>

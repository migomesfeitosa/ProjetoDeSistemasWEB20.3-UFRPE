<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: /");
}


include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>OnEstudos:Editar-Usuario</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="stylegaleria/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Dancing+Script&display=swap" rel="stylesheet">
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<body>

		<!--wrapper start-->
		<div class="wrapper">
			<!--header menu start-->
			<div class="header">
				<div class="header-menu">
					<div class="title">On<span>Estudos</span></div>
					<div class="sidebar-btn">
						<i class="fas fa-bars"></i>
					</div>
					<ul>
						<li><a href="#"><i class="fas fa-search"></i></a></li>
						<li><a href="#"><i class="fas fa-bell"></i></a></li>
                        <li><form action="/logout" method="POST">
                                <a><button class="fas fa-power-off" type="submit"></button></a>
                            </form></li>
					</ul>
				</div>
			</div>
			<!--header menu end-->
			<!--sidebar start-->
			<div class="sidebar">
				<div class="sidebar-menu">
					<center class="profile">
						<img src="1.png" alt="image" class="icone-menu">
						<p>Estude Online</p>
					</center>
					<li class="item">
						<a href="/" class="menu-btn">
							<i class="fas fa-desktop"></i><span>Dashboard</span>
						</a>
					</li>
					<li class="item" id="profile">
						<a href="#usuario" class="menu-btn">
							<i class="fas fa-user-circle"></i><span>Usuário <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
					</li>
					<li class="item" id="messages">
						<a href="#messages" class="menu-btn">
							<i class="fas fa-envelope"></i><span>Cursos <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="./.././cursophp/cursophp.php"><i class="fas fa-envelope"></i><span>Curso PHP</span></a>
							<a href="./.././cursojavascript/javascript.php"><i class="fas fa-envelope-square"></i><span>Java Script</span></a>
							<a href="./.././htmlcss/htmlcss.php"><i class="fas fa-exclamation-circle"></i><span>HTML + CSS</span></a>
						</div>
					</li>
					</li>
					<li class="item">
						<a href="#" class="menu-btn">
							<i class="fas fa-info-circle"></i><span>About</span>
						</a>
					</li>
				</div>
			</div>
			<!--sidebar end-->
			<!--main container start-->
			<div class="main-container">
			<div class="container">
			<a href="./../logado.php"><img src="media/back.svg" alt=""> </a>
                <div class="cards">
                    <div class="card">
                        <div class="card-image1"></div>
                        <div class="card-text">
                            <h2>Usuário</h2>
                            <?php

                            //Receber o número da página
                            $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);
                            $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

                            //Setar a quantidade de itens por pagina
                            $qnt_result_pg = 1;

                            //calcular o inicio visualização
                            $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

                            $result_usuarios = "SELECT * FROM user LIMIT $inicio, $qnt_result_pg";
                            $resultado_usuarios = mysqli_query($conn, $result_usuarios);
                            while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
                                echo "ID: " . $row_usuario['id'] . "<br>";
                                echo "Nome: " . $row_usuario['name'] . "<br>";
                                echo "E-mail: " . $row_usuario['email'] . "<br>";
                                echo "<a href='edit_usuario1.php?id=" . $row_usuario['id'] . "'>Editar Usuário</a><br><hr>";
                            }

                            //Paginção - Somar a quantidade de usuários
                            $result_pg = "SELECT COUNT(id) AS num_result FROM user";
                            $resultado_pg = mysqli_query($conn, $result_pg);
                            $row_pg = mysqli_fetch_assoc($resultado_pg);
                            //echo $row_pg['num_result'];
                            //Quantidade de pagina
                            $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

                            //Limitar os link antes depois
                            $max_links = 2;
                            echo "<a href='index_editar.php?pagina=1'>Primeira</a> ";

                            for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
                                if($pag_ant >= 1){
                                    echo "<a href='index_editar.php?pagina=$pag_ant'>$pag_ant</a> ";
                                }
                            }

                            echo "$pagina ";

                            for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
                                if($pag_dep <= $quantidade_pg){
                                    echo "<a href='index_editar.php?pagina=$pag_dep'>$pag_dep</a> ";
                                }
                            }

                            echo "<a href='index_editar.php?pagina=$quantidade_pg'>Ultima</a>";

                            ?>

                        </div>
                        <div class="card-stats">
                            <div class="stat-border-3">

                            </div>
                        </div>
                    </div>

    </body>
</html>

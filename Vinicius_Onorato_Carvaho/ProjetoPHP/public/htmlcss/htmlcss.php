<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: /");
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Sidebar Dashboard Template With Sub Menu</title>
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
						<a href="/listusers/index_editar.php" class="menu-btn">
							<i class="fas fa-user-circle"></i><span>Usuário <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="#"><i class="fas fa-image"></i><span>Picture</span></a>
							<a href="#"><i class="fas fa-address-card"></i><span>Info</span></a>
						</div>
					</li>
					<li class="item" id="cursos">
						<a href="#cursos" class="menu-btn">
							<i class="fas fa-envelope"></i><span>Cursos <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="./.././cursophp/cursophp.php"><i class="fas fa-envelope"></i><span>Curso PHP</span></a>
							<a href="./.././cursojavascript/javascript.php"><i class="fas fa-envelope-square"></i><span>Java Script</span></a>
							<a href="#"><i class="fas fa-exclamation-circle"></i><span>HTML + CSS</span></a>
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
			<a href="/"><img src="media/back.svg" alt=""> </a>
        <h1>Bem-Vindo ao curso HTML CSS</h1>
        <div class="row">
            <div class="col" onclick="playVideo('https://www.youtube.com/embed/EiZbhsVY2Dk')">
                <div class="feature-img">
					<img src="media/pic1.png" alt="" width="100%">
					<img src="media/play.png" alt="" class="play-btn"
					onclick="playVideo('https://www.youtube.com/embed/EiZbhsVY2Dk')">
                </div>
            </div>
            <div class="col">
                <div class="small-img-row" onclick="playVideo('https://www.youtube.com/embed/LJo0VZP_Msk')">
                    <div class="small-img">
						<img src="media/pic2.png" alt="">
						<img src="media/play.png" alt="" class="play-btn"
						onclick="playVideo('https://www.youtube.com/embed/LJo0VZP_Msk')">
                    </div>
                    <p>
					Curso de HTML e CSS - Introdução: o que é HTML? [Aula 01]<br>
                    </p>
                </div>
                <div class="small-img-row" onclick="playVideo('https://www.youtube.com/embed/mfG8UUSMldA')">
                    <div class="small-img">
						<img src="media/pic3.png" alt="">
						<img src="media/play.png" alt="" class="play-btn"
						onclick="playVideo('https://www.youtube.com/embed/mfG8UUSMldA')">
                    </div>
                    <p>
					Curso de HTML e CSS - Sintaxe HTML [Aula 02]<br>
                    </p>
                </div>
                <div class="small-img-row" onclick="playVideo('https://www.youtube.com/embed/iVj95PVU5A0')">
                    <div class="small-img">
						<img src="media/pic4.png" alt="">
						<img src="media/play.png" alt="" class="play-btn"
						onclick="playVideo('https://www.youtube.com/embed/iVj95PVU5A0')">
                    </div>
                    <p>
					Curso de HTML e CSS - Tags estruturais e árvore do documento [Aula - 03]<br>
                    </p>
                </div>
            </div>
        </div>
	</div>
	<div class="video-player" id="videoPlayer">
		<!-- <video width="100%" controls  id="myVideo"> -->
			<!-- <source src="media/vid1.mp4" type="video/mp4"> -->
		<iframe width="920" height="515" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="myVideo"></iframe>
		<!-- </video> -->
		<img src="media/close.png" alt="" class="close-btn"
		onclick="stopVideo()">
			

		<script>
			var videoPlayer = document.getElementById("videoPlayer");
			var myVideo = document.getElementById("myVideo");

			function stopVideo() {

				videoPlayer.style.display = "none";
			}

			function playVideo(link){
				myVideo.src = link;
				videoPlayer.style.display = "block";
				
			}
		</script>
		<!--wrapper end-->

		<script type="text/javascript">
		$(document).ready(function(){
			$(".sidebar-btn").click(function(){
				$(".wrapper").toggleClass("collapse");
			});
		});
		</script>

	</body>
</html>

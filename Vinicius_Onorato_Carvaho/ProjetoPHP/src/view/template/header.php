
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>OnEstudos</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

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
                <img src="./images/1.png" alt="image" class="icone-menu">
                <p>Estude Online</p>
            </center>
            <li class="item">
                <a href="/" class="menu-btn">
                    <i class="fas fa-desktop"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="item" id="profile">
                <a href="listusers/index_editar.php" class="menu-btn">
                    <i class="fas fa-user-circle"></i><span>Usuário <i class="fas fa-chevron-down drop-down"></i></span>
                </a>
            </li>
            <li class="item" id="cursos">
                <a href="#cursos" class="menu-btn">
                    <i class="fas fa-envelope"></i><span>Cursos <i class="fas fa-chevron-down drop-down"></i></span>
                </a>
                <div class="sub-menu">
                    <a href="/cursophp/cursophp.php"><i class="fas fa-envelope"></i><span>Curso PHP</span></a>
                    <a href="/cursojavascript/javascript.php"><i class="fas fa-envelope-square"></i><span>Java Script</span></a>
                    <a href="/htmlcss/htmlcss.php"><i class="fas fa-exclamation-circle"></i><span>HTML + CSS</span></a>
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
        <div class="cards">
            <div class="card">
                <div class="card-image1"></div>
                <div class="card-text">
                    <span class="date">4h de Curso</span>
                    <h2>Curso PHP</h2>
                    <p>Este curso de PHP 7 Completo vai apresentar você à linguagem PHP e aos recursos que ela possui voltados à construção de sites e sistemas web</p>
                </div>
                <div class="card-stats">
                    <div class="stat-border-3">
                        <div class="value"><a href="/cursophp/cursophp.php"><img src="
							./images/proximo.png" alt=""></a></div>
                    </div>
                </div>
                <div class="clique-player"><h6>Clique no Player Para Acessar</h6></div>
            </div>
            <a href="">
            </a>
            <div class="card">
                <div class="card-image2"></div>
                <div class="card-text">
                    <span class="date">6h de Curso</span>
                    <h2>java Script</h2>
                    <p>Durante o curso, abordamos desde JavaScript puro usando APIs direto no navegador até o uso de jQuery </p>
                </div>
                <div class="card-stats">

                    <div class="stat-border2">
                        <div class="value"><a href="/cursojavascript/javascript.php"><img src="./images/proximo.png" alt="error"></a></div>
                    </div>
                </div>
                <div class="clique-player"><h6>Clique no Player Para Acessar</h6></div>
            </div>
            <div class="card">
                <div class="card-image3"></div>
                <div class="card-text">
                    <span class="date">7 horas de Curso</span>
                    <h2>HTML + CSS </h2>
                    <p>Este tutorial tem de explicar como criar folhas de estilo para controlar o estilo e layout de várias páginas</p>
                </div>
                <div class="card-stats">
                    <div class="stat-border2">
                        <div class="value"><a href="./htmlcss/htmlcss.php"><img src="./images/proximo.png" alt="error"></a></div>
                    </div>
                </div>
                <div class="clique-player"><h6>Clique no Player Para Acessar</h6></div>
            </div>
        </div>
    </div>

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

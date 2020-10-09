<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: /");
}


include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM user WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Sidebar Dashboard Template With Sub Menu</title>
    <link rel="stylesheet" href="style_editar.css">
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
                <a href="#profile" class="menu-btn">
                    <i class="fas fa-user-circle"></i><span>Usuário <i class="fas fa-chevron-down drop-down"></i></span>
                </a>
            </li>
            <li class="item" id="cursos">
                <a href="#cursos" class="menu-btn">
                    <i class="fas fa-envelope"></i><span>Cursos <i class="fas fa-chevron-down drop-down"></i></span>
                </a>
                <div class="sub-menu">
                    <a href="./.././cursophp/cursophp.php"><i class="fas fa-envelope"></i><span>Curso PHP</span></a>
                    <a href="#"><i class="fas fa-envelope-square"></i><span>Java Script</span></a>
                    <a href="./.././htmlcss/htmlcss.php"><i class="fas fa-exclamation-circle"></i><span>HTML + CSS</span></a>
                </div>
            </li>
            <li class="item" id="settings">

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
            <a href="index_editar.php">Listar</a><br>

            <div class="cards">
                <div class="card">
                    <div class="card-image1"></div>
                    <div class="card-text">
                        <h1>Editar Usuário</h1>
                        <?php
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?>
                        <form method="POST" action="proc_edit_usuario.php">
                            <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">

                            <label>Nome: </label>
                            <input type="text" name="name" placeholder="Digite o nome completo" value="<?php echo $row_usuario['name']; ?>"><br><br>

                            <label>E-mail: </label>
                            <input type="email" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>
                            <label>Senha: </label>
                            <input type="password" name="password" placeholder="Digite sua nova senha"><br><br>

                            <input type="submit" value="Editar">
                        </form>


                    </div>
                    <div class="card-stats">
                        <div class="stat-border-3">


                        </div>
                    </div>
                </div>
</body>
</html>

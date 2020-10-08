<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost:8080/css/index.css">

    <title>Página Inicial</title>
</head>

<div class="header">
    <div class="right-link">
        <a class="link" href="">Início</a>
        <a class="link" href="/new">Recentes</a>
        <a class="link" href="/category">Categorias</a>
    </div>
    <div class="left-link">
        <?php 
        if(isset($_SESSION["user_id"])){
            echo "
            <div class='dropdown'>
                <button onclick='myFunction()' class='dropbtn'>Meu perfil</button>
                <div id='myDropdown' class='dropdown-content'>
                    <a href='/edit_profile'>Editar perfil</a>
                    <a href='/edit_preference'>Editar preferências</a>
                    <a href='/create'>Criar enquete</a>
                    <form action='/logout' method='POST'>
                    <button class='logout' type='submit'>Logout</button>
                </div>
            </div>";
        } else{
            echo '<a class="link" href="/login">Login</a>';
        }
        ?>
    </div>
    
    <script src="http://localhost:8080/js/header.js"></script>
</div>
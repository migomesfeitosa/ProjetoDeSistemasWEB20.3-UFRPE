
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/styleIn.css">
    <link rel="icon" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/img/IconeLogo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<title>Document</title>
</head>
<body>
   <main>
    <div class="menu-bar"> 
    <ul>
        <a href="/benvindo?benvindo" target="conteudo"> <i class="fas fa-home"></i> Home</a>  
        <a href="/trabalhos?create" target="conteudo"><i class="fas fa-folder-plus"></i> Cadastro de Trabalhos</a> 
        <a href="/trabalhos" target="conteudo" ><i class="fas fa-file-alt"></i> Trabalhos Publicados</a> 
        <a href="/trabalhos?list" target="conteudo"><i class="fas fa-search"></i> Pesquisar Trabalhos </a> 
        <form action="/logout" method="POST">
        <button  type="submit"><i class="fas fa-sign-out-alt"></i> Logout</button>
       </form>
    </ul>
</div>
<section>
    <iframe src="//<?php echo $_SERVER["HTTP_HOST"]; ?>/benvindo.php" name="conteudo"></iframe>
</section>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>
</body>
</html>
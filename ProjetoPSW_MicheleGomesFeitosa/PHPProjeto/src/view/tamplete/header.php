<!DOCTYPE html>
<html lang="en">
<head>
    <title>ProjetoPHPPSW</title>
    <meta charset="UTF-8">
    <title>DashBoard</title>
    <link rel="stylesheet" href="../../../public/css/style.css">
</head>
<body>
<div class="corpo">
    <div class="topo">
        <nav class="nav">
            <a href="../../view/auth/login.php">
                <button class="botao">Login</button>
            </a>
            <a href="../../view/cadastro/criar.php">
                <button class="botao">Cadastre-se</button>
            </a>
            <a href="../../view/menu.php">Menu</a>
        </nav>
    </div>

    <label>
        <h1>Michele Criações</h1>
    </label>
    <label>Somos especialistas em criar e compartilhar momentos especiais<br>
        através de doces e salgados feitos
        artesanalmente <br>com todo carinho pra você.</label>
</div>
<div>
    <?php if (isset($_SESSION['message'])) {
        echo "<p style='color: #4b3621'>" . $_SESSION['message'] . "</p>";
        unset($_SESSION['message']);
    } ?>
</div>

<br>
<br>

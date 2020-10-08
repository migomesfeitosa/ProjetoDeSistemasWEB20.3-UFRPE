<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../../../public/css/style.css">
</head>
<body>
<div class="container">
    <img class="img" src="../../../public/img/logo%20sem%20fundo.png" width="220" height="200">

</div>

<div>
    <form class="form" action="/auth" method="POST" >
        <input type="text" name="email" required placeholder="Digite seu email">
        <input type="password" name="password" required placeholder="Digite sua senha">
        <button type="submit">Entrar</button>
    </form>
</div>
<?php if (isset($_SESSION['message'])) {
    echo "<p style='color: #4b3621'>" . $_SESSION['message'] . "</p>";
    unset($_SESSION['message']);
} ?>

</body>
</html>

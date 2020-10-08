<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/form.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>

<div class="login-div">
        <h1>Editar preferências</h1>
        <form action="/edit_preference" method="POST">
        <?php 
            if (isset($_SESSION["message"])){
                echo "<div class='{$_SESSION['message-type']}'>{$_SESSION['message']}</div>";
                unset($_SESSION["message"]);
                unset($_SESSION["message-type"]);
            }
        ?>
            <div class="check-div">
                <input type="checkbox" id="política" name="1" <?php if ($data["1"] == "checked"){ echo "checked";}?>>
                <label for="política">Política</label>
            </div>
            <div class="check-div">
            <input type="checkbox" id="entretenimento" name="2" <?php if ($data["2"] == "checked"){ echo "checked";}?>>
            <label for="entretenimento">Entretenimento</label>
            </div>
            <div class="check-div">
            <input type="checkbox" id="ciência" name="3" <?php if ($data["3"] == "checked"){ echo "checked";}?>>
            <label for="ciência">Ciência</label>
            </div>
            <div class="check-div">
            <input type="checkbox" id= "tecnologia" name="4" <?php if ($data["4"] == "checked"){ echo "checked";}?>>
            <label for="tecnologia">Tecnologia</label>
            </div>
            <div class="check-div">
            <input type="checkbox" id="esportes" name="5" <?php if ($data["5"] == "checked"){ echo "checked";}?>>
            <label for="esportes" id="esportes">Esportes</label>
            </div>
            <button>Editar</button>
        </form>
    </div>
</body>
</html>
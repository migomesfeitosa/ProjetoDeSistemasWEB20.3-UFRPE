<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar enquete</title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/create.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-div">
        <h1>Criar nova enquete</h1>
        <?php 
            if (isset($_SESSION["message"])){
                echo "<div class='{$_SESSION['message-type']}'>{$_SESSION['message']}</div>";
                unset($_SESSION["message"]);
                unset($_SESSION["message-type"]);
            }
        ?>
        <form action="/create" method="POST">
            <input type="text" class="element" name="question" id="question" placeholder="Pergunta" required>
            <div class="options-div">
                <input type="text" class="element" name="option-1" id="option-1" placeholder="Opção 1" required>
            </div>
            <input type="text" class="add-input" name="option-2" id="option-2" placeholder="Opção 2" required> 
            <span class="add-option" id="add-option">+</span>
            <select class="element" name="category">
                <option>Escolha um categoria</option>
                <option value="1">Política</option>
                <option value="2">Entretenimento</option>
                <option value="3">Ciência</option>
                <option value="4">Tecnologia</option>
                <option value="5">Esportes</option>
            </select>
            <button>Criar</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="js/create.js"></script>
</body>
</html>
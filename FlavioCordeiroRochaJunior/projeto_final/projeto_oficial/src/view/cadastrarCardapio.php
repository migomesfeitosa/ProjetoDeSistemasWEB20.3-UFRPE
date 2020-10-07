<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio</title>
    <link rel="stylesheet" href="./css/style_cadastroCardapio.css">
</head>
<body bgcolor="black">
    <div class="fundo">
        <div class="sub-fundo">
            <div class="caixa-cadastro">
                <form action="/cardapio?store" method="post">
                <fieldset class="caixa-dados">
                    <legend class="legenda">Dados:</legend>
                    <input type="text" name="nome" id="" class="textfield" placeholder="Digite o nome" required><br>
                    <input type="text" name="preco" id="" class="textfield" placeholder="Digite o seu preço" required><br>
                    <input type="text" name="ingredientes" id="" class="textfield" placeholder="Digite os ingredientes" required><br>
                    <select name="tipo" id="" class="comboBox">
                        <option value="pizza">Pizza</option>
                        <option value="hamburguer">Hamburguer</option>
                        <option value="Pocao">Poção</option>
                        <option value="bebida">Bebida</option>
                    </select>
                    
                </fieldset>
                
                <button type="submit" class="botao">Finalizar</button>
                </form>
                <a href="/cardapio?index"><button type="submit" class="botao">Voltar</button></a>
            </div>
        </div>
    </div>
</body>
</html>
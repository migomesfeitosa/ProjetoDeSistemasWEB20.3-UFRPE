<?php
if($_SESSION['tipo'] !="usuario" ){
    header("location:/cardapio?index");
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
    <script type="text/javascript" src="script/jquery.js"></script>
    <link rel="stylesheet" href="css/style_principal.css">
</head>
<body>
    <header>
    <div class="menu">
        <div class="opcoes">
            <nav>
            <button class="botao_menu" id="btnInicio">Inicio</button>
            <button class="botao_menu" id="btnCardapio">Cardápio</button>
            <button class="botao_menu"  id="btnPedido">Pedido</button>

        </nav>
        </div>

        <div class="container_usuario">
            
            <div class="dados_usuario" id="dados_usuario">
                <label for=""><?php echo "{$_SESSION['email']}"?></label>
                <label for=""><?php echo "{$_SESSION['user']}"?></label>
            </div>
            
        </div>
        <div class="drop-menu" id="drop-menu">

            <a href="/usuario?edit&id=<?php echo $_SESSION['id']?>">
                <button class="itens-drop-menu" id="btnEditar" name="editar">Editar dados</button><br>
            </a>
            <a href="/pedidoUsuario?index">
            <button class="itens-drop-menu" id="btnVerPedidos"  name="verPedido">Ver pedidos</button><br>
            </a>
            <form action="/logout" method="get">
                <button type="submit" class="itens-drop-menu" id="btnSair"  name="sair">Sair</button>
            </form>

        </div>

    </div>
</header>

    <div class="sessao" id="sessao">
        
        <div class="sub_fundo">
            
            <div class="container_titulo">
                <br><br><br><br><br><br><br>
                <h1 class="titulo">A procura de uma pizza ideal? O que está esperando para provar nossos sabores inesquecíveis? </h1>
                <a href="/cardapioPrincipal?index"><button class="botao">Venha conferir em apenas um clique</button></a>
                
            </div>
        </div>
    </div>
    
      <script type="text/javascript" src="script/controllerPrincipal.js"></script>
</body>

</html>
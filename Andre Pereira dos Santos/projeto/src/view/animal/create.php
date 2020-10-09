<?php include __DIR__ . "/../layout/header.php" ?>

<html>
<head>
    <meta name="viewport" content="width=device=width,initial-scale=1.0">
    <title> Pagina inicial </title>
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/centro.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/create-edit-view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.1.0.min.js"></script>
</head>

<body>
<?php include __DIR__ . "/../layout/body.php" ?>

<div class="centro">

<fieldset class="field" >

<legend  style="background-color: white;" >CADASTRO DE ANIMAL</legend>

        <div id="operacoes">


        <br>
        <form class="formulario" enctype="multipart/form-data" action="/animais" method="POST">
        <div id="buscar"> 
        <label> Dono:</label>
        <select id="clientes" requered name="cliente">

        <?php foreach ($clientes as $cliente){ ?>
   
     <option name="cliente" value="<?php echo $cliente->getNome(); ?>"> <?php echo $cliente->getNome(); ?></option>
     
     <?php } ?>
     
    </select>
    
    <button type="rush"><i class="fas fa-search"></i></button>
        </div>
        
        <div id="comp">
       
        <br>
        <label>Nome:</label>
        <input type="text" requered name="nome">
        <br>
        <br>
        <div>
        <input type="file" requered name="imagem" id="foto"> 
        </div>
        <br>
        <br>
        <label>Especie:</label>
        <select id="selecao"  name="especie">
        <option requered value="roedor">Roedor</option>
        <option requered value="felino">Felino</option>
        <option requered value="canino" >Canino </option>
        <option requeredvalue="ave">Ave </option>
        </select>
        <br>
        <br>
        <label>Raça:</label>
        <input type="text" requered name="raca">
        <br>
        <br>
        <label>Porte:</label>
        <select id="selecao"  name="porte">
        <option requered value="pequeno">Pequeno</option>
        <option requered value="medio">Medio</option>
        <option requered value="grande">Grande </option>
        </select>
        <br>
        <br>
        <label>Nascimento:</label>
        <input type="date" requered name="nascimento">
        <br>
        <br>
        
        <input type="radio" requered name="castrado" value="sim"/> CASTRADO
        <input type="radio" requered name="castrado" value="nao"/> NÃO CASTRADO
        <br>
        <br>
       
        <input type="radio" requered name="sexo" value="femea"/> FEMEA
        <input type="radio" requered name="sexo" value="macho"/> MACHO
        <br>
        <div id="salvar">
        <button  type="submit"><i class="fas fa-save fa-4x"></i></button>
         </div>
        </div>
        <div id="local"></div>
        
    <br> 
       
    </div>
    </form>

</fieldset>

</div>

<footer >
 <?php include __DIR__ . "/../layout/footer.php" ?>
</footer>

<script src="//<?php echo $_SERVER["HTTP_HOST"]; ?>/js/script.js"></script>

</body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/style.css">

    <title>Cadastro de Cliente</title>
</head>
<body>
    <br>
<form  name="CadastroCliente"  method="POST"  action="//<?php echo $_SERVER["HTTP_HOST"]; ?>/DestinoDados.php"> 

<fieldset id="field">

<legend>
     Cadastro de Cliente
</legend>
<br>
    <div id="left"> 
        <label >Nome:</label>
        <br>
        <input type="text" id="nome", name="nome">
<br><br>
        <label>Sobrenome:</label>
        <br>
        <input type="text" id="sob", name="sob">
        <br><br>
        <label>Email:</label>
        <br>
        <input type="email" id="email", name="email">
    <br><br>
    </div>
    <div id="center">
    <label for="telefone">Telefone:</label>
    <br>
    <input type="text" id="telefone", name="telefone">
    <br><br>

    <label>Sexo:</label>
    <br><br> 
        <input type="radio" value="Masculino" name="sexo" >
        <label for="Masculino">Masculino</label>
        <br><br>
        <input type="radio" value="Feminio" name="sexo">
        <label for="Feminio">Feminio</label>
        <br><br>
        <input type="radio" value="Nao Definido"   name="sexo"CHECKED>
        <label for="Nd">Não Definido</label>
        <br><br>
    </div>
    <div id="right">
         <label for="rua">Rua:</label>
         <br>
         <input type="text" id="rua", name="rua">
<br><br>
        <label for="bairro">Bairro:</label>
        <br>
        <input type="text" id="bairro", name="bairro">
<br><br>
        <label for="cidade">Cidade:</label>
        <br>
        <input type="text" id="cidade", name="cidade">
<br><br>

    <label for="selecao">Estado </label>
    <br>
    <select id="selecao" name="estado">

   <?php $info = array('AC',' AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS',
    'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE','TO');?>
   
    <?php  for ($i = 0; $i <27; $i++) { ?>
      
        <option  value="<?php echo $info[$i]; ?>"> <?php echo $info[$i]; ?></option>

    <?php }?>
    </select>
    </div>
     
</fieldset>

<br><br>
<div id="envio">
<br>
<button type="reset">Limpar Campos</button>
<button type="submit"> Enviar</button>
    </div>
</form>
    
</body>
</html>
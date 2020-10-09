<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/estilo.css">

    <title>Cadastro Cliente</title>
</head>
<body>
    <div class="cadastro">
        <h1>Cadastro Cliente</h1>
        <form class = "formulario" name="CadastroCliente"  method="POST"  action="//<?php echo $_SERVER["HTTP_HOST"]; ?>/dados.php"> 

        <fieldset>

        <legend>
        Dados Pessoaiais
        </legend>
        <br>
        <label for="nome">Nome:</label>
        <input type="text" id="nome", name="nome"required>
        <br><br>
   
        <label for="sob">Sobrenome:</label>
        <input type="text" id="sob", name="sob"required>
        <br><br>
        <label for="rua">Rua:</label>
        <input type="text" id="rua", name="rua"required>
        <br><br>
        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro", name="bairro"required>
        <br><br>
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade", name="cidade"required>
        <br><br>
        <label for="selecao">Estado </label>
        <select id="selecao" name="estado">
        <?php $info = array('AC',' AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS',
        'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE','TO');?>
        <?php  for ($i = 0; $i <27; $i++) { ?>
        <option id="opcao" value="<?php echo $info[$i]; ?>"> <?php echo $info[$i]; ?></option>
         <?php }?>
        </select>
     
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email", name="email"required>
        <br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone", name="telefone"required>
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
        <br>

        </fieldset>

        <br>
        <button type="reset">Limpar Campos</button>
        <button type="submit"> Enviar</button>

        </form>
    </div>
    
</body>
</html>
<?php include __DIR__ . "/../layout/header.php" ?>

<html>
<head>
    <meta name="viewport" content="width=device=width,initial-scale=1.0">
    <title> Pagina inicial </title>
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/centro.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/create-edit-view.css">
</head>

<body>
<?php include __DIR__ . "/../layout/body.php" ?>

<div class="centro">

<fieldset class="field" >

<legend  style="background-color: white;" >Agendamento</legend>

        <br>
        <form class="formulario" enctype="multipart/form-data" action="/agendas" method="POST">
        <div id="operacoes">
        <div > 
            <br>
        <label> Serviço:</label>
        <select id="clientes" requered name="servico">
        <option requered value="Banho">Banho</option>
        <option requered value="Tosa">Tosa</option>
     
        </select>
    
    <button type="rush"><i class="fas fa-search"></i></button>
        </div>
        <div id="comp">
     
        <br>
        <label> Animal:</label>
        <select id="clientes" requered name="animal">

        <?php foreach ($animais as $animal){ ?>
   
     <option name="animal" value="<?php echo $animal->getNome(); ?>"> <?php echo $animal->getNome(); ?></option>
     
     <?php } ?>
     
    </select>
        <br>
        <br>
        <label>Horario:</label>
        <select id="selecao"  name="horario">
        <option requered value="07:00">07:00</option>
        <option requered value="08:00">08:00</option>
        <option requered value="09:00">09:00 </option>
        <option requered value="10:00">10:00</option>
        <option requered value="11:00">11:00</option>
        <option requered value="12:00">12:00</option>
        <option requered value="13:00" >13:00 </option>
        <option requered value="14:00">14:00</option>
        </select>
        <br>
        <br>
        <label>Data:</label>
        <input type="date" requered name="data">
        <br>
        <br>
        <label>Anotacao:</label>
       
        <input type="text" requered name="anotacao" /> 
        <br>
        <div id="salvar">
        <button  type="submit"><i class="fas fa-save fa-4x"></i></button>
         </div>
     
        
    <br> 
       
    </div>
        </div>
    </form>

</fieldset>
</div>

<footer >
 <?php include __DIR__ . "/../layout/footer.php" ?>
</footer>


</body>
</html>






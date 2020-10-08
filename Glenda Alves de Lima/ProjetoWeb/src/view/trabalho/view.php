

<html>
<head>
    <meta name="viewport" content="width=device=width,initial-scale=1.0">
</head>

<body>

<div class="centro">
<fieldset class="field" >

<div >
        <br>
        <div class="esquerda">
        <label>Nome do animal:</label>
        <input type="text" value="<?php echo $trabalho->getTitulo() ?>">
        <br>
        <label>Especie:</label>
        <input type="text" value="<?php echo $trabalho->getAno() ?>">
        <br>
        <label>Raça:</label>
        <input type="text" value="<?php echo $trabalho->getAutor() ?>">
        <br>
        <label>Porte:</label>
        <input type="text" Value="<?php echo $trabalho->gettipoDocumento() ?>">
        <br>
        <label>Nascimento:</label>
        <input type="date" value="<?php echo $trabalho->getArea() ?>">
        <p>
        <label>Castrado:</label>
        <input type="text"  value="<?php echo $trabalho->getDescricao() ?>"/>
        <p>
        <label>Sexo:</label>
        <input type="text"  value="<?php echo $trabalho->getDocumento() ?>"/> 
        <p>
       </div>
        <br>
     
</div>

</fieldset>
</div>


</body>
</html>






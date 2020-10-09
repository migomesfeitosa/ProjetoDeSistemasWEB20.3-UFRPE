<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/stylelist.css">
<link rel="icon" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/img/IconeLogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="jquery-3.1.0.min.js"></script>
    <title>Meus Trabalhos</title>
    
<body>
<table class="content-table">
<thead>
    <tr>
    <th>Titulo</th>
    <th>Autor</th>
    <th>Documento</th>
    <th>Area de Estudo</th>
    <th>Data de Criação</th>
    <th>Visualizar</th>
    
    </tr>
    </thead>
    <tbody>
    <tr>
    <?php foreach ($trabalhos as $trabalho){ ?>
    <tr>
        <td ><?php echo $trabalho->getTitulo() ?></td>
        <td ><?php echo $trabalho->getAutor() ?></td>
        <td ><?php echo $trabalho->getTipoDocumento() ?></td>
        <td ><?php echo $trabalho->getArea() ?></td>
        <td ><?php echo $trabalho->getAno() ?></td>
        
        <td ><a href="/trabalhos?view&id=<?php echo $trabalho->getId() ?>"><i class="far fa-eye"></i> </a></td>
    </tr>
    <?php } ?>
    </tr>
  </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>
</body>
</html>

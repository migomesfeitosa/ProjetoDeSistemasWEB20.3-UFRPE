<?php include __DIR__ . "/../layout/header.php" ?>
<?php include __DIR__ . "/../layout/body.php" ?>

<head>

<link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/centro.css">
<link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/list.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

</head>

<body>


<div class="centro">
<fieldset class="field" >
    <br>
    <div id="topo">
    <div id="esquerda">
        <label > Agenda </label>
    </div>
    <div id="direita">
    <label id="new"><i class="fas fa-user-plus fa-2x"></i></label>
    <a id="link" href="/agendas?create">Novo agendamento</a>
    </div>
    <br>
</div>
	
	<table id="demo-table">
    <tr>
    <td width="113">Horario</td>
    <td width="113">Data</td>
    <td width="113">Animal</td>
    <td width="113">Procedimento</td>
    <td width="113">Lembrete</td>
    
    <td width="60"></td>
    <td width="60"></td>
    <td width="60"></td>
    </tr>

    <?php foreach ($agendas as $agenda){ ?>
    <tr>
        <td ><?php echo $agenda->getHorario() ?></td>
        <td ><?php echo $agenda->getData() ?></td>
        <td ><?php echo $agenda->getAnimal() ?></td>
        <td ><?php echo $agenda->getServico()?></td>
        <td ><?php echo $agenda->getAnotacao() ?></td>
        
        <td ><a href="/agendas?view&id=<?php echo $agenda->getId() ?>"><i class="far fa-eye fa-2x"></a></td>
        <td ><a href="/agendas?edit&id=<?php echo $agenda->getId() ?>"><i class="fas fa-edit fa-2x"></a></td>
        <td >
			<form action="agendas?id=<?php echo $agenda->getId() ?>" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <button id="deletar" type="submit"><i class="fas fa-user-times fa-2x"></i></button >
            </form>
        </td>
    </tr>
    <?php } ?>
    
</table>

</div>
    </fieldset>

<footer >
    <?php include __DIR__ . "/../layout/footer.php" ?>
</footer>

</body>
</html>

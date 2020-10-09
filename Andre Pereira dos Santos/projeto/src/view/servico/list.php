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
        <label > Lista de Procedimentos </label>
    </div>
    <div id="direita">
    <label id="new"><i class="fas fa-user-plus fa-2x"></i></label>
    <a id="link" href="/servicos?create">Cadastrar </a>
    </div>
    <br>
</div>
	
	<table id="demo-table">
    <tr>
    <td width="113">Descricao</td>
    <td width="113">Valor</td>
    <td width="113">Duracao</td>
    
    <td width="60"></td>
    <td width="60"></td>
    <td width="60"></td>
    </tr>

    <?php foreach ($servicos as $servico){ ?>
    <tr>
        <td ><?php echo $servico->getDescricao() ?></td>
        <td ><?php echo $servico->getValor() ?></td>
        <td ><?php echo $servico->getDuracao() ?></td>
        
        <td ><a href="/servicos?view&id=<?php echo $servico->getId() ?>"><i class="far fa-eye fa-2x"></a></td>
        <td ><a href="/servicos?edit&id=<?php echo $servico->getId() ?>"><i class="fas fa-edit fa-2x"></a></td>
        <td >
			<form action="servicos?id=<?php echo $servico->getId() ?>" method="POST">
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

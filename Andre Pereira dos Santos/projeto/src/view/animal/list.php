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
        <label > Lista de Animais </label>
    </div>
    <div id="direita">
    <label id="new"><i class="fas fa-user-plus fa-2x"></i></label>
    <a id="link" href="/animais?create">Cadastrar</a>
    </div>
    <br>
</div>
	
	<table id="demo-table">
    <tr>
    <td width="113">DONO</td>
    <td width="113">NOME</td>
    <td width="113">RAÇA</td>
    <td width="113">PORTE</td>
    <td width="160">NASC</td>
    <td width="50">CAST</td>
    <td width="40">SEXO</td>
    <td width="60"></td>
    <td width="60"></td>
    <td width="60"></td>
    </tr>

    <?php foreach ($animais as $animal){ ?>
    <tr>
        <td ><?php echo $animal->getCliente() ?></td>
        <td ><?php echo $animal->getNome() ?></td>
        <td ><?php echo $animal->getRaca() ?></td>
        <td ><?php echo $animal->getPorte() ?></td>
        <td ><?php echo $animal->getNascimento() ?></td>
        <td ><?php echo $animal->getCastrado() ?></td>
        <td ><?php echo $animal->getSexo() ?></td>
        <td ><a href="/animais?view&id=<?php echo $animal->getId() ?>"><i class="far fa-eye fa-2x"></a></td>
        <td ><a href="/animais?edit&id=<?php echo $animal->getId() ?>"><i class="fas fa-edit fa-2x"></a></td>
        <td >
			<form action="animais?id=<?php echo $animal->getId() ?>" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <button id="deletar" type="submit"><i class="fas fa-trash fa-2x"></i></button >
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

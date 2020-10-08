<?php include __DIR__ . "/../layout/header.php" ?>
<?php include __DIR__ . "/../layout/body.php" ?>

<head>

<link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/centro.css">
<link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/list.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="jquery-3.1.0.min.js"></script>
</head>

<body>

<div class="centro">
<fieldset class="field" >
    <br>
<div id="topo">
    <div id="esquerda">
        <label > Lista de Clientes </label>
    </div>
    <div id="direita">
    <label id="new"><i class="fas fa-user-plus fa-2x"></i></label>
    <a id="link" href="/clientes?create">Cadastrar</a>
    </div>
    <br>
</div>
	
	<table id="demo-table">
    <tr>
    <td width="113">NOME</td>
    <td width="130">NASC</td>
    <td width="40">SEXO</td>
    <td width="130">TEL</td>
    <td width="40">EMAIL</td>
    <td width="60">.</td>
    <td width="60">.</td>
    <td width="60">,</td>
    </tr>

    <?php foreach ($clientes as $cliente){ ?>
    <tr >
        <td ><?php echo $cliente->getNome() ?></td>
        <td ><?php echo $cliente->getNascimento() ?></td>
        <td ><?php echo $cliente->getSexo() ?></td>
        <td ><?php echo $cliente->getTelefone() ?></td>
        <td ><?php echo $cliente->getEmail() ?></td>
        <td ><a href="/clientes?view&id=<?php echo $cliente->getId() ?>"><i class="far fa-eye fa-2x"></a></td>
        <td ><a href="/clientes?edit&id=<?php echo $cliente->getId() ?>"><i class="fas fa-edit fa-2x"></a></td>
        <td >
			<form action="clientes?id=<?php echo $cliente->getId() ?>" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <button  type="submit"><i class="fas fa-user-times fa-2x"></i></button >
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>
</body>
</html>

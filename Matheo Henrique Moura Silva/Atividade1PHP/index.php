<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT</title>
</head>
<body>
    
    <h1>ORGANIZADOR DE INFORMAÇÕES</h1>

    <form action="print.php" method="POST">

        <input type="text" name="nome" require placeholder="NOME">
        <br>
        <br>
        <input type="text" name="sobrenome" require placeholder="SOBRENOME">
        <br>
        <br>
        <input type="text" name="rua" require placeholder="RUA">
        <br>
        <br>
        <input type="text" name="bairro" require placeholder="BAIRRO">
        <br>
        <br>
        <input type="text" name="cidade" require placeholder="CIDADE">
        <br>
        <br>
        
        <label for="sel">Selecione o Estado</label>
        <select name="estado" id="sel" require>
            <option selected="select" value="">ESTADO</option>
            <option value="PERNAMBUCO">PERNAMBUCO</option>
            <option value="SÃO PAULO">SÃO PAULO</option>
            <option value="RIO DE JANEIRO">RIO DE JANEIRO</option>
            <option value="BAHIA">BAHIA</option>
            <option value="CÉARA">CÉARA</option>
            <option value="PARAÍBA">PARAÍBA</option>
            <option value="ACRE">ACRE</option>
        </select>
        
        
        <br>
        <br>
        <input type="email" name="email" require placeholder="E-MAIL">
        <br>
        <br>
        <input type="text" name="telefone" require placeholder="CONTATO">
        <br>
        <br>
        <label for="sex1"><input type="radio" name="sexo" id="sex1" value="MASCULINO">MASCULINO</label>
        <label for="sex2"><input type="radio" name="sexo" id="sex2" value="FEMININO">FEMININO</label>
        <label for="sex3"><input type="radio" name="sexo" id="sex3" value="NÃO DEFINIDO" checked>NÃO DEFINIDO</label>
        <br>
        <br>

        <button type="submit">VISUALIZAR</button>
        <button type="reset">ZERAR</button>
    </form>

</body>
</html>
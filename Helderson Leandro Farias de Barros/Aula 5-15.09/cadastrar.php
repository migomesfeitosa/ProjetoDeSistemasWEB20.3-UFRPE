<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="css/cadastrar.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-div">
        <h1>Registrar-se</h1>
        <form action="cadastrado.php" method="POST">
            <div class="nomes">
                <input type="text" class="nome" name="nome" id="usuario" placeholder="Nome" required>
                <input type="text" class="sobrenome" name="sobrenome" placeholder="Sobrenome" required>
            </div>
            <input type="text" class="elemento" name="rua" placeholder="Rua" required>
            <input type="text" class="elemento" name="bairro" placeholder="Bairro" required>
            <input type="text" class="elemento" name="cidade" placeholder="Cidade" required>
            <label for="estado" class="label-estado">Selecione um estado</label>
            <select class="estado" name="estado" id="estado" required>
                <option value="Acre (AC)">Acre (AC)</option>
                <option value="Alagoas (AL)">Alagoas (AL)</option>
                <option value="Amapá (AP)">Amapá (AP)</option>
                <option value="Amazonas (AM)">Amazonas (AM)</option>
                <option value="Bahia (BA)">Bahia (BA)</option>
                <option value="Ceará (CE)">Ceará (CE)</option>
                <option value="Distrito Federal (DF)">Distrito Federal (DF)</option>
                <option value="Espírito Santo (ES)">Espírito Santo (ES)</option>
                <option value="Goiás (GO)">Goiás (GO)</option>
                <option value="Maranhão (MA)">Maranhão (MA)</option>
                <option value="Mato Grosso (MT)">Mato Grosso (MT)</option>
                <option value="Mato Grosso do Sul (MS)">Mato Grosso do Sul (MS)</option>
                <option value="Minas Gerais (MG)">Minas Gerais (MG)</option>
                <option value="Pará (PA)">Pará (PA)</option>
                <option value="Paraíba (PB)">Paraíba (PB)</option>
                <option value="Paraná (PR)">Paraná (PR)</option>
                <option value="Pernambuco (PE)">Pernambuco (PE)</option>)
                <option value="Piauí (PI)">Piauí (PI)</option>
                <option value="Rio de Janeiro (RJ)">Rio de Janeiro (RJ)</option>
                <option value="Rio Grande do Norte (RN)">Rio Grande do Norte (RN)</option>
                <option value="Rio Grande do Sul (RS)">Rio Grande do Sul (RS)</option>
                <option value="Rondônia (RO)">Rondônia (RO)</option>
                <option value="Roraima (RR)">Roraima (RR)</option>
                <option value="Santa Catarina (SC)">Santa Catarina (SC)</option>
                <option value="São Paulo (SP)">São Paulo (SP)</option>
                <option value="Sergipe (SE)">Sergipe (SE)</option>
                <option value="Tocantins (TO)">Tocantins (TO)</option>
            </select>
            <input type="email" class="elemento" name="email" id="" placeholder="Endereço de email" required>
            <input type="text" class="elemento" name="telefone" id="" placeholder="Telefone" required>
            <div class="nomes">
                <label for="">Sexo: </label>
                <input type="radio" name="sexo" id="masculino" value="Masculino">
                <label for="masculino">Masculino</label>
                <input type="radio" name="sexo" id="feminino" value="Feminino">
                <label for="feminino">Feminino</label>
                <input type="radio" name="sexo" id="indefinido" value="Indefinido">
                <label for="indefinido">Indefinido</label>
            </div>
            <button class="elemento">Registrar</button>
        </form>
    </div>
</body>
</html>
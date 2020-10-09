<?php

$nome = ($_POST["nome"]);
$sobrenome = ($_POST["sobrenome"]);
$rua = ($_POST["rua"]);
$bairro = ($_POST["bairro"]);
$cidade = ($_POST["cidade"]);
$estado = ($_POST["estado"]);
$email = ($_POST["email"]);
$contato = ($_POST["telefone"]);
$sexo = ($_POST["sexo"]);

echo "<h1>Suas Informações Pessoais</h1>";
echo "<hr><br>";
echo "Meu primeiro nome é ".$nome." e meu sobrenome é ".$sobrenome."!";
echo "<br><br>";
echo "Eu moro na rua ".$rua." do bairro ".$bairro." na cidade de ".$cidade." no estado de ".$estado."!";
echo "<br><br>";
echo "Meu e-mail para contato é ".$email.", se preferir meu número de celular é ".$contato;
echo "<br><br>";
echo "Eu sou do sexo ".$sexo."!";
?>
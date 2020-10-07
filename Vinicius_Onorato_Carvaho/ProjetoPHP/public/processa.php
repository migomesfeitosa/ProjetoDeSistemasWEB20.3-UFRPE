<?
session_start();

include_once("conexao.php");

$nome = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);
$senha = md5($senha);
//echo "Nome:$nome<br>";
//echo "E-mail: $email <br>";

$result_usuario =  "INSERT INTO user (name,email,password) VALUES ('$nome','$email','$senha')";
$resultado_usuario =  mysqli_query($conn,$result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION ['msg'] = "<p style='color:green;'>Usuário Cadastrado com sucesso<a href='auth' class='login-cadastro'><br>Faça seu login Aqui!</a></p>";
    header('Location: cadastrar.php');
}else {
    header('Location: cadastrar.php');
}
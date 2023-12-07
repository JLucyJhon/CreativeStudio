<?php
include_once('config.php');
$email = $_POST['Email'];
$senha = $_POST['Senha'];
$resultado = fazer_verifica_cadastro($conexao, $email, $senha);
if ($resultado) {
    header('Location: foryou.html');
    exit();
} else {
    echo "Usuário ou Senha Inválidos.";
}

function fazer_verifica_cadastro($conexao, $email, $senha) {
$sql = "select * from artista where email='$email' and senha='$senha'" ;

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 1) {
return;
} else {
return "Os dados não conferem";
}
}

?>
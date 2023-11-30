<?php
include_once('config.php');

$nome = $_POST['NOME'];
$sobrenome = $_POST['SOBRENOME'];
$usuario = $_POST['USUARIO'];
$nascimento = $_POST['NASCIMENTO'];
$email = $_POST['EMAIL'];
$senha = $_POST['SENHA']; 
$genero = $_POST['GENERO'];
$pronome = $_POST['PRONOME'];
$estado = $_POST['ESTADO'];
$cidade = $_POST['CIDADE'];
$bairro = $_POST['BAIRRO'];
$tipoArte = $_POST['tipoArte'];
$intagram = $_POST['INSTAGRAM'];
$facebook = $_POST['FACEBOOK'];
$pinterest = $_POST['PINTEREST'];
$tiktok = $_POST['TIKTOK'];
$x = $_POST['X'];
$youtube = $_POST['YOUTUBE'];

try{
    $sql = "insert into artista (NOME, SOBRENOME, USUARIO, NASCIMENTO,  EMAIL, SENHA, GENERO, PRONOME, ESTADO, CIDADE, BAIRRO, tipoArte, INSTAGRAM, FACEBOOK, PINTEREST, TIKTOK, X, YOUTUBE) values ('$nome', '$sobrenome', '$usuario', '$nascimento',  '$email', '$senha', '$genero', '$pronome', '$estado', '$cidade', '$bairro', '$tipoArte', '$intagram', '$facebook', '$pinterest', '$tiktok', '$x', '$youtube',)";
    mysqli_query($conexao, $sql);
    print "<script>alert('Cadastrado com sucesso!')
    location.href='listarRegistros.php'
    </script>";
}
    catch(mysqli_sql_exception $e){
    print "<script>alert('Erro ao inserir o usuário.')</script>";
    echo "Ocorreu um erro na consulta SQL" . $e ->getMessage();
}
?>
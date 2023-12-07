<?php
include_once('config.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$senha = $_POST['senha']; 
$genero = $_POST['genero'];
$pronome = $_POST['pronome'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$tipoarte = $_POST['tipoarte'];
$intagram = $_POST['instagram'];
$facebook = $_POST['facebook'];
$pinterest = $_POST['pinterest'];
$tiktok = $_POST['tiktok'];
$x = $_POST['x'];
$youtube = $_POST['youtube'];

$config = mysqli_query($conexao,"INSERT INTO ARTISTA (nome, sobrenome, nascimento, email, senha, genero, pronome, estado, cidade, bairro, tipoarte, instagram, facebook, pinterest, tiktok, x, youtube) VALUES ('{$nome}', '{$sobrenome}', '{$nascimento}',  '{$email}', '{$senha}', '{$genero}', '{$pronome}', '{$estado}', '{$cidade}', '{$bairro}', '{$tipoarte}', '{$intagram}', '{$facebook}', '{$pinterest}', '{$tiktok}', '{$x}', '{$youtube}')");

header('Location: perdiaconta.html');


?>
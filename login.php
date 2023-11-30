<?php
include 'conexao.php';

function conexao() {
    $conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if(mysqli_connect_errno()){
        die ("Failed to connect to MySQL: " . mysqli_connect_error());
    } else {
        return $conexao;
    }
}

function verificar_dados($email, $senha){
    $conexao = conexao();

    $sql = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = '{$senha}'";
    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) > 0) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['email'])) {
    $email = strip_tags($_POST['email']);

    if (isset($_POST['senha'])) {
        $senha = strip_tags($_POST['senha']);

        if (!empty($email) && !empty($senha)) {
            if (verificar_dados($email, $senha)) {
                echo "Login feito";
            } else {
                echo "Dados incorretos!";
            }
        } else {
            echo "Campo(s) em branco!";
        }
    } else {
        echo "Senha não informada";
    }
} else {
    echo "Campo e-mail não informado";
}

mysqli_close($conexao);

<?php
    $dbHost =  'Localhost';
    $dbUse = 'root';
    $bdSenha = '';
    $dbName = 'DB_CS';

    $conexao = new mysqli($dbHost, $dbUse, $bdSenha, $dbName); 

    // if($conexao->conenct_errno){
    //     echo "Erro";
    // }
    // Else{
    //     echo "Conexão efetuada com sucesso";
    // }
?>
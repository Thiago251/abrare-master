<!--Teste de Conexão -->
<?php

    $dbHost = 'localhost';
    $bancodedados = 'abaretech';
    $usuario= 'root';
    $senha = '';

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

    if($mysqli->connect_errno)
    {
        echo "Erro";
    }

    else{
        echo "Conexão efetuada com sucesso";
    }
?>
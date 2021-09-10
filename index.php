<!--Teste de Conexão -->
<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'abaretech';

    $conexao = new mysqli($host, $user, $password, $database);

    if($conexao->connect_errno)
    {
        echo "Error, Conexão não efetuada";
    }

    else{
        echo "Conexão efetuada com sucesso, agora é com você ALONSO !!!";
    }
?>
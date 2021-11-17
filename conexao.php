<!--Teste de Conexão -->
<?php

    $host = 'localhost';
    $user = 'root';
    $password = 'Ambev@2020';
    $database = 'abaretech';

    $conexao = new mysqli($host, $user, $password, $database);

    //if($conexao->connect_errno)
    //{
      //  echo "Error, Conexão não efetuada";
    //}

    //else{
      //  echo "Conexão efetuada com sucesso com MySQL Server";
    //}
?>
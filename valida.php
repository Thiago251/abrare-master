<?php

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }

  // Tenta se conectar ao servidor MySQL
  mysqli_connect('localhost', 'root', 'Ambev@2020') or trigger_error(mysqli_error());
  // Tenta se conectar a um banco de dados MySQL
  mysqli_select_db("abaretech") or trigger_error(mysqli_error());

  $usuario = mysqli_real_escape_string($_POST['user']);
  $senha = mysqli_real_escape_string($_POST['pass']);

  // Validação do usuário/senha digitados
  $sql = "SELECT `user`, `pass`, FROM `usuarios` WHERE (`user` = '".$user ."') AND (`pass` = '". sha1($pass) ."') AND (`ativo` = 1) LIMIT 1";
  $query = mysqli_query($sql);
  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);
  }

  ?>
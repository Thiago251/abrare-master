<?php


if(!isset($_SESSION)){
  session_start();
}


    if(empty($_SESSION['email'])){       
        if(!isset($_POST['email'])){
            die("Você não tem acesso a esta página. Porque não está Logado.<p><a href=\"index.php\">Entrar</a></p>");

  }
}


?>

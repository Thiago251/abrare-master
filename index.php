<?php

if(!isset($_SESSION)){
  session_start();
}
include('conexao.php');

if(isset($_POST['email'])|| isset($_POST['pass'])){
    if(strlen($_POST['email'])==0){
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['pass'])==0){
        echo "Preencha sua senha";
    } else {

       

      //$sql_code = "SELECT email,pass FROM usuarios WHERE email='".$_POST['email']."' AND pass='".$_POST['pass']."'";
      $sql_code = "SELECT * FROM usuarios WHERE email='".$_POST['email']."' AND pass='".$_POST['pass']."'";
      
        //$sql_query = $mysqli->query($sql_code) or die("falha no banco de dados SQL: " . $mysqli->error);
         $sql_query = $conexao->query($sql_code) or die("falha no banco de dados SQL: " . $conexao->error);
        
        $quantidade = $sql_query->num_rows;
        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
            if (isset($_SESSION)){
                  session_start();                 
            }
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['pass'] = $usuario['pass'];
              header("location: main.php");
            //echo $_POST['email'];

        } else {
            echo "E-mail ou Senha incorretos";
        }
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="img/logo.bmp">
    <title>Login Usuário</title>
    <style>
        body {
              font-family: Arial, Helvetica, sans-serif;
              background-image: linear-gradient(to right, rgb(169, 174, 177), rgb(17, 54, 71));
        }
        .box
        {
              position: absolute;
              top: 40%;
              left: 50%;
              transform:translate(-50%,-50%);
              background-color: rgba(0, 0, 0, 0.2);
              padding: 25px;
              border-radius: 25px;
              width: 30%;
              color: white;
        }
        fieldset{
              border: 3px solid darkgray;
        }
        legend{
          border: 1px solid darkgray;
          padding: 10px;
          text-align: center;
          background-color: darkgray;
          border-radius: 5px;    
        }
        .inputbox{
          position: relative;
        }
        .inputUser{
          
          background: none;
          border: none;
          border-bottom: 1px solid white;
          outline: none;
          color: white;
          font-size: 15px;
          width: 100%;
          letter-spacing: 2px;
        }
        .labelInput{
          position: absolute;
          top: 0px;
          top: 0px;
          left: 0px;
          pointer-events: none;
          transition: 1s;
          
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
          top: -20px;
          font-size: 12px;
        } 
        #submit{
          background-image: linear-gradient(to right, rgb(169, 174, 177), rgb(17, 54, 71));
          border: none;
          position: absolute;
          left: 155px;
          width: 30%;
          padding: 5px;
          color: white;
          font-size: 20px;
          border-radius: 15px;
          cursor: pointer;
        }
        #submit:hover{
          background-image: linear-gradient(to right, rgb(51, 82, 100), rgb(17, 54, 71));
        }
        
        a:link {
          color: blue;
        }
        a:visited {
          color: white;
        }
        a:hover {
          color: blue;
        }
        a:active {
          color: blue;
        }
    </style>
</head>
<body>
  <div class="box">
   <form action="" method="POST">
    <fieldset>
      <legend><b>Acessar sua conta</b></legend>
     
      <br><br>
      <div class="inputbox">
        <input type="text" name="email" id="email" class="inputUser" required>
        <label for="email" class="labelInput">E-mail</label>
      </div>
      <br><br>
      <div class="inputbox">
        <input type="password" name="pass" id="pass" class="inputUser" required>
        <label for="pass" class="labelInput">Senha</label>
      </div>
      <br><br>
      <input type="submit" name="submit" id="submit" value="Entrar">     
      <br><br><br><br>
      <div class="novasenha">
      <li><a href="novasenha.html" target="novasenha.html">Esqueci minha senha</a></li>
      </div>
      <div class="novasenha">
      <li><a href="http://127.0.0.1/abrare-master/formulario.php" target="http://127.0.0.1/abrare-master/formulario.php">Ainda não é inscrito?<b>Cadastre-se!</b></a></li>       
      </div>
      </fieldset>
   </form>
  </div>
 </body>
</html>


<?php
    if(isset($_POST['submit']))
    {
      include_once('conexao.php');

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $sexo = $_POST['genero'];
      $data_nasc = $_POST['data_nasc'];
      $endereco = $_POST['endereco'];
      $cidade = $_POST['cidade'];
      $estado = $_POST['estado'];
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $passconfirm = $_POST['passconfirm'];

      $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,endereco,cidade,estado,
       user,pass,passconfirm) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$endereco','$cidade','$estado',
       '$user','$pass','$passconfirm')");
        echo"Cadastrado com Sucesso !";    
        header("Location: popupsSucesso.php");
        
      }

      
      
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Cadastro Usuário</title>
    <style>
        body {
              font-family: Arial, Helvetica, sans-serif;
              background-image: linear-gradient(to right, rgb(169, 174, 177), rgb(17, 54, 71));
        }
        .box
        {
              position: absolute; 
              top: 60%;
              left: 50%;
              transform:translate(-50%,-50%);
              background-color: rgba(0, 0, 0, 0.2);
              padding: 25px;
              border-radius: 25px;
              width: 40%;
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
        #data_nascimento{
          background: none;
          border: none;
          border-bottom: none;
          border-radius: 10px;
          outline: none;
          color: white;
          font-size: 15px;
          width: 33%;
          letter-spacing: 2px;
          cursor:pointer;
        }
        #data_nascimento:hover{
          background-image: linear-gradient(to right, rgb(51, 82, 100), rgb(17, 54, 71)); 
        }
        #submit{
          background-image: linear-gradient(to right, rgb(169, 174, 177), rgb(17, 54, 71));
          border: none;
          width: 100%;
          padding: 15px;
          color: white;
          font-size: 15px;
          border-radius: 15px;
          cursor: pointer;
        }
        #submit:hover{
          background-image: linear-gradient(to right, rgb(51, 82, 100), rgb(17, 54, 71));
        }
    </style>
</head>
<body>
  <div class="box">
   <form action="formulario.php" method="POST">
    <fieldset>
      <legend><b>Cadastro de usuário</b></legend>
      <br><br>
      <div class="inputbox">
            <input type="text" name="nome" id="nome" class="inputUser" required>
            <label for="nome" class="labelInput">Nome Completo</label>
      </div>
      <br><br>
      <div class="inputbox">
        <input type="text" name="email" id="email" class="inputUser" required>
        <label for="email" class="labelInput">E-mail</label>
      </div>
      <br><br>
      <div class="inputbox">
        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
        <label for="telefone" class="labelInput">Telefone</label>
      </div>
      <p>Sexo:</p>
      <input type="radio" id="feminino" name="genero" value="feminino" required>
      <label for="feminino">Feminino</label>
      <br>
      <input type="radio" id="masculino" name="genero" value="masculino" required>
      <label for="masculino">Masculino</label>
      <br>
      <input type="radio" id="outro" name="genero" value="outro" required>
      <label for="outro">Outro</label>
      <br> <br>
        <label for="data_nasc"><b>Data de Nascimento: </b></label>
        <input type="date" name="data_nasc" id="data_nasc"  required>
      <br><br><br>
       <div class="inputbox">
            <input type="text" name="endereco" id="endereco" class="inputUser" required>
            <label for="endereco" class="labelInput">Endereço</label>
      </div>
      <br><br>
      <div class="inputbox">
        <input type="text" name="cidade" id="cidade" class="inputUser" required>
        <label for="cidade" class="labelInput">Cidade</label>
      </div>
      <br><br>
      <div class="inputbox">
        <input type="text" name="estado" id="estado" class="inputUser" required>
        <label for="estado" class="labelInput">Estado</label>
      </div>
      <br><br>
      <!--<div class="inputbox">
        <input type="text" name="user" id="user" class="inputUser" required>
        <label for="user" class="labelInput">Digite um Login</label>
      </div> 
      <br><br>-->
      <div class="inputbox">
        <input type="password" name="pass" id="pass" class="inputUser" required>
        <label for="pass" class="labelInput">Digite uma senha</label>
      </div>
      <br><br>
      <div class="inputbox">
        <input type="password" name="passconfirm" id="passconfirm" class="inputUser" required>
        <label for="passconfirm" class="labelInput">Confirme sua Senha</label>
      </div>
      <br><br>
      <input type="submit" name="submit" id="submit" value="Cadastrar">
      
      <br><br>
             
    </fieldset>
   </form>
  </div>
 </body>
</html>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
   <form action="" method="">
    <fieldset>
      <legend><b>Login do usuário</b></legend>
     
      <br><br>
      <div class="inputbox">
        <input type="text" name="user" id="user" class="inputUser" required>
        <label for="user" class="labelInput">Login</label>
      </div>
      <br><br>
      <div class="inputbox">
        <input type="text" name="pass" id="pass" class="inputUser" required>
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

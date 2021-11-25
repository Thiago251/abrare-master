<?php


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="img/logo.bmp">
    <title>Cadastrado com Sucesso</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    

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
              background-color: rgba(22, 12, 33, 0.2);
              padding: 30px;
              border-radius: 0px;
              border: 20px greenyellow;
              width: 30%;
              color: rgb(255,99,71); 
        }
        fieldset{
              border: 0px solid darkgray;
        }
        legend{
          border: 1px solid darkgray;
          padding: 20px;
          text-align: center;
          background-color: darkgray;
          border-radius: 5px;
          color: rgb(10, 128, 0)     
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

        #login{
          background-image: linear-gradient(to right, rgb(169, 174, 177), rgb(17, 54, 71));
          border: none;
          position: absolute;
          left: 155px;
          bottom: 10px;
          width: 35%;
          padding: 5px;
          color: white;
          font-size: 10px;
          border-radius: 15px;
          cursor: pointer;
        }
        #login:hover{
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
   <form action="index.php" method="POST">
    <fieldset>
      <legend><b>Cadastro Realizado com Sucesso !</b></legend>
     
      
      <button name = "login" id = login>Acesse agora !</button>
      
      </fieldset>
   </form>
  </div>
 </body>
</html>


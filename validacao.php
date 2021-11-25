

<?php


if(!isset($_SESSION)){
  session_start();
}


    if(empty($_SESSION['email'])){       
        if(!isset($_POST['email'])){
            die("**Esta página da Web não está disponível. Por favor, entrar com sua 'conta' **<p><a href=\"index.php\">Entrar</a></p>");

  }
}
?>


<!--
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>sem acesso</title>
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
              border: 10px greenyellow;
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

        .validacao{
          background-image: linear-gradient(to right, rgb(169, 174, 177), rgb(17, 54, 71));
          border: none;
          position: absolute;
          left: 210px;
          bottom: 10px;
          width: 9%;
          padding: 0px;
          color: white;
          font-size: 15px;
          border-radius: 0px;
          cursor: pointer;
          outline: none;
          border: none;
        }
        .validacao:hover{
          background-image: linear-gradient(to right, rgb(51, 82, 100), rgb(17, 54, 71));
        }
        
        a:link {
          color: none;
        }
        a:visited {
          color: white;
        }
        a:hover {
          color: none;
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
    <legend><b>**Esta página da Web não está disponível. Por favor, entrar com sua 'conta'**</b></legend>
<div class="validacao">
</div>
</fieldset>
   </form>
  </div>
 </body>
</html>


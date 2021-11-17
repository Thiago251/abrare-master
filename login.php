<?php
//include("includes/conexao.php");

//if($_GET[sair]==1){
	$_SESSION = array(); 
//}
?>	
	
     
<style>

	
	
/*Barra de rolagem    https://pt.stackoverflow.com/questions/68928/como-estilizar-a-barra-de-rolagem*/	
::-webkit-scrollbar              { width: 13px; background: #F4F4F4; }
::-webkit-scrollbar-button       { background-color: #000; }
::-webkit-scrollbar-track        { background-color: #F4F4F4; }
::-webkit-scrollbar-track-piece  { background-color: #F4F4F4; }
::-webkit-scrollbar-thumb        { background: #dad7d7; }
::-webkit-scrollbar-corner       { background-color: #000; color:#fff; }
::-webkit-resizer                { background-color: #000; color:#fff;  }	
	
/*Fim Barra de rolagem*/		
	
	
.login-container-troca-senha{
    margin: auto;
    position: absolute;
    top: 40px;
    right: 18px;
    color: #fff;
    font-weight: 600;
}

.login-container-cadastre-se{
    margin: auto;
    position: absolute;
    top: 15px;
    right: 18px;
    color: #fff;
    font-weight: 600;
}

.login-container-lembrar{
    margin-top: 15px;
    margin-left: 10px;
    color: white;
}

.login-container {
    height: 254px;
    margin: auto;
    position: absolute;
    top: 0; left: 0; bottom: 0; right: 0;
}
	
.login-container2{
	margin-top:22px;
}
	

.login-container-recuperar {
    height: 149px;
    margin: auto;
    position: absolute;
    top: 0; left: 0; bottom: 0; right: 0;
}

.login-container-mobile {
    height: 215px;
    margin: auto;
    position: absolute;
    top: 0; left: 0; bottom: 0; right: 0;
}

.login {
    position: relative;
    margin: auto;
    padding: 10px 10px 5px;
    max-width: 300px;
    height: auto;
    background: rgba(0, 0, 0, 0.4);
    border-radius: 5px;
    font-family: Verdana, Arial, Helvetica, sans-serif;
}
	
	

.loginCadastro {
    position: relative;
    margin: auto;
    padding: 10px 10px 5px;
    max-width: 70%;
    height: auto;
    background: rgba(0, 0, 0, 0.4);
    border-radius: 5px;
    font-family: Verdana, Arial, Helvetica, sans-serif;
}
	
	
.loginCadastro h1 {
    margin: 0px -10px 5px;
    line-height: 48px;
    font-size: 24px;
    color: #fff;
    text-align: left;
    border-radius: 3px 3px 0 0;
    padding-left: 24px;
}	
	

.login:before {
    content: '';
    position: absolute;
    top: -8px;
    right: -8px;
    bottom: -8px;
    left: -8px;
    z-index: -1;
    background: rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

.login h1 {
    margin: 0px -10px 5px;
    line-height: 48px;
    font-size: 24px;
    color: #fff;
    text-align: left;
    border-radius: 3px 3px 0 0;
    padding-left: 24px;
}

.login p {
    margin: 10px 0 0;
    font-size: 12px;
}

.login p:first-child {
    margin-top: 0;
}

.login p.remember_me {
    float: left;
    line-height: 31px;
}

.login p.remember_me label {
    font-size: 12px;
    color: #777;
    cursor: pointer;
}

.login p.remember_me input {
    position: relative;
    bottom: 1px;
    margin-right: 4px;
    vertical-align: middle;
}

.input-login {
    margin: 10px 0 10px 0;
    font-weight: 600;
}

.group-input {
    color: #fff;
    background: 0;
}

.input-text {
    background: none;
    background-image: none;
    background-position-x: initial;
    background-position-y: initial;
    background-size: initial;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;
    background-color: initial;
    color: #fff;
    border-left: 0;
}
	
.input-text-select {
    background: none;
    background-image: none;
    background-position-x: initial;
    background-position-y: initial;
    background-size: initial;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;
    background-color: rgba(0, 0, 0, 0.30);
    color: #fff;
    border-left: 0;
}	
	

.login p.submit {
    width: 100%;
}

.login-help {
    margin: 20px 0;
    font-size: 11px;
    color: white;
    text-align: center;
    text-shadow: 0 1px #2a85a1;
}

.login-help a {
    color: #cce7fa;
    text-decoration: none;
}

.login-help a:hover {
    text-decoration: underline;
}

.btn-login-header {
    background: rgba(0, 0, 0, 0.65) no-repeat;
    /*padding: 0 0 0 0px;*/
    border: none;
    width: 100%;
    border-radius: 0px;
    cursor: default;
}

.btn-login-header-image {
    /*margin-top: 5px;*/
    /*width: 98%;*/
    max-width: 240px;
    /*height: 50px;*/
}

.btn-login {
    background-color: rgba(0, 0, 0, 0.65);
    padding: 0 0 0 0px;
    width: 100%;
    border-radius: 0px;
    font-weight: 900;
    font-size: 34px;
    color: #fff;
}

.form-control::-webkit-input-placeholder {
    font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
    color: white;
    font-size: 14px;
    font-weight: 600;
}
.form-control:-moz-placeholder {
    font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
    color: white;
    font-size: 14px;
    font-weight: 600;
}
.form-control::-moz-placeholder {
    font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
    color: white;
    font-size: 14px;
    font-weight: 600;
}
.form-control:-ms-input-placeholder {
    font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
    color: white;
    font-size: 14px;
    font-weight: 600;
}

.label-lembrar-de-mim {
    padding-top: 2px;
    font-weight: 600;
}
.label-lembrar-de-mim:hover {
    padding-top: 2px;
    font-weight: 600;
	color: #93d2d1;
}	
	
	

input {
    font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
    font-size: 14px;
}

input[type=text]:focus, input[type=password]:focus {
    border-color: #7dc9e2;
    outline-color: #dceefc;
    outline-offset: 0;
}

input[type=submit] {
    padding: 0 18px;
    height: 29px;
    font-size: 12px;
    font-weight: bold;
    color: #527881;
    text-shadow: 0 1px #e3f1f1;
    background: #cde5ef;
    border: 1px solid;
    border-color: #b4ccce #b3c0c8 #9eb9c2;
    border-radius: 16px;
    outline: 0;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    background-image: -webkit-linear-gradient(top, #edf5f8, #cde5ef);
    background-image: -moz-linear-gradient(top, #edf5f8, #cde5ef);
    background-image: -o-linear-gradient(top, #edf5f8, #cde5ef);
    background-image: linear-gradient(to bottom, #edf5f8, #cde5ef);
    -webkit-box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
    box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
}

input[type=submit]:active {
    background: #cde5ef;
    border-color: #9eb9c2 #b3c0c8 #b4ccce;
    -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
    box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
}

input[type=button] {
    padding: 0 18px;
    height: 29px;
    font-size: 12px;
    font-weight: bold;
    color: #527881;
    text-shadow: 0 1px #e3f1f1;
    background: #cde5ef;
    border: 1px solid;
    border-color: #b4ccce #b3c0c8 #9eb9c2;
    border-radius: 16px;
    outline: 0;
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    background-image: -webkit-linear-gradient(top, #edf5f8, #cde5ef);
    background-image: -moz-linear-gradient(top, #edf5f8, #cde5ef);
    background-image: -o-linear-gradient(top, #edf5f8, #cde5ef);
    background-image: linear-gradient(to bottom, #edf5f8, #cde5ef);
    -webkit-box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
    box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
}

.lt-ie9 input[type=text], .lt-ie9 input[type=password] {
    line-height: 34px;
}

#output{
    height: 50px;
    max-width: 300px;
    position: absolute;
    margin: auto;
    text-align: center;
    color: #fff;
    top: -320px; left: 0; bottom: 0; right: 0;
    font-weight: bold;
}

#output.alert-success{
    background: rgb(25, 150, 100);
}

#output.alert-danger{
    background: rgb(228, 105, 105);
}

#output-nova-senha{
    height: 50px;
    width: 300px;
    position: absolute;
    margin: auto;
    text-align: center;
    color: #fff;
    top: -215px; left: 0; bottom: 0; right: 0;
    /*font-weight: bold;*/
}

#output-nova-senha.alert-success{
    background: rgb(25, 150, 100);
}

#output-nova-senha.alert-danger{
    background: rgb(228, 105, 105);
}


.avatar{
    /*width: 290px;
    height: 150px;*/
    /*margin: 10px auto 30px;*/
    margin-top: 10px;
    margin-bottom: 30px;
    margin-left: 15%;
    /*border-radius: 100%;*/
    /*border: 2px solid #aaa;*/
}

.form-box input{
    width: 100%;
    padding: 10px;
    text-align: center;
    height:40px;
    border: 1px solid #ccc;
    background: #fafafa;
    transition:0.2s ease-in-out;

}

.form-box input:focus{
    outline: 0;
    background: #eee;
}

.form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
    text-transform: lowercase;
}

.form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
}

.form-box button.login{
    margin-top:15px;
    padding: 10px 20px;
    outline: none;
}

.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

@-webkit-keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        transform: translateY(20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px);
    }

    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
    }
}

.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp;
}

.btn-submit {
    width: 100%;
    margin-top: 10px;
    font-weight: 600;
}

.btn-submit-email {
	width: 100%;
    margin-top: 50px;
    font-weight: 600;
}

a {color:#fff;}      /* unvisited link */
a:visited {color:#fff;}  /* visited link */
a:hover {color:#fff;}  /* mouse over link */
a:active {color:#fff;}  /* selected link */

.pr-wrap {
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 999;
}

.pass-reset {
    margin: 0 auto;
    height: 246px;
    background: #FFFFFF;
    padding: 10px 10px 5px;
	border-radius: 5px;
}

.pass-reset label {
    font-size: 12px;
    font-weight: 400;
    margin-bottom: 30px;
	margin-top: 20px;
}

.pass-reset input[type="email"] {
    width: 100%;
    margin: 5px 0 0 0;
    padding: 5px 10px;
    background: 0;
    border: 0;
    border-bottom: 1px solid #000000;
    outline: 0;
    font-style: italic;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 5px;
    color: #000000;
    outline: 0;
}

.pass-reset input[type="submit"] {
    width: 100%;
    border: 0;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    margin-top: 10px;
    outline: 0;
    cursor: pointer;
    letter-spacing: 1px;
}

.pass-reset input[type="submit"]:hover {
    transition: background-color 0.5s ease;
}

#closeId {
    position: absolute;
    background: white;
    color: #040404;
    top: 5px;
    right: 5px;
    border: 0;
    border-radius: 5px;
    font-weight: 600;
}
	
	
div[mudarLela]{
cursor:pointer;
}
div[mudarLela]:hover{
	cursor:pointer;
	color: #93d2d1;
}	
	
#esqueci_senha{
	cursor:pointer;
}
#esqueci_senha:hover{
	cursor:pointer;
	color: #93d2d1;
}
	
	
	
	
/*::placeholder { 
    color: #fff;
    opacity: 1; 
}

:-ms-input-placeholder{ 
    color: #fff;
}

::-ms-input-placeholder{ 
    color: #fff;
}	
	*/
</style>      
                    

                                                              
       
       <div class="w3-animate-left login-container" id="DLogin" >
			<div id="output"></div>
			<div id="loginId" class="login ">
				<h1>Login</h1>
				<!--<div class="login-container-cadastre-se" id="CadastreSe" mudarLela >Cadastre-se</div>
				<div class="login-container-troca-senha" id="esqueci_senha">Esqueci minha senha</div>-->
				
				<div class="login-container-troca-senha">
				<a href="#" class="forgot-pass">Esqueci minha senha</a>
				</div>
				
				<form class="form-horizontal" action="acoes/logar.php" method="post">
 				
					<div class="input-group input-login">
						<label for="usuario" class="input-group-addon group-input" title="Login de acesso" data-toggle="tooltip" >
							<i class="fas fa-user-tie"></i>
						</label>
						<input type="text" class="form-control input-text" id="usuario" name="usuario" placeholder="Usuário"  autofocus="autofocus"  data-rule-required="true" data-msg-required="Por favor, insira seu nome de usuário.">
					</div>
					<div class="input-group input-login">
						<label for="senha" class="input-group-addon group-input" title="Senha" data-toggle="tooltip">
							<i class="fas fa-unlock-alt"></i>
						</label>
						<input type="password" name="senha" id="senha" class="form-control input-text" placeholder="Senha" required data-rule-required="true" data-msg-required="Por favor, insira sua senha." >
					</div>
					<div class="login-container-lembrar">
						<input type="checkbox" id="lembrarDeMimId" class="css-checkbox lrg">
						<label for="lembrarDeMimId" class="css-label lrg vlad label-lembrar-de-mim">Lembrar de mim</label>
					</div>
					<div class="form-group">
						<div class="col-sm-12 controls">
							<p class="submit">
								<button type="submit" id="" class="btn btn-success btn-submit">Entrar</button>
							</p>
						</div>
					</div>
					
					<div class="pr-wrap hide">
						<div class="pass-reset">
							<button id="closeId">X</button>
							<label>Informe seu E-mail</label>
							<input type="email" id="email" name="email" placeholder="E-mail" />
							<p class="submit">
								<button type="button" id="emailId" class="btn btn-success btn-submit-email pass-reset-submit">Enviar</button>
							</p>
						</div>
					</div>					
					
				</form>
			</div>
		</div>
		
      
      
       
        <div style="display:none" class="w3-animate-right login-container2" id="Dcadastro" >
			<div id="output"></div>
			<div id="loginId" class="loginCadastro ">
				<h1>Cadastro</h1>
				<div class="login-container-cadastre-se" id="LoginAcesso" mudarLela>Login de acesso</div>
				<form class="form-horizontal" action="#" method="post">
				
				    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				
					<div class="input-group input-login">
						<label for="nome" class="input-group-addon group-input" title="Nome" data-toggle="tooltip">
							<i class="fas fa-user-tie"></i>
						</label>
						<input type="text" class="form-control input-text" id="nome" name="nome" placeholder="Nome">
					</div>

					<div class="input-group input-login">
						<label for="email" class="input-group-addon group-input" title="E-mail" data-toggle="tooltip">
							<i class="fas fa-at"></i>
						</label>
						<input type="text" class="form-control input-text" id="email" name="email" placeholder="E-mail">
					</div>
					
					<div class="input-group input-login">
						<label for="usuario" class="input-group-addon group-input" title="Usuario" data-toggle="tooltip">
							<i class="fas fa-user-tie"></i>
						</label>
						<input type="text" class="form-control input-text" id="usuario" name="usuario" placeholder="Usuário">
					</div>
					
					<div class="input-group input-login SelectBarra">
						<label for="tipo_pessoa" class="input-group-addon group-input" title="Tipo pessoa" data-toggle="tooltip">
							<i class="fas fa-user-tie"></i>
						</label>
						<select class="form-control input-text-select" id="tipo_pessoa" name="tipo_pessoa">
						<option value="">Tipo pessoa</option>
						<option value="F">Física</option>
						<option value="J">Jurídica</option>	
						</select> 
					</div>  
					 					
					<div class="input-group input-login">
						<label for="cpf" class="input-group-addon group-input" title="CPF/CNPJ" data-toggle="tooltip">
							<i class="fas fa-table"></i>
						</label>
						<input type="text" class="form-control input-text" id="cpf" name="cpf" placeholder="CPF/CNPJ">
					</div>
					
					
					<div class="input-group input-login">
						<label for="celular" class="input-group-addon group-input" title="Celular" data-toggle="tooltip">
							<i class="fas fa-phone"></i>
						</label>
						<input type="text" class="form-control input-text" id="celular" name="celular" placeholder="Celular">
					</div>
					
					
					</div>
					
       
 					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
 					
					<div class="input-group input-login SelectBarra">
						<label for="estado" class="input-group-addon group-input" title="Estado" data-toggle="tooltip">
							<i class="fas fa-home"></i>
						</label>
						<select class="form-control input-text-select" id="estado" name="estado">
						<option value="">Procurar por estado</option>	
						<?php
						$query = "select * from estados order by nome";
						$result = mysql_query($query);
						while($dc = mysql_fetch_object($result)){
						?>
						<option value="<?=$dc->cod_estados?>" ><?=utf8_encode($dc->nome)?></option>
						<?php
						}
						?>
						</select> 
					</div>      
       
       
					<div class="input-group input-login SelectBarra">
						<label for="cidade" class="input-group-addon group-input" title="Cidade" data-toggle="tooltip">
							<i class="fas fa-home"></i>
						</label>
						<select class="form-control input-text-select" id="cidade" name="cidade">
						<option value="">Cidades</option>	
						</select> 
					</div>   
					

					<div class="input-group input-login">
						<label for="cep" class="input-group-addon group-input" title="CEP" data-toggle="tooltip">
							<i class="fas fa-home"></i>
						</label>
						<input type="text" class="form-control input-text" id="cep" name="cep" placeholder="CEP">
					</div>
					
					<div class="input-group input-login">
						<label for="endereco" class="input-group-addon group-input" title="Endereço" data-toggle="tooltip">
							<i class="fas fa-home"></i>
						</label>
						<input type="text" class="form-control input-text" id="endereco" name="endereco" placeholder="Endereço">
					</div>		
							
					<div class="input-group input-login">
						<label for="login" class="input-group-addon group-input" title="Login" data-toggle="tooltip">
							<i class="fas fa-user-tie"></i>
						</label>
						<input type="text" class="form-control input-text" id="login" name="login" placeholder="Login">
					</div>
								
					<div class="input-group input-login">
						<label for="senha" class="input-group-addon group-input" title="Senha" data-toggle="tooltip">
							<i class="fas fa-unlock-alt"></i>
						</label>
						<input type="password" class="form-control input-text" id="senha" name="senha" placeholder="Senha">
					</div>														
				
					</div>
					

						<div class="form-group">
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 controls">
								<p class="submit">
									<button type="submit" id="" class="btn btn-success btn-submit">Cadastrar</button>
								</p>
							</div>
						</div>

					
				</form>
			</div>
		</div>		
		
		
		
		
		
			
<script>
	
	$('#CadastreSe').click(function(){
		
		$('#Dcadastro').css('display','block');
		$('#DLogin').css('display','none');
	
	});	
	
	$('#LoginAcesso').click(function(){
		
		$('#Dcadastro').css('display','none');
		$('#DLogin').css('display','block');
	
	});		
	
	

	$("#estado").change(function(){
		estado = $(this).val();
		//alert(estado);
		$("#cidade").html('<option>Carregando cidades...</option>');
		$.ajax({
		url:"config/select_cidades.php?estado="+estado,
		success:function(dados){
		$("#cidade").html(dados);
		}
		});
	});		
	
	
	
	$('#esqueci_senha').click(function(){

		$.confirm({
			title: 'Informe seu e-mail!',
			content: '' +

			'<div class="form-group">' +
			'<label>E-mail:</label>' +
			'<input type="text" style="color:#000" placeholder="Seu e-mail aquí" class="email form-control" required />' +
			'</div>',
			
			columnClass: '  col-md-4 col-md-offset-4  col-lg-4 col-lg-offset-4  col-sm-5 col-sm-offset-4 col-xs-8 col-xs-offset-2',
			
			buttons: {
				ENVIAR: {
					btnClass: 'btn-blue',
					action: function(){

						var email = this.$content.find('.email').val();

						if(!email){
							$.alert('Informe o e-mail');
							return false;
						}
						
						$.ajax({
							url:"mailer/recuperar_senha.php",
							type:"POST",
							data:{email:email},
							success: function(dados){
								$(dados).submit();
								$('#SenhaRecuperada').html(dados);
							}
						})

					}
				},
				CANCELAR: {
					btnClass: 'btn-red',
					action: function(){


					}
				}				
			}	

		});	
		
	});	
</script>		
			

<script type="text/javascript" src="/_libes_tme/login/login.min.js?v=23"></script>
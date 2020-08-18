<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background-image: url(assets/imagens/fundo.jpg);
			background-size: cover;
			font-family: sans-serif;
		}
		.loginBox{
			width: 320px;
			height: 420px;
			background-color: rgba(91, 68, 57, 0.6);
			color: #fff;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding:70px 30px ;
		}
		.avatar{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left:calc(50% - 50px);
		}

	 h1{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
		}
		.loginBox p{
			margin: 0px;
			padding: 0;
			font-weight: bold;
		}
		.loginBox input{
			width: 100%;
			margin-bottom: 20px;
		}
		.loginBox input[type="text"], input[type="password"] {
			border-radius: 10px;
			height: 40px;
			font-size: 16px;
			outline: none;
			border:none;
			padding-left: 3px;
		}
		.loginBox input[type="submit"]{
			border:none;
			background-color: #fb2525;
			outline: none;
			height: 40px;
			color: #fff;
			font-size: 18px;
			border-radius: 20px;
		}
		.loginBox input[type="submit"]:hover{
			cursor: pointer;
			background-color: #ffc107;
			color: #fff;
		}
		.loginBox a{
			text-decoration: none;
			font-size: 12px;
			line-height: 20px;
			color: darkgrey;
		}
		.loginBox a:hover{
			color: #ffc107;
		}
	</style>
	<title>Login</title>
</head>
<body>
<div class="loginBox">
	<img src="assets/imagens/pessoa.png" class="avatar">
	<h1>Login</h1>
	<form method="POST">
		<p>Usuario:</p>
		<input type="text" name="email" placeholder="Login" >
		<p>Senha:</p>
		<input type="password" name="senha" placeholder="Senha">
		<input  type="submit" name="botao" value="Login " class="btn">
		<a href="#">Esqueci a Senha</a>

	</form>
</div>
</body>
</html>

<?php require "conexao.php"; ?>
<?php require 'usuarios.class.php';
$u= new Usuarios();
if (isset($_POST['email']) && !empty($_POST['email'])) {
	$email = addslashes($_POST['email']);
	$senha =md5($_POST['senha']);
	if ($u->login($email, $senha)) {
		?>
		<script type="text/javascript">window.location.href="./";</script>
		<?php
		
	}else{
		?>
		<div class="alert alert-danger">
			Usuario ou senha errados.
		</div>
		<?php
	}
	
}
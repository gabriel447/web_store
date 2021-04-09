<!DOCTYPE html>
<html>
<head>
	<title>login do painel</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="box-login">
		<?php
			if (isset($_POST['acao'])) {
				$user = $_POST['user'];
				$password = $_POST['password'];
				$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin` WHERE user = ? AND password = ?");
				$sql->execute(array($user,$password));
				if($sql->rowCount() == 1){
					//logamos com sucesso
					$_SESSION['login'] = true;
					$_SESSION['user'] = $user;
					$_SESSION['password'] = $password;
					header('Location: '.INCLUDE_PATH_PAINEL);
					die();
				}else{
					//falhou
					echo '<div class="erro-box"><i class="fa fa-times"></i> usuario ou senha incorretos</div>';
				}
			}
		?>
		<h2>Efetue o login:</h2>
		<form method="post">
			<input type="text" name="user" placeholder="Login.." required>
			<input type="password" name="password" placeholder="Senha.." required>
			<div class="logar">
				<input type="submit" name="acao" value="Logar">
			</div>
			<!--
			<div class="form-group-login right">
				<label>Lembrar-me</label>
				<input type="checkbox" name="lembrar" />
			</div>
			-->
		</form>
	</div><!--box-login-->

</body>
</html>
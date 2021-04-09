<?php
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<head>
	<title>Painel de Controle</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="menu">
	
</div>
<header>
	<div class="center">
		<div class="loggout">
			<a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout">Sair</a>
		</div><!--loggout-->

		<div class="clear"></div>
	</div>
</header>

</body>
</html>
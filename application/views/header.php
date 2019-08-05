<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/header.css" media="all">
	<link rel="stylesheet" href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<header>
		<div class="container">
			<img src="<?= base_url();?>assets/css/imagens/logo.png" id="logo" alt="Logo Projeto Sala de Aula">
			<nav class="acessibilidade">
				<ul>
					<button class="aumentaFont" onClick="fonte('a');">A+</button>
					<button  class="diminuiFont" onClick="fonte('d');">A-</button>
					<button class="altoContraste" onClick="fonteColor();">
					</button>
					<a href="http://www.vlibras.gov.br/">
					<button id="brasil-vlibras"></button>
					</a>
				</ul>
			</nav>
		</div>
	</header>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>

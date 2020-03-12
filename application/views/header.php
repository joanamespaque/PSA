<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/header.css" media="all">
	<link rel="stylesheet" href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<header>
		<div class="container">
			<a href="<?= base_url();?>inicio/inicio">
				<img src="<?= base_url();?>assets/css/imagens/logo.png" id="logo" alt="Logo Projeto Sala de Aula">
			</a>
			<nav class="acessibilidade">
				<ul>
					<button class="aumentaFont" onClick="fonte('a');">A+</button>
					<button  class="diminuiFont" onClick="fonte('d');">A-</button>
					<button class="altoContraste" onClick="fonteColor();">
					</button>
					<a href="http://www.vlibras.gov.br/" id="vlibras">
					<button id="brasil-vlibras"></button>
					</a>
				</ul>
			</nav>
		</div>
	</header>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$('#vlibras').click(function() {
			$(this).attr('target', '_blank');
		});
	</script>
</body>
</html>

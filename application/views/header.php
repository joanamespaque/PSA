<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url();?>assets/css/header.css" media="all">
	<link rel="stylesheet" href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="print.css" type="text/css" media="all"> -->
</head>

<body>
	<div class="container">
		<img src="<?= base_url();?>assets/css/imagens/logo.png" id="logo" alt="Logo Projeto Sala de Aula">
		<nav class="acessibilidade">
			<ul>
				<li>A+</li>
				<li>A-</li>
                <li class="altoContraste"></li>
				<li id="brasil-vlibras">
					<span>
						<a href="http://www.vlibras.gov.br/"></a>
					</span>
				</li>
			</ul>
		</nav>
    </div>
    
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
				aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navBar" id="bs-example-navbar-collapse-1">
				<ul>
					<li class="active inicio">
						<a href="<?= base_url();?>inicio/inicio">INÍCIO</a>
					</li>
					<li class="sobre">
						<a href="<?= base_url();?>sobre/sobre">SOBRE</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?= base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

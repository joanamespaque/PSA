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
		<div>
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
					<?php 
						if($this->session->userdata('id') == NULL){
					?>
						<ul class="nav_inicio" navInicial>
						<a href="<?= base_url();?>inicio/inicio">
							<li class="active inicio navItem acessibilidadeFonte">
								INÍCIO
							</li>
						</a>
						<a href="<?= base_url();?>sobre/sobre">
							<li class="sobre navItem  acessibilidadeFonte">
								SOBRE
							</li>
						</a>

					<?php 
						} else{
					?>
					<ul class="navProfessor">
						<a href="<?= base_url();?>turmas">
							<li class="active turmas acessibilidadeFonte navItem">
								TURMAS
							</li>
						</a>
						<a href="<?= base_url();?>atividades/atividades_professor">
							<li class="atividades acessibilidadeFonte  navItem">
								ATIVIDADES
							</li>
						</a>
						<a>
							<li class="perfil acessibilidadeFonte  navItem">
								PERFIL
							</li>
						</a>
						<a href="<?= base_url();?>sobre/sobre">
							<li class="sobre navItem  acessibilidadeFonte">
								SOBRE
							</li>
						</a>
						<a href= "<?= base_url();?>login/logout">
							<li class="logout navItem acessibilidadeFonte">Sair</li>
						</a>
					<?php 
						}
					?>

					<!-- <button class="logout btn  acessibilidadeFonte">
						Sair
					</button> -->
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	</div>
		
	</header>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?= base_url();?>/assets/js/acessibilidade.js"></script>
	<script>
		$('#vlibras').click(function() {
			$(this).attr('target', '_blank');
		});
	</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url();?>/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/login.css">
	<title>Login Professor</title>
</head>

<body>
	<form action="<?= base_url() ?>login/autenticarProfessor" method="POST">
			<?php if($this->session->flashdata('error')) {?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?php echo $this->session->flashdata('error'); ?>
					</div>
					<?php
				} 
			?>
		<!-- <div class="caminho"></div>  espaço para breadcrumbs-->
		<h2 class="acessibilidadeFonte">Entre na sua conta</h2>
		<div class="formulario row">
			<div id="formLogin">
				<li>
					<label for="email" class="acessibilidadeFonte">Nome de usuário</label>
					<br>
					<input class="form-control" type="text" name="username" maxlength="150" value="<?= set_value('username');?>">
				</li>
				<li>
					<label for="senha" class="acessibilidadeFonte">Senha</label>
					<br>
					<input class="form-control" type="password" name="senha" maxlength="20" value="<?= set_value('senha');?>">
				</li>
				<input class="form-control button-cadastro acessibilidadeFonte" type="submit" value="ENTRAR">
			</div>
        </div>
	</form>
	<script>
		document.querySelector('.active').classList.remove('active');

	</script>
</body>

</html>
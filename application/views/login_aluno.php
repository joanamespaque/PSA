<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/login.css">
	<title>Login Aluno</title>
</head>

<body>
	<form action="<?= base_url() ?>login/autenticarAluno" method="POST">
	<div class="msgLogin">
		<?php if($this->session->flashdata('error')) {?>
		<div class="alert alert-danger text-center" style="margin-top:20px;">
			<?php echo $this->session->flashdata('error'); ?>
		</div>
		<?php } ?>
	</div>
		<div class="caminho"></div>
		<h2 class="acessibilidadeFonte">Entre na sua conta</h2>
		<div class="formulario row">
			<div id="formLogin">
				<li>
					<label for="email" class="acessibilidadeFonte">Nome de Usuário</label>
					<br>
					<input class="form-control" type="text" name="username" maxlength="20" value="<?= set_value('username');?>" required>
				</li>
				<li>
					<label for="senha" class="acessibilidadeFonte">Senha</label>
					<br>
					<input class="form-control" type="password" name="senha" maxlength="20" value="<?= set_value('senha');?>" required>
				</li>
				<input class="form-control button-cadastro acessibilidadeFonte" type="submit" value="ENTRAR">
			</div>
		</div>
	</form>
	<script>
		document.querySelector('.active').classList.remove('active');
	</script>
	<script src="<?= base_url();?>assets/js/mensagem.js"></script>
</body>

</html>

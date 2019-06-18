<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url();?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/login.css">
    <title>Login Aluno</title>
</head>
<body>
<form action="<?= base_url() ?>login/autenticarAluno" method="POST">
<?php if($this->session->flashdata('success')) {?>
					<div class="alert alert-success text-center" style="margin-top:20px;">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php
				}
			?>
        <div class="caminho"></div>
        <h2>Entre na sua conta</h2>
        <div class="formulario row">
                <div id="formLogin">
                    <li>
                        <label for="email">Nome de Usuário</label>
                        <br>
                        <input class="form-control" type="text" name="username" maxlength="150">
                    </li>
                    <li>
                        <label for="senha">Senha</label>
                        <br>
                        <input class="form-control" type="password" name="senha" maxlength="20">
                    </li>
                    <input class="form-control button-cadastro" type="submit" value="ENTRAR">
                </div>
            </div>
        </form>
    <script>
        document.querySelector('.active').classList.remove('active');
    </script>
</body>

</html>
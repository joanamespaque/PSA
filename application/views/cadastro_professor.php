<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/header.css" media="all">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/cadastro.css">
    <title>Cadastro Professor</title>
</head>
<body>
        <!-- <div class="caminho"></div> espaço para breadcrumbs -->
        <h2 class="acessibilidadeFonte">Cadastre-se</h2>
        <div class="formulario row">
            <form action="<?= base_url()?>cadastro/enviar" method="POST"> <!-- Aqui falta o caminho -->
            <?php if($this->session->flashdata('error')){?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?php echo $this->session->flashdata('error'); ?>
					</div>
					<?php
				}
			?>
                <li>
                    <label for="email" class="acessibilidadeFonte">E-mail</label>
                    <br>
                    <input class="form-control" type="email" name="email" maxlength="200" value="<?= set_value('email');?>" required>
                </li>
                <li>
                    <label for="username" class="acessibilidadeFonte">Nome de usuário</label>
                    <br>
                    <input class="form-control" type="text" name="username" maxlength="150" value="<?= set_value('username');?>" required>
                </li>
                <li>
                    <label for="senha" class="acessibilidadeFonte">Senha</label>
                    <br>
                    
                    <input class="form-control" type="password" name="senha" maxlength="20" value="<?= set_value('senha');?>" required>
                </li>
                <li>
                    <label for="verificaSenha" class="acessibilidadeFonte">Verificar Senha</label>
                    <br>
                    <input class="form-control" type="password" name="verificaSenha" maxlength="20" value="<?= set_value('verificaSenha');?>" required>
                </li>
                <li>
                    <label for="primeiroNome" class="acessibilidadeFonte">Primeiro Nome</label>
                    <br>
                    <input class="form-control" type="text" name="primeiroNome" maxlength="150" value="<?= set_value('primeiroNome');?>" required>
                </li>
                <li>
                    <label for="sobrenome" class="acessibilidadeFonte">Sobrenome</label>
                    <br>
                    <input class="form-control" type="text" name="sobrenome" maxlength="150" value="<?= set_value('sobrenome');?>" required>
                </li>
            <button class="button-cadastro cadastroUsuario acessibilidadeFonte" type="submit" name="envia_cadastro" value="professor">CADASTRAR</button>
        </form>
    </div>
    <script>
        document.querySelector('.active').classList.remove('active');
    </script>
</body>

</html>
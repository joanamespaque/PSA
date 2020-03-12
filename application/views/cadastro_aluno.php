<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/cadastro.css">
    <title>Cadastro Aluno</title>
</head>
<body>
        <!-- <div class="caminho"></div> espaço para breadcrumbs -->
        <h2 class="acessibilidadeFonte">Cadastre-se</h2>
        <div class="formulario row">
            
            <form action="<?= base_url()?>cadastro/enviar" method="POST"> <!-- Aqui falta o caminho -->
            <div class="msg">
                <?php if($this->session->flashdata('error')) {?>
                        <div class="msg alert alert-danger text-center" style="margin-top:20px;">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                <?php } ?>
            </div>
                    <li>
                        <label for="nomeDeUsuario" class="acessibilidadeFonte">Nome de Usuário</label>
                        <br>
                        <input class="form-control" type="text" name="username" maxlength="20" value="<?= set_value('username');?>" required>
                    </li>
                    <li>
                        <label for="senha" class="acessibilidadeFonte">Senha</label>
                        <br>
                        <input class="form-control" type="password" name="senha" maxlength="20" value="<?= set_value('senha');?>"required>
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
                    <li>
                        <button class="acessibilidadeFonte button-cadastro cadastroUsuario" id="cadastrarAluno" type="submit" name="envia_cadastro" value="aluno" style="margin-top:40px;">CADASTRAR</button>
                    </li>
            </form>
        </div>
    <script>
        document.querySelector('.active').classList.remove('active');
    </script>
    <script src="<?= base_url();?>assets/js/mensagem.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/cadastro.css">
    <title>Cadastro Professor</title>
</head>
<body>
        <!-- <div class="caminho"></div> espaço para breadcrumbs -->
        <h2 class="acessibilidadeFonte">Cadastre-se</h2>
        <div class="formulario row">
            <form action="<?= base_url()?>/cadastro" method="POST"> 
                <div id="form1">
                    <li>
                        <label class="acessibilidadeFonte" for="email">E-mail</label>
                        <br>
                        <input class="form-control" type="email" name="email" maxlength="200">
                    </li>
                    <li>
                        <label class="acessibilidadeFonte" for="senha">Senha</label>
                        <br>
                        <input class="form-control" type="password" name="senha" maxlength="20">
                    </li>
                    <li>
                        <label class="acessibilidadeFonte" for="verificaSenha">Verificar Senha</label>
                        <br>
                        <input class="form-control" type="password" name="verificaSenha" maxlength="20">
                    </li>
                </div>
                <div id="form2">
                    <li>
                        <label class="acessibilidadeFonte" for="primerioNome">Primeiro Nome</label>
                        <br>
                        <input class="form-control" type="text" name="primerioNome" maxlength="150">
                    </li>
                    <li>
                        <label class="acessibilidadeFonte" for="sobrenome">Sobrenome</label>
                        <br>
                        <input class="form-control" type="text" name="sobrenome" maxlength="150">
                    </li>
                    <input class="acessibilidadeFonte form-control button-cadastro" type="submit" value="CADASTRAR">
                </div>
            </form>
        </div>
    <script>
        document.querySelector('.active').classList.remove('active');
    </script>
</body>
</html>
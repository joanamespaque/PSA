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
        <div class="caminho"></div>
        <h2>Entre na sua conta</h2>
        <div class="formulario row">
            <form action="" methos="POST">
                <div id="form1" class="botoes">
                    <li id="google" class="button-cadastro" >
                        <a href="">Continuar com o Google</a>
                    </li>
                    <li id="facebook"  class="button-cadastro">
                        <a href="">Continuar com o Facebook</a>
                    </li>
                </div>
                <div id="form1">
                    <p>OU</p>
                </div>
                <div id="form2">
                    <li>
                        <label for="email">E-mail</label>
                        <br>
                        <input class="form-control" type="email" name="email" maxlength="150">
                    </li>
                    <li>
                        <label for="senha">Senha</label>
                        <br>
                        <input class="form-control" type="password" name="senha" maxlength="20">
                    </li>
                    <input class="form-control button-cadastro" type="submit" value="ENTRAR">
                </div>
            </form>
        </div>
    <script>
        document.querySelector('.active').classList.remove('active');
    </script>
</body>

</html>
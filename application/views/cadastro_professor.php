<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/cadastro.css">
    <title>Página Inicial</title>
</head>
<body>
    <div class="container">
        <div class="caminho"></div>
        <h2>Cadastre-se</h2>
        <div class="formulario">
            <form action="" methos="POST">
                <li>
                    <label for="email">E-mail</label>
                    <br>
                    <input type="email" name="email" maxlength="200">
                </li>
                <li>
                    <label for="senha">Senha</label>
                    <br>
                    <input type="password" name="senha" maxlength="20">
                </li>
                <li>
                    <label for="verificaSenha">Verificar Senha</label>
                    <br>
                    <input type="password" name="verificaSenha" maxlength="20">
                </li>
                <li>
                    <label for="primerioNome">Primeiro Nome</label>
                    <br>
                    <input type="text" name="primerioNome" maxlength="150">
                </li>
                <li>
                    <label for="sobrenome">Sobrenome</label>
                    <br>
                    <input type="text" name="sobrenome" maxlength="150">
                </li>
            </form>
        </div>

    </div>
    <script>
        document.querySelector('.active').classList.remove('active');
    </script>
</body>

</html>
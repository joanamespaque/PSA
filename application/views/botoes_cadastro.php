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
        <div class="botoes">
            <li id="google">
                <a href="">Continuar com o Google</a>
            </li>
            <li id="facebook">
                <a href="">Continuar com o Facebook</a>
            </li>
            <li id="email">
                <a href="">Cadastrar com e-mail</a>
            </li>
        </div>
        <a href="">Já é cadastrado? Entre na sua conta aqui!</a>
    </div>
    <script>
        document.querySelector('.active').classList.remove('active');
    </script>
</body>

</html>
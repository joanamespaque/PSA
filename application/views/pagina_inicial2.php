<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/inicio.css">
    <title>Página Inicial</title>
</head>
<body>

    <div class="container">
        <div class="botoes">
            <form action="<?= base_url();?>inicio/verifica_acao" method="POST">
                <button id="azul" value="cadastro_<?= $_POST['usuario'];?>" name="tipo">CADASTRO</button>
                <button id="verde" value="login_<?= $_POST['usuario'];?>" name="tipo">LOGIN</button>
            </form>
        </div>
    </div>

</body>
</html>


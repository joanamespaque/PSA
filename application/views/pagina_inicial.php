<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/inicio.css">
    <title>Página Inicial</title>
</head>
<body>
    <?= $_SERVER['PATH_INFO'];?>
    <div class="container">
        <div class="botoes">

                <button id="verde" value='professor' name="" class="acessibilidadeFonte professor">PROFESSOR</button>
                <button id="azul" value="aluno" name="" class="acessibilidadeFonte aluno">ALUNO</button>
        </div>
    </div>

    <script type='text/javascript'>
    let botoes = document.querySelector('.botoes');
    let professor = document.querySelector(".professor");
    let aluno = document.querySelector(".aluno");

    professor.addEventListener('click', function(event) {
        event.preventDefault;
        botoes.innerHTML = '<form action="<?= base_url();?>inicio/verifica_acao" method="POST"> <button id="azul" value="cadastro_professor" name="tipo" class="acessibilidadeFonte">CADASTRO</button><button class="acessibilidadeFonte" id="verde" value="login_professor" name="tipo">LOGIN</button> </form>';
    });
    aluno.addEventListener('click', function(event) {
        event.preventDefault;
        botoes.innerHTML = '<form action="<?= base_url();?>inicio/verifica_acao" method="POST"> <button id="azul" value="cadastro_aluno" name="tipo" class="acessibilidadeFonte">CADASTRO</button><button class="acessibilidadeFonte" id="verde" value="login_aluno" name="tipo">LOGIN</button> </form>';
    });
    </script>
</body>
</html>

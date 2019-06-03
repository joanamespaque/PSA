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
    <div class="container">
        <div class="botoes">
            <form action="<?= base_url();?>inicio/inicio2" method="POST">
                <button id="verde" value='professor' name="usuario">PROFESSOR</button>
                <button id="azul" value="aluno" name="usuario">ALUNO</button>
            </form>
        </div>
    </div>
</body>
</html>

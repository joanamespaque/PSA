<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url();?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/cadastro.css">
    <title>Cadastro de Turma</title>
</head>
<body>
        <div class="formularioTurma row">
                <div id="cadastroTurma">
                    <li>
                        <label for="nomeTurma" class="acessibilidadeFonte">Nome da turma:</label>
                        <br>
                        <input class="form-control" type="text" name="nomeTurma" maxlength="150">
                    </li>
                    <li>
                        <label for="assunto" class="acessibilidadeFonte">Assunto:</label>
                        <br>
                        <input class="form-control" type="text" name="assunto" maxlength="20">
                    </li>
                    <li>
                        <label for="sala" class="acessibilidadeFonte">Sala:</label>
                        <br>
                        <input class="form-control" type="text" name="sala" maxlength="20">
                    </li>
                    <input class="button-cadastro turma acessibilidadeFonte" type="submit" value="CADASTRAR TURMA">
                </div>
        </div>

    <script>
        document.querySelector('.active').classList.remove('active');
        document.querySelector('.turmas').classList.add('active');
    </script>
</body>

</html>
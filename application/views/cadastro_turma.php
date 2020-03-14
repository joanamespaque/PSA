<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/cadastro.css">
    <title>Cadastro de Turma</title>
</head>
<body>
<?php 
var_dump(intval($this->session->userdata('id')));
?>
        <div class="formularioTurma row">
                <div id="cadastroTurma">
                    <div>
                        <label for="nomeTurma" class="acessibilidadeFonte">Nome da turma:</label>
                        <br>
                        <input class="form-control acessibilidadeFonte" type="text" name="nomeTurma" maxlength="150" required>
                    </div>
                    <div>
                        <label for="sala" class="acessibilidadeFonte">Sala (opcional):</label>
                        <br>
                        <input class="form-control acessibilidadeFonte" type="text" name="sala" maxlength="10">
                    </div>
                    <input class="button-cadastro turma acessibilidadeFonte" type="submit" value="CADASTRAR TURMA">
                </div>
        </div>

    <script>
        document.querySelector('.active').classList.remove('active');
        document.querySelector('.turmas').classList.add('active');
    </script>
</body>

</html>
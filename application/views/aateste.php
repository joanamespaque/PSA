<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url();?>/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/cadastro.css">
	<title>Nova Atividade</title>
</head>

<body>
    <?php 
        if (isset($palavra)) {
            var_dump($palavra);
        }
    ?>
	<div class="formularioTurma row">
		<form action="welcome/json" method='POST'>
			<div id="cadastroTurma">
				<li>
					<label for="nomeAtividade" class="acessibilidadeFonte">Nome da atividade:</label>
					<br>
					<input class="form-control" type="text" name="nomeAtividade" maxlength="150">
				</li>
				<li>
					<div class="input-group">
						<div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01">Categoria</label>
						</div>
						<select class="custom-select form-control" id="inputGroupSelect01" name="categoria">
							<option selected>Escolha...</option>
							<option value="1">Categoria 1</option>
							<option value="2">Categoria 2</option>
							<option value="3">Categoria 3</option>
						</select>
					</div>
				</li>
				<li>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<label class="input-group-text" for="inputGroupSelect01">Dificuldade</label>
						</div>
						<select class="custom-select form-control" id="inputGroupSelect01" name='dificuldade'>
							<option selected>Escolha...</option>
							<option value="1">Fácil</option>
							<option value="2">Médio</option>
							<option value="3">Difícil</option>
						</select>
					</div>
				</li>
				<li>
					<label for="palavra" class="acessibilidadeFonte">Palavra:</label>
					<br>
					<input class="form-control" type="text" name="palavra" maxlength="20">
				</li>
				<input class="button-cadastro turma acessibilidadeFonte" type="submit" value="CADASTRAR TURMA">
			</div>
		</form>
	</div>

	<script>
		document.querySelector('.active').classList.remove('active');
		document.querySelector('.turmas').classList.add('active');

	</script>
</body>

</html>

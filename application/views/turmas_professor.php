<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/turma.css" media="all">
	<title>Turmas</title>
</head>

<body>
	<div class="container">
		<div class="turmasList">
			<!-- adicionar o id da turma ao id="turma" -->
			<div id="turma">
				<a href="">
					<p class="nome acessibilidadeFonte">Turma</p> <!-- colocar com php o nome da turma -->
					<output class="acessibilidadeFonte"> 9999 alunos</output>
					<!-- colocar com php o numero de alunos cadastrados na turma -->
				</a>
			</div>
			<!-- Esse botao só deve aparecer se um professor estiver logado: -->
			<div class="button">
				<a href="<?= base_url()?>cadastro/cadastro_turma">
					<button class="acessibilidadeFonte" id="addTurma">
						ADICIONAR TURMA
					</button>
				</a>
			</div>
		</div>
	</div>
	<script>
		document.querySelector('.active').classList.remove('active');
		document.querySelector('.turmas').classList.add('active');

	</script>
</body>

</html>

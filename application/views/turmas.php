<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/turma.css" media="all">
	<title>Turmas</title>
</head>

<body>
	<div class="container">
		<?php if(($this->session->userdata('tipo_user') == 'aluno') && (current_url() == base_url().'turmas/turmas_aluno')) {?>
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
			</div>
		<?php } else if(($this->session->userdata('tipo_user') == 'professor') && (current_url() == base_url().'turmas/turmas_professor')) { ?>
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
		<?php } ?>
	</div>
	<script>
		document.querySelector('.active').classList.remove('active');
		document.querySelector('.turmas').classList.add('active');

	</script>
</body>

</html>

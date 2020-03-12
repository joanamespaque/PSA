<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/turma.css" media="all">
	<title>Turmas</title>
</head>

<body>
	<div class="container">
		<?php if(($this->session->userdata('tipo_user') == 'aluno')) {?>
			<div class="turmasList">
				<?php 
				foreach ($turmas as $turma) { ?>
					<div id="turma<?= $turma->id?>" class="turma">    
						<a href="">
							<p class="nome acessibilidadeFonte"><?= $turma->nome;?></p>
							<output class="acessibilidadeFonte"><?= $turma->count; ?> aluno(s)</output>
						</a>
					</div>
				<?php } ?>
			</div>
		<?php } else if(($this->session->userdata('tipo_user') == 'professor')) { ?>
				<div class="turmasList">
					<!-- adicionar o id da turma ao id="turma" -->
					<?php 
				foreach ($turmas as $turma) { ?>
					<div id="turma<?= $turma->id?>" class="turma">    
					
						<a href="">
							<p class="nome acessibilidadeFonte"><?= $turma->nome;?></p> <!-- colocar com php o nome da turma -->
							<output class="acessibilidadeFonte"><?= $turma->count; ?> aluno(s)</output>
							<!-- colocar com php o numero de alunos cadastrados na turma -->
						</a>
					</div>
						<?php } ?>
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

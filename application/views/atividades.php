<!DOCTYPE html>

<head>
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
	<link rel="stylesheet" href="<?= base_url();?>/assets/css/atividade.css" media="all">
	<title>Atividades</title>
</head>

<body>
	<div class="container">
		<!-- Esse botao só deve aparecer se um professor estiver logado: -->
		<div class="button">
			<button class="criar acessibilidadeFonte" expandir="false">
				<span class="glyphicon glyphicon-plus"></span>
				CRIAR
			</button>
			<div class="opcoes">
                <ul>
                    <li class="acessibilidadeFonte">JOGO DA FORCA</li>
                    <li class="acessibilidadeFonte">JOGO DA MEMÓRIA</li>
                </ul>
            </div>
            <div id="opcoes"></div>
		</div>
		<div class="listaAtividades">
			<div id="atividade" class="atividade">
				<a href="">
					<p class="nome acessibilidadeFonte">Atividade</p> <!-- colocar com php o nome da atividade -->
				</a>
			</div>
			<div id="atividade" class="atividade">
				<a href="">
					<p class="nome acessibilidadeFonte">Atividade</p> <!-- colocar com php o nome da atividade -->
				</a>
			</div>
			<div id="atividade" class="atividade">
				<a href="">
					<p class="nome acessibilidadeFonte">Atividade</p> <!-- colocar com php o nome da atividade -->
				</a>
			</div>
			<div id="atividade" class="atividade">
				<a href="">
					<p class="nome acessibilidadeFonte">Atividade</p> <!-- colocar com php o nome da atividade -->
				</a>
			</div>
			<div id="atividade" class="atividade">
				<a href="">
					<p class="nome acessibilidadeFonte">Atividade</p> <!-- colocar com php o nome da atividade -->
				</a>
			</div>
			<div id="atividade" class="atividade">
				<a href="">
					<p class="nome acessibilidadeFonte">Atividade</p> <!-- colocar com php o nome da atividade -->
				</a>
			</div>
		</div>
	</div>
	<script src="<?= base_url();?>assets/js/menuAtividades.js"></script>
</body>

</html>

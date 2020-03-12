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
					<li class="acessibilidadeFonte" id="forca-modal">JOGO DA FORCA</li>
					<!-- Modal -->
					<div class="modal fade" id="modal-mensagem" tabindex="-1" role="dialog"
						aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h5 class="modal-title" id="exampleModalLabel">Jogo da Forca</h5>
								</div>
								<div class="modal-body">
								<label for="nome">Nome:</label>
                                <input name="nome" type="text" class="form-control"
                                                            aria-describedby="nomeHelp" placeholder="Nome da Atividade" id="nomepasta" required>
								</div>
								
								<div class="modal-footer">
									<button type="button" class="btn btn-primary">Salvar</button>
								</div>
							</div>
						</div>
					</div>
					<li class="acessibilidadeFonte" id="memoria-modal">JOGO DA MEMÓRIA</li>
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
	<script>
	$("#forca-modal").click(function(){
		$("#modal-mensagem").modal();
	});

	</script>
</body>


</html>

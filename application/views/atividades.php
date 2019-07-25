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
	<script>
            // div class="opcoes">
            //     <ul>
            //         <li>JOGO DA FORCA</li>
            //         <li>JOGO DA MEMÓRIA</li>
            //     </ul>
            // </div>
		document.querySelector('.active').classList.remove('active');
		document.querySelector('.atividades').classList.add('active');
		let div = $('#opcoes');
        $('.criar').click(function() {
            let expandir = $(this).attr('expandir');
            if(expandir === "false"){
                let ul = document.createElement('ul');
                let li1 = document.createElement('li');
                li1.textContent = "JOGO DA FORCA";
                let li2 = document.createElement('li');
                li2.textContent = "JOGO DA MEMÓRIA";
                ul.append(li1);
                ul.append(li2);
                div.append(ul);
                div.addClass('opcoes');
                $(this).attr('expandir', true);
            } else{
                div.empty();
                div.removeClass('opcoes');
                $(this).attr('expandir', false);
            }
        });

	</script>
</body>

</html>

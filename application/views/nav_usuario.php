<body>
	<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
				aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navBar" id="bs-example-navbar-collapse-1">
				<ul class="navProfessor">
					<a href="<?= base_url();?>Turmas/turmas_professor">
						<li class="active turmas acessibilidadeFonte navItem">
							TURMAS
						</li>
					</a>
					<a href="<?= base_url();?>Atividades/atividades_professor">
						<li class="atividades acessibilidadeFonte  navItem">
							ATIVIDADES
						</li>
					</a>
					<a>
						<li class="perfil acessibilidadeFonte  navItem">
							PERFIL
						</li>
					</a>
					<!-- <a href="<?= base_url();?>sobre/sobre">
						<li class="sobre acessibilidadeFonte  navItem">
							SOBRE
						</li>
					</a> -->
					<a href= "<?= base_url();?>login/logout">
						<li class="logout navItem acessibilidadeFonte">Sair</li>
					</a>

					<!-- <button class="logout btn  acessibilidadeFonte">
						Sair
					</button> -->
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
            <p><?php var_dump($_SESSION); ?></p>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?= base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url();?>assets/js/acessibilidade.js"></script>
</body>
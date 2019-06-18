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
					<li class="active turmas">
						<a  href="<?= base_url();?>Turmas/turmas_professor">TURMAS</a>
					</li>
					<li class="atividades">
						<a>ATIVIDADES</a>
					</li>
					<li class="perfil">
						<a>PERFIL</a>
					</li>
					<li class="sobre">
						<a href="<?= base_url();?>sobre/sobre">SOBRE</a>
					</li>
					<button class="logout btn">Sair</button>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?= base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
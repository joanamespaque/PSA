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
				<ul id="navInicio">
					<a href="<?= base_url();?>inicio/inicio">
					<li class="active inicio navItem acessibilidadeFonte">
						INÍCIO
					</li>
					</a>
					<a href="<?= base_url();?>sobre/sobre">
					<li class="sobre navItem  acessibilidadeFonte">
						SOBRE
					</li>
				</a>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?= base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
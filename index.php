<?php	
	include ("conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>PhotographyData</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="index">
		<div id="page-wrapper">
			<!-- Header -->
			<header id="header" class="alt">
				<h1 id="logo"><a href="/PhotographyData/index.html">PhotographyData <span>by Lucas Sombra</span></a></h1>
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Entrada</a></li>
						<li class="current"><a href="LensHelper/lenshelper.php">Lens Helper</a></li>
						<li class="current"><a href="exifdone/upimg.php">Upload</a></li>
						<?php
							if(isset($_SESSION['codusuario'])){
								?>
								<li><a href="logout.php" class="button special">Logout</a></li>
								<?php
							}else{
								?>
								<li><a href="login.php" class="button special">Login</a></li>
								<li><a href="cadastro.php" class="button special">Cadastrar</a></li>
								<?php
							}
						?>
					</ul>
				</nav>

			</header>
			<!-- Banner -->
				<section id="banner">

					<div class="inner">

                        <header>
                            <h2>PhotographyData</h2>
                        </header>
                        <p>Esse é o <strong>PhotographyData</strong>, um
                            <br />
                            exif reader tool + Lens Helper
                            <br />
                            by <a href="http://html5up.net">Lucas Sombra</a>.</p>
                            <footer>
                                <ul class="buttons vertical">
                                    <li><a href="#main" class="button fit scrolly">Me mostra mais!</a></li>
                                </ul>
                            </footer>

                        </div>

				</section>

			<!-- Main -->
				<article id="main">


					<!-- One -->

					<!-- Two -->
						<section class="wrapper style1 container special">
							<div class="row">
								
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-laptop"></span>
										<header>
											<h3>Muito leve</h3>
										</header>
										<p>Não tem um PC/Notebook muito bom? Nem esquenta cara! Com o PhotographyData basta você ter computador para utilizar, ele é super leve e muito rápido, roda até nos famosos PC dinossauros!</p>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-inbox"></span>
										<header>
											<h3>Upload de Muitas fotos</h3>
										</header>
										<p>Você irá visualizar as informações das suas imagens de uma maneira muito mais eficiente, basta jogar todas as imagens em um campo e pronto! Todas as informações estarão disponíveis para você na hora que quiser!</p>
									</section>

								</div>
								<div class="4u 12u(narrower)">

									<section>
										<span class="icon featured fa-cog"></span>
										<header>
											<h3>O primeiro Lens Helper</h3>
										</header>
										<p>Com o Lens Helper você poderá compreender o funcionamento das lentes das mais diversas marcas, além disso, ele irá te dizer qual lente é melhor para você de acordo com seu estilo de fotografia!</p>
									</section>

								</div>
							</div>

						</section>

					<!-- Three -->

			<!-- CTA -->

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="https://twitter.com/_LucsShadow" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/lucsshadow" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://github.com/LucsShadow" class="icon circle fa-github"><span class="label">Github</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Lucas Sombra</li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
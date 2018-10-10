<?php	
	include ("../../conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>PhotographyData Lens Helper</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../../assets/css/main.css" />
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
						<li class="current"><a href="../../index.php">Entrada</a></li>
						<li class="current"><a href="../lenshelper.php">Lens Helper</a></li>
						<li class="current"><a href="../../exifdone/upimg.php">Upload</a></li>
						<?php
							if(isset($_SESSION['codusuario'])){
								?>
								<li><a href="../../logout.php" class="button special">Logout</a></li>
								<?php
							}else{
								?>
								<li><a href="../../login.php" class="button special">Login</a></li>
								<li><a href="../../cadastro.php" class="button special">Cadastrar</a></li>
								<?php
							}
						?>
					</ul>
				</nav>
			</header>

			<!-- Banner -->
			<?php
				if(isset($_SESSION['codusuario'])){
				?>
				<section id="banner">

					<div class="inner">

                        <header>
                            <h2>Lens Helper</h2>
                        </header>
                        <p>Uma ferramenta que irá te ajudar 
                            <br>a entender tudo sobre lentes
                           
                            <footer>
                                <ul class="buttons vertical">
                                    <li><a href="#main" class="button fit scrolly">Me mostra mais!</a></li>
                                </ul>
                            </footer>

                        </div>

				</section>

			<!-- Main -->
		<article id="main">

			<header class="special container">
				<span class="icon fa-image"></span>
				<h2>Seleciona a <strong>Categoria</strong> e <br>veja a lente certa para você:</h2>
				<br>
                    <ul class="buttons">
                        <li><a href="#marcass" class="button fit scrolly">Selecione</a></li>
                    </ul>
			</header>
			<article id="marcass">
				<br>
				<br>
			<section class="wrapper style4 container">

							<!-- Content -->
							
								<div class="content" align="center">
									<section>
										<header>
											<h3>Categorias</h3>
										</header>
										<a href="categoriapaisagens.php" class="button">Paisagens</a>  
										<a href="categoriaarquitetura.php" class="button">Arquitetura</a>
										<a href="categoriaretrato.php" class="button">Retrato</a><br><br>
										<a href="categoriamoda.php" class="button">Moda</a>
										<a href="categoriaselvagem.php" class="button">Vida Selvagem</a>
										<a href="categoriaesporte.php" class="button">Esporte</a><br><br>
										<a href="categoriacomida.php" class="button">Comida</a> 
										<a href="categoriamacro.php" class="button">Macrofotografia</a>
									</section>
								</div>
						</section>

						<!-- Two -->
						<section class="wrapper style2 container special">
							<div class="row">
								
								<div class="12u 12u(narrower)" align="center">
									
											<section align="center">
												<header>
													<h3>Veja o guia das lentes por marca!</h3>
												</header>
												<p>Clique no botão abaixo e veja o guia!</p>
												<footer>
													<ul class="buttons">
														<li><a href="../lenshelper.php" class="button small">Descobrir</a></li>
													</ul>
												</footer>
											</section>
								</div>
								
							</div>
						</section>
						<?php
										}else{
											header("location: ../lenshelper.php");
										}
											?>

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
			<script src="../../assets/js/jquery.min.js"></script>
			<script src="../../assets/js/jquery.dropotron.min.js"></script>
			<script src="../../assets/js/jquery.scrolly.min.js"></script>
			<script src="../../assets/js/jquery.scrollgress.min.js"></script>
			<script src="../../assets/js/skel.min.js"></script>
			<script src="../../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../../assets/js/main.js"></script>

	</body>
</html>
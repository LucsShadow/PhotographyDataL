<?php	
	include ("../conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>PhotographyData Lens Helper</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
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
						<li class="current"><a href="../index.php">Entrada</a></li>
						<li class="current"><a href="lenshelper.php">Lens Helper</a></li>
						<li class="current"><a href="../exifdone/upimg.php">Upload</a></li>
						<?php
							if(isset($_SESSION['codusuario'])){
								?>
								<li><a href="../logout.php" class="button special">Logout</a></li>
								<?php
							}else{
								?>
								<li><a href="../login.php" class="button special">Login</a></li>
								<li><a href="../cadastro.php" class="button special">Cadastrar</a></li>
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
                            <h2>Lens Helper</h2>
                        </header>
                        <p>Esse é o <strong>Lens Helper</strong>, uma
                            <br />
                            ferramenta que irá te ajudar 
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
				<span class="icon fa-camera"></span>
				<h2>Seleciona a <strong>marca da lente</strong> que <br>deseja ver as informações:</h2>
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
											<h3>Marcas:</h3>
										</header>
										<a href="lentescanon.php" class="button">Canon</a>  
										<a href="lentesfujifilm.php" class="button">Fujifilm</a>
										<a href="lentesnikon.php" class="button">Nikon</a><br><br>
										<a href="lentesolympus.php" class="button">Olympus</a>
										<a href="lentespanasonic.php" class="button">Panasonic</a>
										<a href="lentespentax.php" class="button">Pentax</a><br><br>
										<a href="lentesrokinon.php" class="button">Rokinon</a>
										<a href="lentessamsung.php" class="button">Samsung</a>
										<a href="lentessigma.php" class="button">Sigma</a><br><br>
										<a href="lentessony.php" class="button">Sony</a>
										<a href="lentestamron.php" class="button">Tamron</a>
										<a href="lentestokina.php" class="button">Tokina</a>					
									</section>
								</div>

						</section>
						<section class="wrapper style2 container special">
							<div class="row">
								<div class="12u 12u(narrower)" align="center">
									<?php
										if(isset($_SESSION['codusuario'])){
											?>
											<section align="center">
												<header>
													<h3>Veja as dicas por categoria!</h3>
												</header>
												<p>Clique no botão abaixo e veja dicas de lentes de acordo com a categoria que você mais gosta!</p>
												<footer>
													<ul class="buttons">
														<li><a href="Categoria/categorias.php" class="button small">Descobrir</a></li>
													</ul>
												</footer>
											</section>
											<?php
										}else{
											?>
											<section align="center">
												<header>
													<h3>Veja as dicas por categoria!</h3>
												</header>
												<p>Basta você realizar o seu login ou cadastro para acessar essa sessão!</p>
												<footer>
													<ul class="buttons">
														<li><a href="../login.php" class="button small">Login</a></li>
														<li><a href="../cadastro.php" class="button small">Cadastrar</a></li>
													</ul>
												</footer>
											</section>
											<?php
										}
									?>
								</div>
								
							</div>
						</section>
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
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.scrollgress.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

	</body>
</html>
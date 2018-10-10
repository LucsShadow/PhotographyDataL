<?php	
	include ("../conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Lentes da marca: Sony</title>
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

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
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
					</header>
					<!-- One -->
						<section class="wrapper style4 container">

							<!-- Content -->
								<div class="content">
									<section>
										<header align="center">
											<h2>Sony</h2>
										</header>
										<div align="center">
											<img src="lentes/lentessonyy.jpg" width="600px" />
										</div>
										<header align="center">
											<h3>Siglas</h3>
										</header>
										<b>MF – Manual Focus – Foco Manual</b>
										<p>Lentes antigas da Minolta, com apenas foco manual. Para operar nos corpos Sony Alpha, precisam de adaptadores.</p>
										<b>MD – Minimum Diaphragm – Diafragma Mínimo</b>
										<p>Essas lentes têm uma aba para indicar sua abertura mínima.</p>
										<b>ED – Extra-Low Dispersion Glass – Elemento Ótico de baixa dispersão</b>
										<p>Cristal especial com baixa dispersão de cor, aumentando a qualidade das fotos.</p>
										<b>IF – Internal Focusing</b>
										<p>O foco é realizado dentro da lente, sem alterar o comprimento de seu tambor.</p>
										<b>SSM – Supersonic Wave Drive – Motor de Onda Supersônica</b>
										<p>Semelhante ao USM da Canon ou AF-S da Nikon, as lentes SSM têm um motor que realiza o auto-foco.</p>
										<b>ADI – Advanced Distance Integration – Integração de Distância Avançada</b>
										<p>O sistema ADI está presente desde a Alpha A100, realizando a medição integrada para flashs. Essa medição é mais avançada que a TTL, realizada pelas lentes, determinando a potência do flash sem a necessidade de um pre-flash para medir a exposição apropriada.</p>
										<b>DT</b>
										<p>Lentes Sony projetadas para cobrir a superfície APS-C, por isso não podem ser usadas em câmeras full-frame ou de filme 35mm. Elas têm a vantagem de ser mais compactas e leves.</p>
										<b>G – Golden – Douradas</b>
										<p>Lentes de maior qualidade para câmeras Sony Minolta, sendo comparáveis às lente L da Canon. São as mais resistentes, com maiores aberturas e elementos de baixa dispersão de luz, realizando fotos mais fiéis às cores e formas.</p>
										<b>T – Treatment – Tratamento</b>
										<p>Revestimento anti-refletivo desenvolvido pela Carl Zeiss nos anos 1970. Ela permite uma maior transmissão de luz, reduzindo reflexões dentro da objetiva. Todas as lentes de SLR Digitais possuem revestimentos semelhantes</p>
										<b>APO – Apochromatic Treatment – Tratamento apocromático</b>
										<p>Tecnologia apocromática das lentes sony, reduzindo a distorção de cores nas imagens.</p>
										<b>HS – Alta Velocidade</b>
										<p>Presente em algumas lentes G, que realizam foco mais rápido, mesmo não tendo o motor piezelétrico, das SSM.</p>
										<b>SEL</b>
										<p>Especifica as objetivas Sony com autofoco desenhadas para seu E-mount, sistema de câmeras mirrorless. Encontra-se nos nomes abreviados, a exemplo da Sony E 16-50mm f/3.5-5.6 PZ SSM, que é também conhecida como SELP1650.</p>
										<b>FE</b>
										<p>Objetivas desenhadas para câmeras mirrorless full-frame da Sony, como a Sony Alpha A7.</p>
										<b>E</b>
										<p>Objetivas desenhadas para as câmeras mirrorless com sensores APS-C, como a Sony Alpha A6000.</p>
										<b>ZA</b>
										<p>Objetivas que levam a marca da Zeiss desenhadas especialmente para as câmeras da Sony, que têm correspondência nas G da Sony. Não são atualmente desenhadas pela marca alemã, mas têm seu design aprovado por ela.</p>
										<b>OSS</b>
										<p>Optical SteadyShot marca uma objetiva como possuidora de estabilização óptica. As objetivas da Sony não costumam ter o recurso, pois a Sony prefere estabilização no sensor da câmera, mas a marca confia neste tipo de estabilização em suas mirrorless com E-mount.</p>
										<b>PZ</b>
										<p>Power Zoom: especifica objetivas que possuem motores incorporados para operar o zoom óptico. Bom para videografia, por possibilitar um zoom suave.</p>
									</section>
								</div>

						</section>

					<!-- Two -->
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
														<li><a href="Categoria/categorias.php" class="button small">Categorias</a></li>
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
						<br>

				</article>

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
<?php	
	include ("../conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Lentes da marca: Tokina</title>
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
											<h2>Tokina</h2>
										</header>
										<div align="center">
											<img src="lentes/lentestokina.jpg" width="500px" />
										</div>
										<header align="center">
											<h3>Siglas</h3>
										</header>
										<b>AS – Aspherical Optics – Ótica Asférica</b>
										<p>Em seu design ótico, a lente oferece elementos asféricos, que eliminam anomalias e outras distorções na imagem.</p>
										<b>F&R – Front & Rear Aspherical – Frente e Traseira Asférica)</b>
										<p>O elemento asférico frontal possui 50mm e o traseiro, tem 20mm, melhorando a luminosidade das bordas e corrigindo aberrações esféricas</p>
										<b>SD – Super Low Dispersion – Dispersão Super Baixa</b>
										<p>As lentes Tokina SD possuem elementos especiais diminuindo as distorções de cor nas fotos.</p>
										<b>HLD – High-refraction, Low Dispersion – Alta Refração, Baixa Dispersão</b>
										<p>Lentes grande angulares e zoom com maior qualidade dos elementos óticos. Possuem alta refração e baixa dispersão de luz em seus elementos.</p>
										<b>MC – Multi-Coating – Multi-Revestimento</b>
										<p>Tecnologia desenvolvida pela Tokina que reveste os elementos óticos, garantindo menos reflexão nas lentes, diminuindo o efeito do Flare.</p>
										<b>FE – Floating Element System – Sistema Flutuante de Elementos</b>
										<p>Todos os pontos entre a distância mínima de foco e o infinito operam rapidamente, corrigindo o astigmatismo na lente.</p>
										<b>IF – Internal Focus System – Sistema de Foco Interno</b>
										<p>Os elementos óticos se movem dentro da lente, sem alterar seu tamanho. Isso aumenta a velocidade da focalização, altera menos o centro de gravidade e garante lentes menores.</p>
										<b>IRF – Internal Rear Focus System – Sistema de Foco Traseiro Interno</b>
										<p>Aumenta o proveito do foco em lentes teleobjetivas com mais de 300mm movendo apenas os elementos traseiros da lente, na hora da focalização.</p>
										<b>FC – Focus Clutch Mechanism – Mecanismo de aperto de foco</b>
										<p>Permite que o fotógrafo faça a focagem manual, mesmo quando a função de auto-foco da lente está ativada. O anel de focagem fica livre.</p>
										<b>One Touch FC – One Touch Focus Clutch Mechanism – Mecanismo de aperto de foco com um toque</b>
										<p>Com apenas um toque, o fotógrafo pode mudar da função de auto-foco para foco manual.</p>
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
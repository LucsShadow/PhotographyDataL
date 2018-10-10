<?php	
	include ("../../conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Esporte</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../assets/css/main.css" />
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
			<?php
				if(isset($_SESSION['codusuario'])){
				?>
				<article id="main">
					
					<!-- One -->
							<article id="pagabaixo"'>
							</article>
						<section class="wrapper style4 container">

							<!-- Content -->

								<div class="content">
									<section>
										<header align="center">
											<h2><b>Esporte</b></h2>
										</header>
										<p>
											As fotografias de esportes têm como principais características: ação, velocidade e dinamismo. Quando um ato acontece, o fotógrafo precisa estar atento, pois em sua maioria o lance é singular e não volta mais.
											<br><br>
											O esporte faz com que o homem dê tudo de si. É o ser humano cada vez mais tentando superar os limites de seu corpo. Partindo desta premissa, cabe aos fotógrafos de esporte capturar as expressões faciais decorrentes do esforço do atleta.
											<br><br>
											A dor de uma contusão, o esforço em busca de um recorde, o sofrimento da fadiga, a alegria por uma conquista e a decepção de uma derrota, são algumas das caras e caretas que o atleta deixa transparecer em uma competição.
											<br><br>
											Esta ação descrita anteriormente, na maioria das vezes se passa longe de onde o fotógrafo está (seja por segurança do próprio fotógrafo, ou para não interferir na ação dos atletas).
											<br><br>
											Lembrando que quanto maior a abertura do diafragma (menor número f) maior a velocidade do obturador. Assim a diferença entre uma objetiva f/4 e uma f/2.8 pode fazer a diferença em uma foto que necessite de velocidade.

										</p>
										
										<?php
											$select = $pdo->prepare("SELECT camera FROM imagem WHERE coduser = :coduser");
											$select ->execute(array(':coduser'=>$_SESSION['codusuario']));
											$resultado = $select -> fetch(PDO::FETCH_ASSOC);
										
											switch ($resultado['camera']) {
												case 'Canon':
													?>
													<h4 align="center"> Lentes Canon </h4>
													<div align="center">
														<img  style="width:50%" src="lentes/canon7020028.jpg"/>
													</div>
													<div align="center">
													<a href="https://www.amazon.com/dp/B01L76DUA2/ref=dp_cr_wdg_tit_rfb"><b>Valor mais alto: Canon EF 70-200mm f/2.8L is II USM Telephoto Zoom Lens for Canon SLR Cameras | Preço: R$ 8000,00</b></a><br>
													<br>
													<br>
													<div align="center">
														<img  style="width:50%" src="lentes/canon702004.jpg"/>
													</div>
													<a href="https://www.amazon.com/Canon-70-200mm-Telephoto-International-warranty/dp/B01BTJ8WLO/ref=sr_1_13?s=electronics&ie=UTF8&qid=1539044576&sr=1-13&keywords=canon+70-200"><b>Valor mais baixo: Canon EF 70-200mm f/4L USM Telephoto Zoom Lens for Canon SLR Cameras | Preço: R$ 2400,00</b></a>
													</div>
													<?php
													break;
												case 'NIKON CORPORATION':
													?>
													<h4 align="center"> Lentes Nikon </h4>
													<div align="center">
														<img  style="width:70%" src="lentes/nikon7020028.jpg"/>
													</div>
													<div align="center">
													<a href="https://www.amazon.com/Nikon-AF-S-NIKKOR-70-200mm-2-8E/dp/B01M4L36RJ/ref=sr_1_2?s=electronics&ie=UTF8&qid=1539044838&sr=1-2&keywords=nikon+70-200"><b>Valor mais alto: Nikon AF-S NIKKOR 70-200mm f/2.8E FL ED VR Lens | Preço: R$ 11000,00</b></a><br>
													<div align="center">
														<img  style="width:70%" src="lentes/nikon702004.jpg"/>
													</div>
													<a href="https://www.amazon.com/Nikon-70-200mm-Nikkor-Zoom-Lens/dp/B009VZOK0Q/ref=sr_1_3?s=electronics&ie=UTF8&qid=1539044838&sr=1-3&keywords=nikon+70-200"><b>Valor mais baixo: Nikon 70-200mm f/4G ED VR Nikkor Zoom Lens | Preço: R$ 5200,00</b></a>
													</div>
													<?php
													break;
												case 'SONY':
													?>
													<h4 align="center"> Lentes Sony </h4>
													<div align="center">
														<img  style="width:70%" src="lentes/sony7020028.jpg"/>
													</div>
													<div align="center">
													<a href="https://www.amazon.com/Sony-70-200mm-2-8-OSS-Lens/dp/B01IDQEQ34/ref=sr_1_3?s=electronics&ie=UTF8&qid=1539046681&sr=1-3&keywords=sony+70-200"><b>Valor mais alto: Sony FE 70-200mm f/2.8 GM OSS Lens | Preço: R$ 11400,00</b></a><br>
													<div align="center">
														<img  style="width:70%" src="lentes/sony702004.jpg"/>
													</div>
													<a href="https://www.amazon.com/Sony-70-200mm-Interchangeable-Alpha-Cameras/dp/B00I8BICEO/ref=sr_1_4?s=electronics&ie=UTF8&qid=1539046681&sr=1-4&keywords=sony+70-200"><b>Valor mais baixo: Sony FE 70-200mm F4 G OSS Interchangeable Lens for Sony Alpha Cameras | Preço: R$ 6000,00</b></a>
													</div>
													<?php
													break;
												default:
													?>
													<section align="center">
														<header>
															<h3>Não apareceu uma lente?!?!</h3>
														</header>
														<p align="center"><b>Basta você realizar o upload de alguma imagem e irei indiciar a lente certa!</b></p>
														<br>
														<!--<h4> Observação: Se a sua câmera não é canon, nikon ou sony, o software não irá te indiciar uma lente.-->
														<footer>
															<ul class="buttons">
																<li><a href="../../exifdone/upimg.php" class="button small">Fazer Upload</a></li>
															</ul>
														</footer>
													</section>
													<?php
													break;
											}
										?>
									</section>
								</div>
						</section>
						<?php
										}else{
											header("location: ../lenshelper.php");
										}
											?>

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
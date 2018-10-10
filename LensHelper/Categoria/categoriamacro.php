<?php	
	include ("../../conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Macrofotografia</title>
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
											<h2><b>Macrofotografia</b></h2>
										</header>
										<p>
											Todas as lentes têm uma distância mínima estabelecida para focalizar o assunto a ser fotografado. Nas lentes do tipo macro essa distância é bem curta, bem curta mesmo. Ou seja, usando uma lente macro, é possível chegar bem próximo do objeto sem perder o foco do principal ponto.
											<br><br>
											Uma lente macro permite que você amplie praticamente qualquer coisa. Uma ótima forma de explorar os mundos em miniatura que existem à nossa volta, a fotografia macro é muito usada para revelar os menores dos assuntos.
											<br><br>
											Você pode transformar um inseto do seu quintal em um dinossauro com a lente macro correta. Bem, com a lente e um pouco de paciência, já que é impossível pedir ao inseto para sentar e posar para um retrato.
											<br><br>
											As lentes macro podem ter uma profundidade de campo bem curta, ou seja, muito poder de desfoque de fundo.  
											<br><br>
											Utilize sempre um tripé e um bom flash para obter ótimos resultados de fotos macro.
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
														<img  style="width:50%" src="lentes/canon100.jpg"/>
													</div>
													<div align="center">
													<a href="https://www.amazon.com/Canon-100mm-Macro-Digital-Cameras/dp/B002NEGTSI/ref=sr_1_3?s=electronics&ie=UTF8&qid=1539047686&sr=1-3&keywords=canon+macro"><b>Valor mais alto: Canon EF 100mm f/2.8L IS USM Macro Lens for Canon Digital SLR Cameras | Preço: R$ 3200,00</b></a><br>
													<br>
													<br>
													<div align="center">
														<img  style="width:50%" src="lentes/canon60.jpg"/>
													</div>
													<a href="https://www.amazon.com/Canon-EF-S-Macro-Fixed-Cameras/dp/B0007WK8KS/ref=sr_1_7?s=electronics&ie=UTF8&qid=1539047686&sr=1-7&keywords=canon+macro"><b>Valor mais baixo: Canon EF-S 60mm f/2.8 Macro USM Fixed Lens for Canon SLR Cameras | Preço: R$ 1600,00</b></a>
													</div>
													<?php
													break;
												case 'NIKON CORPORATION':
													?>
													<h4 align="center"> Lentes Nikon </h4>
													<div align="center">
														<img  style="width:70%" src="lentes/nikon100.jpg"/>
													</div>
													<div align="center">
													<a href="https://www.amazon.com/Nikon-AF-S-Micro-NIKKOR-105mm-IF-ED/dp/B000EOSHGQ/ref=sr_1_3?s=electronics&ie=UTF8&qid=1539047936&sr=1-3&keywords=nikon+macro9"><b>Valor mais alto: Nikon Nikon AF-S VR Micro-NIKKOR 105mm f/2.8G IF-ED Lens | Preço: R$ 3500,00</b></a><br>
													<div align="center">
														<img  style="width:70%" src="lentes/nikon60.jpg"/>
													</div>
													<a href="https://www.amazon.com/Nikon-Micro-NIKKOR-2177-Standard-Cameras/dp/B0013A1XDY/ref=sr_1_6?s=electronics&ie=UTF8&qid=1539047936&sr=1-6&keywords=nikon+macro"><b>Valor mais baixo: Nikon AF-S FX Micro-NIKKOR 2177 60mm f/2.8G ED Standard Macro Lens for Nikon DSLR Cameras | Preço: R$ 2400,00</b></a>
													</div>
													<?php
													break;
												case 'SONY':
													?>
													<h4 align="center"> Lentes Sony </h4>
													<div align="center">
														<img  style="width:70%" src="lentes/sony100.jpg"/>
													</div>
													<div align="center">
													<a href="https://www.amazon.com/Sony-100mm-Macro-Digital-Camera/dp/B000DZH7J4/ref=sr_1_5?s=electronics&ie=UTF8&qid=1539048115&sr=1-5&keywords=sony+macro"><b>Valor mais alto: Sony 100mm f/2.8 Macro Lens for Sony Alpha Digital SLR Camera | Preço: R$ 3300,00</b></a><br>
													<div align="center">
														<img  style="width:70%" src="lentes/sony60.jpg"/>
													</div>
													<a href="https://www.amazon.com/Sony-Macro-Alpha-Digital-Camera/dp/B000DZH712/ref=sr_1_29?s=electronics&ie=UTF8&qid=1539048143&sr=1-29&keywords=sony+macro"><b>Valor mais baixo: Sony 50mm f/2.8 Macro Lens for Sony Alpha Digital SLR Camera | Preço: R$ 2400,00</b></a>
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
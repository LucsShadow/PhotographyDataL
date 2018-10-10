<?php	
	include ("../../conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Retrato</title>
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
											<h2><b>Retrato</b></h2>
										</header>
										<p>
											Para fotografar os famosos retratos precisamos destacar principalmente 3 detalhes, a distância focal da nossa lente, abertura e se a lente é prime ou não.<br>
											<br>
											As lentes prime são aquelas que possuem somente uma distância focal, a grande vantagem disso é a qualidade ótica muito maior, já que elas só possuem 1 elemento dentro delas. Elas também possuem aberturas maiores, resultando em mais luz e consequentemente permitindo fotografar com velocidades maiores e ISOS mais baixos, duas coisas importantíssimas para fotos mais nítidas, independente da regra da reciprocidade.
										</p>
										<p>
											Dependendo do seu orçamento é mais válido investir em uma lente prime “mais barata” do que uma lente Zoom “mais barata”. 
											Os retratos geralmente possuem um desfoque no fundo, isso é provocado por uma abertura muito grande, logo é necessário uma lente com uma abertura de 2.8 ou maior.
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
														<img  style="width:50%" src="lentes/canon85.jpg"/>
													</div>
													<div align="center">
													<a href="https://www.amazon.com/Canon-85mm-f1-2L-Lens-Cameras/dp/B000EW9Y4M/ref=sr_1_18?ie=UTF8&qid=1539039396&sr=8-18&keywords=best+canon+lens+for+portraits"><b>Valor mais alto: Canon EF 85mm f1.2L II USM Lens for Canon DSLR Cameras - Fixed | Preço: R$ 7800,00</b></a><br>
													<br>
													<br>
													<div align="center">
														<img  style="width:50%" src="lentes/canon5014.jpg"/>
													</div>
													<a href="https://www.amazon.com/Canon-Standard-Medium-Telephoto-Cameras/dp/B00009XVCZ/ref=sr_1_3?s=photo&ie=UTF8&qid=1539040039&sr=1-3&keywords=canon+50mm+1.4"><b>Valor mais baixo: Canon EF 50mm f/1.4 USM Standard & Medium Telephoto Lens for Canon SLR Cameras | Preço: R$ 800,00</b></a>
													</div>
													<?php
													break;
												case 'NIKON CORPORATION':
													?>
													<h4 align="center"> Lentes Nikon </h4>
													<div align="center">
														<img  style="width:50%" src="lentes/nikon8414.jpg"/>
													</div>
													<div align="center">
													<a href="https://www.amazon.com/Nikon-AF-S-NIKKOR-Focus-Cameras/dp/B003ZSHNE0/ref=sr_1_3?ie=UTF8&qid=1539041641&sr=8-3&keywords=nikon+85mm+1.4"><b>Valor mais alto: Nikon AF-S FX NIKKOR 85mm f/1.4G Lens with Auto Focus for Nikon DSLR Cameras | Preço: R$ 4200,00</b></a><br>
													<div align="center">
														<img  style="width:50%" src="lentes/nikon5014.jpg"/>
													</div>
													<a href="https://www.amazon.com/Nikon-AF-S-NIKKOR-Focus-Cameras/dp/B001GCVA0U/ref=sr_1_2?ie=UTF8&qid=1539040146&sr=8-2&keywords=nikon+50mm+1.4"><b>Valor mais baixo: Nikon AF-S FX NIKKOR 50mm f/1.4G Lens with Auto Focus for Nikon DSLR Cameras | Preço: R$ 1600,00</b></a>
													</div>
													<?php
													break;
												case 'SONY':
													?>
													<h4 align="center"> Lentes Sony </h4>
													<div align="center">
														<img  style="width:40%" src="lentes/sony8514.jpg"/>
													</div>
													<div align="center">
													<a href="https://www.amazon.com/Sony-SAL-85F14Z-Planar-Telephoto-Digital/dp/B000JE5CQO/ref=sr_1_2?ie=UTF8&qid=1539041794&sr=8-2&keywords=sony+85mm+1.4+zeiss"><b>Valor mais alto: Sony SAL-85F14Z 85mm f1.4 Carl Zeiss Planar T Coated Telephoto Lens for Sony Alpha Digital SLR Camera | Preço: R$ 6400,00</b></a><br>
													<div align="center">
														<img  style="width:70%" src="lentes/sony5014.jpg"/>
													</div>
													<a href="https://www.amazon.com/Sony-50mm-Alpha-Digital-Camera/dp/B000DZH9MY/ref=sr_1_1?ie=UTF8&qid=1539041894&sr=8-1&keywords=sony+sal+50mm+1.4"><b>Valor mais baixo: Sony 50mm f/1.4 Lens for Sony Alpha Digital SLR Camera | Preço: R$ 1800,00</b></a>
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
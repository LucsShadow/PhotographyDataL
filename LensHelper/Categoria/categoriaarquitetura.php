<?php	
	include ("../../conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Arquitetura</title>
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
											<h2><b>Arquitetura</b></h2>
										</header>
										<p>Quem nunca se frustrou por não conseguir “mostrar tudo” o que gostaria de uma ambiente com uma única foto? Ou estar em frente à uma fachada deslumbrante e ela “não caber na foto”?
										<br>
										<br>
										Pois é, a maioria de nós já sofreu por não ter em mãos uma lente grande angular para conseguir imagens amplas e mais abrangentes.
										<br>
										<br>
										Quando vamos tirar fotos de interiores de casas, monumentos, estruturas diferentes, em fim! Precisamos de uma lente grande angular ou ultra grande angular para capturar esse momento, geralmente o monumento é muito grande ou o cômodo é muito pequeno, logo precisaremos de uma lente capaz de captar todas essas informações sem perder nada!  </p>
										
										<?php
											$select = $pdo->prepare("SELECT camera FROM imagem WHERE coduser = :coduser");
											$select ->execute(array(':coduser'=>$_SESSION['codusuario']));
											$resultado = $select -> fetch(PDO::FETCH_ASSOC);
										
											switch ($resultado['camera']) {
												case 'Canon':
													?>
													<h4 align="center"> Lentes Canon </h4>
													<div align="center">
														<img  style="width:70%" src="lentes/widecanon.jpg"/>
													</div>
													<div align="center">
													<a href="https://www.americanas.com.br/produto/10802156/lente-canon-ef-16-35mm-f-4l-is-usm?pfm_carac=CANON%2016-35&pfm_index=0&pfm_page=search&pfm_pos=grid&pfm_type=search_page%20"><b>Valor mais alto: Lente Canon Ef 16-35mm F/4l Is Usm Serie L | Preço: R$ 4999,90</b></a><br>
													<a href="https://www.americanas.com.br/produto/11355841/lente-canon-ef-s-10-18mm-f-4-5-5-6-is-stm?WT.srch=1&epar=bp_pl_00_go_cf_todas_geral_gmv&gclid=Cj0KCQjw0dHdBRDEARIsAHjZYYDY68yHmmDm25-wCTHQEHkf3jPJJiqWmw7MFZquxQUYjwyZdDoRtQwaAiFtEALw_wcB&opn=YSMESP&sellerId=28793169000165"><b>Valor mais baixo: Canon Ef-S 10-18mm F/4.5-5.6 Is Stm | Preço: R$ 1299,00</b></a>
													</div>
													<?php
													break;
												case 'NIKON CORPORATION':
													?>
													<h4 align="center"> Lentes Nikon </h4>
													<div align="center">
														<img  style="width:70%" src="lentes/nikon1424.jpg"/>
													</div>
													<div align="center">
													<a href="https://www.amazon.com/Nikon-AF-S-NIKKOR-14-24mm-2-8G/dp/B000VDCTCI/ref=sr_1_1?ie=UTF8&qid=1538572756&sr=8-1&keywords=nikkor+10-20mm"><b>Valor mais alto: Nikon AF-S NIKKOR 14-24mm f/2.8G ED | Preço: R$ 8700,00</b></a><br>
													<div align="center">
														<img  style="width:70%" src="lentes/nikon1020.jpg"/>
													</div>
													<a href="https://www.amazon.com/Nikon-AF-P-NIKKOR-10-20mm-4-5-5-6G/dp/B072639587/ref=sr_1_fkmr0_1?ie=UTF8&qid=1538572532&sr=8-1-fkmr0&keywords=nikkor+10-20mm+4.5+-5.6"><b>Valor mais baixo: Nikon AF-P DX NIKKOR 10-20mm f/4.5-5.6G VR Lens | Preço: R$ 1400,00</b></a>
													</div>
													<?php
													break;
												case 'SONY':
													?>
													<h4 align="center"> Lentes Sony </h4>
													<div align="center">
														<img  style="width:70%" src="lentes/sony1635.jpg"/>
													</div>
													<div align="center">
													<a href="https://www.amazon.com/Sony-16-35mm-Vario-Tessar-Mount-Lens/dp/B00NGTN25C/ref=sr_1_7?ie=UTF8&qid=1538573454&sr=8-7&keywords=Sony+wide+angle+lens"><b>Valor mais alto: Sony 16-35mm Vario-Tessar T FE F4 ZA OSS E-Mount Lens | Preço: R$ 5700,00</b></a><br>
													<div align="center">
														<img  style="width:70%" src="lentes/sony1118.jpg"/>
													</div>
													<a href="https://www.amazon.com/Sony-11-18mm-4-5-5-6-Aspherical-Digital/dp/B000DZH7JO/ref=sr_1_17?s=electronics&ie=UTF8&qid=1538744387&sr=1-17&keywords=sony+lens+for+a77"><b>Valor mais baixo: Sony DT 11-18mm f/4.5-5.6 Aspherical ED Super Wide Angle Zoom Lens for Sony Alpha Digital SLR Camera | Preço: R$ 3000,00</b></a>
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
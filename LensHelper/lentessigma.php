<?php	
	include ("../conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Lentes da marca: Sigma</title>
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
											<h2>Sigma</h2>
										</header>
										<div align="center">
											<img src="lentes/lentessigma.jpg" width="500px" />
										</div>
										<header align="center">
											<h3>Siglas</h3>
										</header>
										<b>ASP – Aspherical Lenses – Lentes Asféricas</b>
										<p>AS lentes asféricas permitem uma performance melhorada, tendo menos elementos óticos em seu interior. Isso resulta em maior qualidade de imagem e uma lente mais compacta. Elas são ótimas, pois diminuem problemas comuns a grande-angulares e zooms, como flares e distorções nas bordas.</p>
										<b>APO – Apochromatic lenses – Lentes apocromáticas</b>
										<p>Essas lentes são construídas com um cristal ótico SLD (Special Low Dispersion – Baixa Dispersão Especial), que reduz a distorção de cores nos elementos fotografados, aumentando a fidelidade e qualidade das imagens. Os cristais comum costumam alterar o comprimento de onda das luzes que são registradas pela câmera.</p>
										<b>OS – Optical Stabilizer – Estabilizador Ótico</b>
										<p>Esse sistema possui um mecanismo que compensa a vibração da câmera quando o fotógrafo a segura, reduzindo os riscos de fotos tremidas. Dois pequenos sensores dentro da lente identificam essa vibração e a compensam. O sistema OS pode compensar de 2 a 3 f/stops abaixo da velocidade recomendada.</p>
										<b>EX – Excelence Lens – Lentes de Excelência</b>
										<p>São lentes de melhor qualidade ótica e melhor acabamento externo, sendo mais resistentes e robustas. São a linha mais profissional da marca.</p>
										<b>HSM – Hyper-Sonic Motor – Motor Hipersônico</b>
										<p>Lentes recomendadas para corpos Nikon que não possuem motor de foco embutido. Utiliza um motor de ondas hipersônicas para focagem automática, fazendo do processo mais rápido e silencioso.</p>
										<b>RF – Rear Focos – Focagem Traseira</b>
										<p>As lentes RF estão equipadas com um sistema que move o grupo traseiro de lentes para um foco rápido e silencioso. Nas focagens tradicionais, todo o conjunto de lentes, ou só o primeiro conjunto se movem, alterando o comprimento da lente. No sistema traseiro, o tambor da lente mantem o mesmo tamanho. Esse sistema melhora bastante a capacidade de close-ups em lentes macro, além de realçar o efeito flutuante em grande-angulares.</p>
										<b>DG – DG lens for Digital/Analogue – Lentes para Digital/Analógico</b>
										<p>São lentes desenvolvidas para câmeras digitais, mas podendo ser utilizadas em tradicionais. Corrige distorções e aberrações das fotos, que ficam muito evidentes em câmeras digitais. Essas lentes eliminam flares e fantasmas, além de minimizar bastante a vinhetagem (aquela “escuridão” que aparece nas bordas da foto).</p>
										<b>DC – DG lens for Digital – Lentes DG para Digital</b>
										<p>As lentes DC foram feitas para se ajustarem aos sensores APS-C das câmeras digitais com fator de corte. Não podem ser usadas em câmeras 35mm analógicas ou Full Frame.</p>
										<b>FS – Floating System – Sistema Flutuante</b>
										<p>O sistema flutuante controla o foco movendo os diferentes grupos de lente em posições diferenciadas, diminuindo a distância do telescoping e a flutuação da aberração em diversas distâncias de disparo. Por ser bastante eficiente em lentes macro e grande angulares, esse sistema é encontrado nas lentes macro 50mm F2.8 EX DG e na grande angular 28mm F1.8 EX DG Aspherical macro.</p>
										<b>DF – Dual Focus – Foco de duas formas</b>
										<p>Esse sistema permite a manipulação fácil e exata da lente e a correção do foco automático de forma manual. Ele desembaraça a ligação entre o mecanismo de focagem interno e o anel de focagem externo, quando o anel está na posição AF.</p>
										<b>DL – Deluxe – De Luxo</b>
										<p>Lentes com acabamento especial.</p>
										<b>UC – Ultra Compact – Ultracompacta</b>
										<p>Lentes leves e pequenas, que facilitam o transporte e manejo.</p>
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
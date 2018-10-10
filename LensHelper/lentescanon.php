<?php	
	include ("../conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Lentes da marca: Canon</title>
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
											<h2>Canon</h2>
										</header>
										<div align="center">
											<img src="lentes/lentescanon.jpg"/>
										</div>
										<header align="center">
											<h3>Siglas</h3>
										</header>
										<b>FD – Manual Focus – Focagem Manual</b>
										<p>Lentes FD são as lentes de foco manual da Canon. Possuem um sistema de alavancas e pinos mecânicos que transmitem informações de abertura para o corpo da câmera. Mas, por isso, não podem ser usadas diretamente em câmeras da linha EOS. Para essas, é preciso um adaptador próprio.</p>
										<b>EF – Electro Focus – Focagem Eletrônica</b>
										<p>Criado pela Canon em 1987, é um sistema totalmente eletrônico de transmissão de informações da lente para o corpo da câmera, desenhados exclusivamente para o sistema EOS.<br>
										O sistem trouxe uma série de inovações, como redução de ruídos, maior precisão e rapidez de foco, controle eletrônico de abertura. Tudo isso e muito mais graças a um microchip localizado na lente, que pode informar se algo não está funcionando. Como só podem ser utilizadas na linha EOS, por terem diâmetro interno de 54mm e externo de 65mm, são identificadas com um ponto vermelho próximo ao mount de encaixe ao corpo.</p>
										<b>EF-S – Electro Focus Short Back Focus – Foco Eletrônico Curto Posterior</b>
										<p>São lentes projetadas para a linha EOS de câmeras digitais equipadas com sensores APS-C. Essas lentes foram projetadas para sensores menores que o frame de 35mm, por isso, não podem ser utilizadas em câmeras full frame. Elas são mais compactas, com menos elementos óticos e possuem uma distância focal posterior mais curta em relação ao posicionamento do sensor APS-C. Elas são identificadas por um ponto quadrado branco localizado próximo ao encaixe do mount.</p>
										<b>EOS – Electro-Optical System – Sistema eletro-ótico</b>
										<p>Sistema de Câmeras SLR da Canon e seis assessórios lançados em 1987. As lentes dessa linha são controladas eletronicamente, sem dispositivos mecânicos para ajuste de foco ou abertura.</p>
										<b>UD – Ultra Low-Dispersion Glass – Elemento de Dispersão Ultra Baixo</b>
										<p>Têm cristais com um índice de refração menor que o de cristais comuns, permitindo uma foto com maior fidelidade de cores.</p>
										<b>Série L</b>
										<p>São as lentes top, feitas com os melhores elementos e mais profissionais da Canon. Seus elementos óticos são construídos com elementos asféricos, tratamento apocromático e anti-reflexivo e cristais UD, S-UD ou fluorita. Possuem foco e retrofoco de última geração, fazendo do foco automático mais rápido. E, mesmo com o autofoco ligado, o fotógrafo pode focalizar manualmente. Existem duas explicações para o L dessa linha. Uma diz que significa Low-Dispersion (baixa dispersão), outra diz que significa Luxury (Luxo).</p>
										<b>DO – Diffractive Optics – Ótica Difrativa</b>
										<p>Essa tecnologia permite lentes menores e com maior correção de aberração cromática, sem comprometer a qualidade da imagem. Seus elementos óticos trabalham em conjunto, para diminuir as distorções de imagem. A qualidade é tão boa, que essa linha chega a rivalizar com algumas lentes da série L, sendo mais baratas.</p>
										<b>STM – Smooth Transition for Motion</b>
										<p>O STM é também um motor de autofoco que atribui precisão e quase total silêncio no movimento de focagem das lentes Canon, além de mais suavidade na passagem de foco.<br>
										Isso é ótimo para quem quer fazer vídeos, pois a focagem automática da lente não emite sons de funcionamento , deixando o vídeo com uma leitura bem mais agradável.<br>
										Possuem STM lentes como a EF-S 24mm f/2.8 STM, a EF 50mm f/1.8 STM, a EF 40mm f/2.8 STM, a EF-S 55-250mm F/4-5.6 IS STM, entre outras com a sigla STM em seu nome.</p>
										<b>USM – Ultrasonic Motor – Motor Ultrassônico
										</b>
										<p>Essas lentes trabalham com motores ultrassônicos, que realizam movimentos induzidos por vibração de alta frequência, para fazer o auto-foco. Assim, as lentes focalizam de forma rápida e praticamente silenciosas ao ouvido humano. As mais caras, chamadas FTM (Full-time Manual), permitem o foco manual todo o tempo. Já as mais baratas, não suportam esse sistema. Geralmente, as lentes USM são da linha L, mas as que não pertencem à essa linha, são identificadas por uma faixa dourada no final do corpo.</p>
										<b>IS – Image Stabilization – Estabilizador de Imagem</b>
										<p>São lentes que permitem fotografar em velocidades mais baixas, diminuindo o efeito da vibração nas imagens. Estabilizam a imagem a partir de sensores que identificam o tremor e movem pequenos motores, para deslocar a projeção da imagem, compensandoa vibração. Permitem fotos sem tremor em até 3 f/stops abaixo da velocidade recomendada.</p>
										<b>TS-E – Tilt Shift Lens</b>
										<p>Já tentou fotografar um prédio com uma grande angular e ele aparece “torto” nas bordas? As lentes TS-E corrigem justamente essa distorção. Com essas lentes, o fotógrafo controla em que ângulo vão estar os planos que limitam a profundidade de campo.
										</p>
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
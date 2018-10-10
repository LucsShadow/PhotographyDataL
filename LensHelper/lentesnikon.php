<?php	
	include ("../conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Lentes da marca: Nikon</title>
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
											<h2>Nikon</h2>
										</header>
										<div align="center">
											<img src="lentes/lentesnikon.jpg"/>
										</div>
										<header align="center">
											<h3>Siglas</h3>
										</header>
										<b>AI – Aperture Indexing – Indexação de abertura</b>
										<p>Aperture Indexing é um sistema que permite que as lentes se comuniquem com a câmera através de um contato mecânico.
										Assim, a lente informa ao corpo seus valores de abertura. A abertura é manual, mas é realizada ao girarmos um botão no corpo da câmera, e não pelo anel de abertura que outras lentes têm. Esse sistema foi lançado pela Nikon em 1977.</p>
										<b>AI-S – Aperture Indexing – Indexação de abertura</b>
										<p>São basicamente as lentes AI, mas com a adição de suporte para novos recursos, como transmissão de abertura linear e modo programado para velocidade de disparo. Lançado em 1982, é uma variação das lentes AI para o mount F da Nikon.</p>
										<b>AF – Auto Focus – Foco Automático</b>
										<p>São lentes preparadas para foco automático, mas que não possuem o motor necessário para isso dentro delas.
										O motor de autofoco deve estar no corpo da câmera. Por exemplo, se você usar essa lente numa D90, D7000 ou superior, a câmera realizará o foco automaticamente, ao segurarmos o disparador pela metade. Mas, se utilizar a lente numa D3000, D5000 ou suass sucessoras D3100 e D5100, ela não realizará o auto-foco. Foram lançadas em 1992.</p>
										<b>AF-S – Build in Auto Focus Motor – Motor de Auto Foco Incorporado</b>
										<p>Lançada em 1996, essa classe de lentes possui motor de auto-foco embutido. Além de poder ser utilizado em mais câmeras, possui um sistema de focagem mais rápida e silenciosa que as lentes AF. Por não possuir um anel de abertura mecânico, quando usadas em câmeras mais antigas, atuam sempre em sua menor abertura.</p>
										<b>AF-D</b>
										<p>Uma das variações de lentes Nikon auto foco “mount F”.</p>
										<b>AF-G</b>
										<p>Lentes controladas eletronicamente, não apresentam anéis no tambor. Os ajustes são feitos pelo corpo da câmera, por isso não podem ser usados em câmeras mais antigas.<p>
										<b>D/G – Distance Information – Informações de Distância</b>
										<p>Essas lentes informam a distância entre a câmera e o que estamos fotografando. Assim, foi possível avanços na fotometria matricial 3D e no sensor do flash, permitindo que o flash fizesse uma iluminação mais correta e equilibrada.</p>
										<b>DX – Para corpos de DSLR com fator de corte</b>
										<p>São lentes exclusivamente desenhadas para câmeras digitais SLR da Nikon, levando em consideração seu fator de corte. Como a área do sensor digital é menor que a de um frame de filme 35mm, parte da luz que entra numa câmera digital que usa lentes tradicionais é “desperdiçada”. As lentes DX são projetadas para a luz se enquadrar com mais perfeição ao sensor da câmera. Por isso, elas não podem ser usadas em câmeras fullframe, que captarão as bordas da lente em suas fotos. Foi criada para câmeras como D90, D7000, D3100, D5100, D300 etc.</p>
										<b>FX – Para corpos padrão 35mm</b>
										<p>São lentes projetadas para frames de 35mm, nas câmeras 35mm AF e digitais SLR da Nikon, como D3x, D700, entre outras.</p>
										<b>ED – Extra Low Dispersion Glass – Elemento ótico extra de baixa dispersão</b>
										<p>Lentes ED têm ganhos de nitidez e reprodução de cores. São elementos de melhor qualidade, encontradas nas lentes mais caras produzidas pela Nikon. Traz os benefícios das lentes feitas a partir de cálcio fluorite, porém, mais resistentes.</p>
										<b>ASF – Aspherical Lens Elements – Elementos de lente asféricos</b>
										<p>Em lentes comuns, os elementos óticos são esféricos, causando distorções de ângulos e cores, chamadas “aberrações esféricas”. As lentes asféricas corrigem essas distorções, especialmente em grandes-angulares.</p>
										<b>CRC – Close-Range Correction System – Sistema de correção de Variedade de Foco</b>
										<p>Encontrado em lentes olho-de-peixe, grande angular, macro e teleobetiva média da Nikkor, o CRC promove uma qualidade superior de focagem em distâncias próximas e quando a distância aumenta. Cada grupo de lentes se move independentemente quando vamos focalizar, aumentando a performance de focagem, quando vamos alternar entre um foco próximo e outro distante.</p>
										<b>IF – Internal Focusing – Focagem interna</b>
										<p>As lentes IF fazem a focagem sem alterar o tamanho. O movimento ótico é feito internamente, garantindo uma lente mais leve e compacta, além de realizar um foco mais rápido.</p>
										<b>DC – Defocus Control Lens – Lente de Controle de Desfocagem</b>
										<p>Com essas lentes, o fotógrafo pode controlar o grau de aberração esférica em primeiro plano ou no plano de fundo. Em outras palavras, você pode acentuar a área desfocada girado o anel DC da lente. Ideal para destacar a pessoa fotografada em um retrato, por exemplo.</p>
										<b>RF – Rear Focusing – Focagem traseira</b>
										<p>As lentes têm seus elementos óticos divididos em grupos específicos. Nas lentes RF, apenas os elementos traseiros se movem na focagem, aumentando a velocidade da operação de auto-foco.</p>
										<b>VR – Vibration Reduction – Redutor de Vibração</b>
										<p>Diminui o efeito do tremor das câmeras em fotos de baixa velocidade. A lente identifica o tremor do fotógrafo e, através de motores internos, corrige isso, permitindo fotos mais nítidas. É muito útil quando você for fotografar em ambientes escuros, já que permite trabalhar com até três velocidades (f/stops) abaixo da recomendada, além de fotos com teleobjetiva, quando o problema fica mais nítido. Mas, prepare o bolso. Lentes VR são mais caras que as comuns.</p>
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
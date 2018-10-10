<?php	
	include ("../conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Lentes da marca: Tamron</title>
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
											<h2>Tamron</h2>
										</header>
										<div align="center">
											<img src="lentes/lentestamron.jpg" width="600px" />
										</div>
										<header align="center">
											<h3>Siglas</h3>
										</header>
										<b>AF – Auto Focus – Foco Automátifo</b>
										<p>A lente da câmera realiza o foco automaticamente, quando o fotógrafo pressiona disparador até a metade.</p>
										<b>SP – High-Performance Specifications – Especificações de alta performance</b>
										<p>Realiza fotos com melhor correção de cores e maior nitidez. São similares às lentes ED da Nikon e EX da Sigma.</p>
										<b>DI – Digitally Integrated Design – Desenho Integrado para Digitais</b>
										<p>Lentes adaptadas para SLRs digitais, melhornado a distribuição de luz no sensor ou fotograma. Podem ser usadas em corpos 35mm e full-frame.</p>
										<b>DI-II – Digitally Integrated Design II – Desenho Integrado para Digitais II</b>
										<p>São lentes desenvolvidas exclusivamente para SLR digitais, não podendo ser usada em câmeras Full Frame ou de filme 35mm, por causa do fator de corte.</p>
										<b>IF – Internal Focusing – Focagem Interna</b>
										<p>Essas lentes realizam a focagem sem precisar alterar seu tamanho. Permite uma lente mais leve e compacta, uma vez que o foco é realizado pela movimentação dos elementos óticos dentro do barril.</p>
										<b>ASL – Aspherical – Asférico</b>
										<p>Lentes asféricas têm menor distorção nas bordas da lente e melhor compensação das aberrações asféricas. Além disso, tem menos elementos dentro do barril deixando a lente mais leve.</p>
										<b>LD – Low Dispersion – Baixa Dispersão</b>
										<p>Garante melhor qualidade da imagem, diminuindo a falta de nitidez, especialmente em focagens próximas nas tele-objetivas e lentes com design convencional.</p>
										<b>LD-Hybrid Aspherical – Baixa Dispersão Híbrida Asférica</b>
										<p>Possui a mesma tecnologia das lentes LD, mas são usadas em lentes com range (variação de comprimento) e abertura grande, deixando-as mais leves e compactas. Pode ser encontrada na AF28-105mm f2.8.</p>
										<b>AD – Anomalous Dispersion – Dispersão Anômala</b>
										<p>As lentes possuem um tratamento especial que diminui a distorção das cores captadas pelas bordas da lente. Funciona especialmente em grande angulares e lentes de ângulos convencionais.</p>
										<b>AD-Hybrid Aspherical – Dispersão Anômala Híbrida Asférica</b>
										<p>Lentes com as mesmas tecnologias da AD, mas empregada em lentes com ranges grandes, deixando-as mais leves e menores. Por exemplo, a lente AF 28-300mm.</p>
										<b>XR – Extra Refractive Index Glass – Vidro de Índice Extra Refrativo</b>
										<p>Além de deixar as lentes mais leves e compactas, reduz diversas aberrações para o mínimo possível. Ela melhora a performance da imagem ao mesmo tempo que diminui a quantidade de elementos dentro do barril da lente.</p>
										<b>VC – Vibration Compensation – Compensação de Vibração</b>
										<p>Funciona como o VR da Nikon ou IS da Canon. Sensores identificam o tremor na lente na hora da foto e pequenos motores estabilizam a imagem, aumentando a nitidez em fotos de baixa velocidade.</p>
										<b>BIM – Built-In Motor for Nikon Cameras – Com motor para Câmeras Nikon</b>
										<p>Equivalentes às lentes AF-S da Nikon ou HSM da Sigma, com um motor interno de auto-foco. Podem ser usadas em câmeras sem motor de auto-foco, como D40, D40X, D60, D3000, D3100, D5000, D5100, entre outras.</p>
										<b>FEC – Filter Effect Control – Controle de Efeito de Filtro</b>
										<p>É um acessório nas lentes Tamrom que é encaixado na boca da objetiva, permitindo o uso de filtros de efeitos. Muito útil para filtros degradês, cross-screen e multi-imagem, entre outros.</p>
										<b>ZL – Zoom-Lock Mechanism – Trava de Zoom</b>
										<p>Trava que evita que o barril da lente deslize para frente, quando é transportada na câmera.</p>
										<b>A/M – AF/MF Switchover Mechanism – Mecanismo de Mudança de AF/MF</b>
										<p>Lentes equipadas com um mecanismo de troca de foco automático para manual, com apenas um toque num botão, semelhante às lentes da Nikon e Canon.</p>
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
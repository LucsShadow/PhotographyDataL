<?php	
	include ("../conexao.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>PhotographyData Lens Helper</title>
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
			<?php
							if(isset($_SESSION['codusuario'])){
								$select = $pdo->prepare("SELECT camera FROM imagem WHERE coduser = :coduser");
											$select ->execute(array(':coduser'=>$_SESSION['codusuario']));
											$resultado = $select -> fetch(PDO::FETCH_ASSOC);
										
											switch ($resultado['camera']) {
												case 'Canon':
													?>
													<article id="main">

					<header class="special container">
						<span class="icon fa-camera"></span>
						<h2> Se desejar olhar o guia de outras marcas, clique no botão abaixo. </h2>
						<br>
						<ul class="buttons">
		                        <li><a href="lenshelpealternativa.php" class="button fit scrolly">Outras marcas</a></li>
		                </ul>
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
						</article>
						<br>

						</section>
							<section class="wrapper style2 container special">
							<div class="row">
								<div class="12u 12u(narrower)" align="center">
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
								</div>
							</div>
						</section>
													<?php
													break;
												case 'NIKON CORPORATION':
													?>
													<article id="main">

					<header class="special container">
						<span class="icon fa-camera"></span>
						<h2> Se desejar olhar o guia de outras marcas, clique no botão abaixo. </h2>
						<br>
						<ul class="buttons">
		                        <li><a href="lenshelpealternativa.php" class="button fit scrolly">Outras marcas</a></li>
		                </ul>
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
						</article>
						<br>

						</section>
							<section class="wrapper style2 container special">
							<div class="row">
								<div class="12u 12u(narrower)" align="center">
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
								</div>
							</div>
						</section>
													<?php
													break;
												case 'SONY':
													?>
													<article id="main">

					<header class="special container">
						<span class="icon fa-camera"></span>
						<h2> Se desejar olhar o guia de outras marcas, clique no botão abaixo. </h2>
						<br>
						<ul class="buttons">
		                        <li><a href="lenshelpealternativa.php" class="button fit scrolly">Outras marcas</a></li>
		                </ul>
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
						</article>
						<br>
						<section class="wrapper style2 container special">
							<div class="row">
								<div class="12u 12u(narrower)" align="center">
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
								</div>
							</div>
						</section>

													<?php
													break;
												default:
												?>
												<article id="main">
												<header class="special container">
													<span class="icon fa-camera"></span>
													<h2>Seleciona a <strong>marca da lente</strong> que <br>deseja ver as informações:</h2>
													<br>
									                    <ul class="buttons">
									                        <li><a href="#marcass" class="button fit scrolly">Selecione</a></li>
									                    </ul>
												</header>
												<article id="marcass">
													<br>
													<br>
												<section class="wrapper style4 container">
																<!-- Content -->
																	<div class="content" align="center">
																		<section>
																			<header>
																				<h3>Marcas:</h3>
																			</header>
																			<a href="lentescanon.php" class="button">Canon</a>  
																			<a href="lentesfujifilm.php" class="button">Fujifilm</a>
																			<a href="lentesnikon.php" class="button">Nikon</a><br><br>
																			<a href="lentesolympus.php" class="button">Olympus</a>
																			<a href="lentespanasonic.php" class="button">Panasonic</a>
																			<a href="lentespentax.php" class="button">Pentax</a><br><br>
																			<a href="lentesrokinon.php" class="button">Rokinon</a>
																			<a href="lentessamsung.php" class="button">Samsung</a>
																			<a href="lentessigma.php" class="button">Sigma</a><br><br>
																			<a href="lentessony.php" class="button">Sony</a>
																			<a href="lentestamron.php" class="button">Tamron</a>
																			<a href="lentestokina.php" class="button">Tokina</a>					
																		</section>
																	</div>

															</section>
													<section class="wrapper style2 container special">
														<div class="row">
															<div class="12u 12u(narrower)" align="center">
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
															</div>
														</div>
													</section>
													
								<?php
							}
							}else{
						?>
		<article id="main">

			<header class="special container">
				<span class="icon fa-camera"></span>
				<h2>Seleciona a <strong>marca da lente</strong> que <br>deseja ver as informações:</h2>
				<br>
                    <ul class="buttons">
                        <li><a href="#marcass" class="button fit scrolly">Selecione</a></li>
                    </ul>
			</header>
			<article id="marcass">
				<br>
				<br>
			<section class="wrapper style4 container">
							<!-- Content -->
								<div class="content" align="center">
									<section>
										<header>
											<h3>Marcas:</h3>
										</header>
										<a href="lentescanon.php" class="button">Canon</a>  
										<a href="lentesfujifilm.php" class="button">Fujifilm</a>
										<a href="lentesnikon.php" class="button">Nikon</a><br><br>
										<a href="lentesolympus.php" class="button">Olympus</a>
										<a href="lentespanasonic.php" class="button">Panasonic</a>
										<a href="lentespentax.php" class="button">Pentax</a><br><br>
										<a href="lentesrokinon.php" class="button">Rokinon</a>
										<a href="lentessamsung.php" class="button">Samsung</a>
										<a href="lentessigma.php" class="button">Sigma</a><br><br>
										<a href="lentessony.php" class="button">Sony</a>
										<a href="lentestamron.php" class="button">Tamron</a>
										<a href="lentestokina.php" class="button">Tokina</a>					
									</section>
								</div>

						</section>
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
						<?php
						}
						?>
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
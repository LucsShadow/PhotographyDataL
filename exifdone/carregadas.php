<?php

 include ("../conexao.php");

?>
<html lang = "en">
  <head>
    <title>Upload</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <link href="../lightbox/dist/css/lightbox.css" rel="stylesheet">
          <meta name = "viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <style>
        label{
            padding: 10px auto;
        }
        .container img {
            max-width:250px;
            max-height:150px;
            margin-top: 60px;
            width: auto;
            float: left;
            height: auto;
        }
    </style>
    
    <script>
        
        $(function()
        {
            $.get("process.php", function(result) {
                $("#funcao").html(result);
            });

        });
    </script>
    
  </head>
  <body>
    <div id="page-wrapper">

            <!-- Header -->
            <header id="header" class="alt">
                <h1 id="logo"><a href="/PhotographyData/index.html">PhotographyData <span>by Lucas Sombra</span></a></h1>
                <nav id="nav">
                    <ul>
                        <li class="current"><a href="../index.php">Entrada</a></li>
                        <li class="current"><a href="../LensHelper/lenshelper.php">Lens Helper</a></li>
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
                            <h2>PhotographyData</h2>
                        </header>
                        <p>Esse é o <strong>PhotographyData</strong>, um
                            <br />
                            exif reader tool + Lens Helper
                            <br />
                            by <a href="http://html5up.net">Lucas Sombra</a>.</p>
                            <footer>
                                <ul class="buttons vertical">
                                    <li><a href="#main" class="button fit scrolly">Me mostra mais!</a></li>
                                </ul>
                            </footer>

                        </div>

                </section>

                 <article id="main">
                      
                        
                        <?php
                                    $diretorio = scandir('MyFiles/');
                                    $num = count($diretorio) - 3;
                                    if($num <= 0){
                                        $x = 0;
                                    }else{
                                        $x = 1;
                                    }
                            if($x == 1){?>
                        
                            <span id="funcao"></span>
                    
                        <div align="center">
                        <a href="excluir.php" class="button" >Apagar</a>
                       </div>
                      </div>
                         
                       
                   <?php 
                        }elseif($x == 0){
                            ?>
                            <script>alert('Sem imagens carregadas!'); location.href='upimg.php';</script>
                          <?php
                        }
                        ?>
        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollgress.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>
            <script src="../lightbox/dist/js/lightbox.js"></script>
    
  </body>
</article>
</html>
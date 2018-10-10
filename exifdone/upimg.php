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
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .file_drag_div{
            width: 700px;
            height: 250px;
            border: 2px dashed #ccc;
            line-height: 250px;
            text-align: center;
            font-size: 30px;
            vertical-align: center;
        }
        .file_drag_div_over{
            color: #000;
            border-color: #000;
            vertical-align: center;
        }
        .container {
         width: 100vw;
         height: 30vh;
         display: flex;
         flex-direction: row;
         justify-content: center;
         align-items: center
     }
    </style>    
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

                    <!--
                        ".inner" is set up as an inline-block so it automatically expands
                        in both directions to fit whatever's inside it. This means it won't
                        automatically wrap lines, so be sure to use line breaks where
                        appropriate (<br />).
                    -->
                    <div class="inner">

                        <header>
                            <h2>Upload</h2>
                        </header>
                        <p>Aqui se encontra o <strong>Exif reader tool</strong>, um
                            <br />
                            leitor de metadados da imagem
                            <br />
                          
                            <footer>
                                <ul class="buttons vertical">
                                    <li><a href="#abaixo" class="button fit scrolly">Carregar imagens</a></li>
                                </ul>
                            </footer>

                        </div>

                    </section>
                    <Br>
                    <br>
                    <br>
                    <?php
                    if(isset($_SESSION['codusuario'])){
                    ?>
                    <article id="abaixo">
                        <header class="special container">
                            <span class="icon fa-laptop"></span>
                            <h2> Para realizar o <strong>Upload</strong> abra a pasta que você deseja
                            <br />
                            selecione todas as imagens e arraste<br>para o campo abaixo!</h2>
                        </header>
                    
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="file_drag_div">
                                       Arraste suas imagens para esse campo. (JPG)
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="container-login100-form-btn">
                            <div class="container">
                                <a href="carregadas.php" class="button" text-align="center">Carregar</a>
                            </div>
                        </div>
                     </article>
                    <?php
                    }else{
                        ?>
                        <article id="abaixo">
                    <header class="special container">
                        <span class="icon fa-photo"></span>
                        <h2> Realize o <strong>Login ou cadastro</strong> para fazer o upload
                        de imagens<br> Clique em um dos dois botões abaixo:</h2>
                    </header>
                    <div align="center">
                        <a href="../login.php" class="button ">Login</a> 
                        <br>
                        <br>
                        <a href="../cadastro.php" class="button">Cadastrar</a>
                        <br>
                        <br>
                    <div>
                    </article>
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

                </body>
            </article>

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
            </html>

            <script>
                $(document).ready(function() {
                    $('.file_drag_div').on('dragover',function(){
                        $(this).addClass('file_drag_div_over');
                        return false;
                    });
                    $('.file_drag_div').on('dragleave',function(){
                        $(this).removeClass('file_drag_div_over');
                        return false;
                    });
                    $('.file_drag_div').on('drop',function(e){
                        e.preventDefault();
                        $(this).removeClass('file_drag_div_over');
                        var formdata = new FormData();
                        var multiple_files = e.originalEvent.dataTransfer.files;
                        for(var i=0;i<multiple_files.length; i++)
                        {
                            formdata.append('file[]',multiple_files[i]);
                        }
                        $.ajax({
                            url: 'upload.php',
                            method: 'post',
                            data: formdata,
                            contentType: false,
                            cache: false,
                            processData: false,
                            success:function(result){
                                $('#result_images').html(result);

                            }
                        });
                    });
                });
            </script>
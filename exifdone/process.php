<?php   
    include ("../conexao.php");
    error_reporting(0);

   /* <style>
    .ads01{
          float: left;
          margin:5 px;
          padding: 50px;
          padding-right: 25px;
    }
    img{
     max-width: 100px;
     max-height:150px;
     margin: 10px;
    }
    li{
            background-color: black;
            margin:1px;
        }
</style>*/
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link href="../lightbox/dist/css/lightbox.css" rel="stylesheet">
    <style>
    .ads01{
          float: left;
          margin: 100 px;
          position: relative;
          margin-left: 100px;
          padding: 60px;
          padding-right: 25px;

    }
        img{
     max-width: 100px;
     max-height:150px;
     margin: px;
    }
    .ali{
            background-color: black;
            margin:1px;
        }
    </style>
</head>
<body>
    <?php
$dir = 'MyFiles/';
$files = scandir($dir);
//var_dump($_SESSION);
$ext_list = ['jpg', 'gif', 'png'];

foreach($files as $image_file)
{
    $l = strtolower($image_file);
    $parse_file_name = explode(".", $l);
    $file_ext = end($parse_file_name); 
    
    if(in_array($file_ext, $ext_list) )
    {
        $exif_data = exif_read_data($dir.$image_file);
        $exif_data['FNumber'] = (int) $exif_data['FNumber'];
        if($exif_data['FNumber'] <= 10){
                $exif_data['FNumber'] = $exif_data['FNumber']/1;
            }else{
                $exif_data['FNumber'] = $exif_data['FNumber']/10;
        }
        if($exif_data['Make'] == "SONY"){
          $exif_data['FocalLength'] = (int) $exif_data['FocalLength'];
          $exif_data['FocalLength'] = $exif_data['FocalLength']/10;
        }
        $exif_data['FocalLength'] = (int) $exif_data['FocalLength'];
        $inserir = $pdo->prepare("INSERT INTO imagem(nome, camera, exposicao, abertura, iso, lente, coduser) VALUES(:nome, :camera, :exposicao, :abertura, :iso, :lente, :coduser)");
                    $inserir -> execute(array(':nome'=>$exif_data['FileName'],':camera'=>$exif_data['Make'],':exposicao'=>$exif_data['ExposureTime'],':abertura'=>$exif_data['FNumber'],':iso'=>$exif_data['ISOSpeedRatings'],':lente'=>$exif_data['FocalLength'],':coduser'=>$_SESSION['codusuario']));

        $fotos[] = [
            'Nome da Foto'      =>$exif_data['FileName'],
            'Câmera'         =>$exif_data['Make'],
            'Modelo'         =>$exif_data['Model'],
            'Tempo de exposição'  =>$exif_data['ExposureTime'],
            'Abertura'       =>$exif_data['FNumber'],
            'ISO'          =>$exif_data['ISOSpeedRatings'],
            'Distância Focal'   =>$exif_data['FocalLength'],
        ];
        
}
           
}
?>
<section class="wrapper style4 container special">

<?PHP foreach($fotos as $data): 
  //$select = $pdo->prepare("SELECT nome FROM imagem WHERE coduser = :coduser and nome := nome");
  //$select -> execute(array(':coduser'=>$_SESSION['codusuario'],':nome'=>$data['Nome da Foto']));
  
       //if($select['nome'] == $data['Nome da Foto']){
    ?>
   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <div class="ads01">
      </div>
      
         <a href="<?PHP echo $dir . $data['Nome da Foto'];?>" data-lightbox="<?PHP echo $dir . $data['Nome da Foto'];?>"><img src="<?PHP echo $dir . $data['Nome da Foto'];?>" alt="<?PHP echo $data['Nome da Foto'];?>"></a>
       </div>
        <div class="caption" align="right" style="background-color: white; border: 4px solid #73cbbd ;padding: 10px;
            color: black;font-family:'FontAwesome'">
         <br>
                <ul>
                 <li><label>Nome: </label><b><?PHP echo $data['Nome da Foto'];?></b></li>
                  <li><label>Marca: </label><b><?PHP echo $data['Câmera'];?></b></li>
                  <li ><label>Modelo: </label><b><?PHP echo $data['Modelo'];?></b></li>
                  <li><label>Tempo de exposição: </label><b><?PHP echo $data['Tempo de exposição'];?></b></li>
                  <li><label>Abertura: </label><b><?PHP echo $data['Abertura'];?></b></li>
                  <li><label>ISO: </label><b><?PHP echo $data['ISO'];?></b></li>
                  <li><label>Distância Focal: </label><b><?PHP echo $data['Distância Focal'];?>mm</b></li>

              </ul>
          </div>

                 <?php
              // }
             
                   /* $inserir = $pdo->prepare("INSERT INTO imagem(nome, camera, exposicao, abertura, iso, lente, coduser) VALUES(:nome, :camera, :exposicao, :abertura, :iso, :lente, :coduser)");
                    $inserir -> execute(array(':nome'=>$data['Nome da Foto'],':camera'=>$data['Câmera'],':exposicao'=>$data['Tempo de exposição'],':abertura'=>$data['Abertura'],':iso'=>$data['ISO'],':lente'=>$data['Distância Focal'],':coduser'=>$_SESSION['codusuario']));*/
                 ?>   
<?PHP endforeach;?> 
</section>  
<script src="../lightbox/dist/js/lightbox-plus-jquery.js"></script>
</body>
</html>

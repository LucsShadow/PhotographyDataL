<?php 
 $result = ''; 
 if(isset($_FILES['file']['name'][0])) 
 { 
 
 foreach($_FILES['file']['name'] as $keys => $values) 
 { 
 $SourcePath = $_FILES['file']['tmp_name'][$keys]; 
 $TargetPath = 'MyFiles/' . $values; 
 //$TargetPath = 'MyFiles/' . md5($SourcePath) . '.jpg'; 
 if(move_uploaded_file($SourcePath, $TargetPath)) 
 { 
 $result .= '<div class = "col-md-3"><img class="img-responsive" src="MyFiles/'.$values.'" class="img-responsive" /></div>'; 
	echo "<script>alert('Imagens carregadas com sucesso!');</script>";
 } 
 } 
 } 
 echo $result; 
 ?>
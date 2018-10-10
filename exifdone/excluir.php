<?php

include ("../conexao.php");

$consulta = $pdo -> prepare("SELECT nome FROM imagem");
$consulta->execute();

while ($nome = $consulta -> fetch(PDO::FETCH_ASSOC)) {
    $arq = "MyFiles/".$nome['nome'];
	$path = "MyFiles/";
	$diretorio = dir($path);
	while($arquivo = $diretorio -> read()){
	if($path.$arquivo == $arq){
		unlink($arq);
	}
	}	
}
echo ("Deletado com sucesso!");
header('Location: upimg.php');
?>
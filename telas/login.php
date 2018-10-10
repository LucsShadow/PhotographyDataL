<?php

include ("banco/conexao.php");

if(isset($_POST['email']) && strlen($_POST['email']) > 0){

	if(!isset($_SESSION))
		session_start();

	$_SESSION['email'] = $mysqli -> escape_string(($_POST['email']));
	$_SESSION['senha'] = $_POST['senha'];

	$sql_code = "SELECT senha, email, codusuario FROM usuario WHERE email = '$_SESSION[email]'";
	$sql_query = $mysqli -> query($sql_code) or die ($mysqli -> error);
	$dado = $sql_query -> fetch_assoc();
	$total = $sql_query -> num_rows;

	if($total == 0){
		$erro[] = "Este email não pertence a nenhum usuário";
	}else{
		if($dado['senha'] == $_SESSION['senha']){
			$_SESSION['usuario'] = $dado['codusuario'];
			
	}else{
		$erro[] = "Senha incorreta.";
	}
}
if(count($erro) == 0 || !isset($erro)){
	echo "<script>alert('Login efetuado com sucesso'); location.href='sucesso.php';</script>";
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		if(count($erro) > 0)
			foreach ($erro as $msg) {
				echo "<p>$msg</p>";
			}
	?>
	<form method="POST" action="">
		<p>E-mail:<input type="text" name="email" placeholder="E-mail" value="<?php echo $_SESSION['email'];?>"></p>
		<p>Senha:<input type="password" name="senha"></p>
		<p><a href=""> Esqueceu sua senha?</a></p>
		<p><input type="submit" value="Entrar"></p>
</body>
</html>
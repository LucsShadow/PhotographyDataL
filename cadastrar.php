<?php

include 'conexao.php';

$nome = filter_var ($_POST ['nome'], FILTER_SANITIZE_STRING);
$email = filter_var ($_POST ['email'], FILTER_SANITIZE_STRING);
$senha = filter_var ($_POST ['senha'], FILTER_SANITIZE_STRING);
$resenha = filter_var ($_POST ['resenha'], FILTER_SANITIZE_STRING);

$consulta = $pdo -> prepare("SELECT * FROM usuario WHERE email = :email");
$consulta -> execute(array(':email' =>$email));
$res = $consulta->rowCount();

//var_dump($res);
if($res <= 0){
	if($senha == $resenha){
		$encryptedPass = password_hash ($senha, PASSWORD_DEFAULT);
		$inserir = $pdo->prepare("INSERT INTO usuario(email, nome, senha) VALUES(:email, :nome, :senha)");
		$inserir -> execute(array(':email'=>$email,':nome'=>$nome,':senha'=>$encryptedPass));
		
		$_SESSION['codusuario'] = $pdo -> lastInsertID();
		$_SESSION['nome'] = $nome;
		$_SESSION['email'] = $email;
		header('Location: index.php');
		}
		else{
			echo'<script> alert("Senha incorreta!")</script>';
			echo '<script> window.location="cadastro.php"</script>';
		}
}
else{
	echo'<script> alert("Email incorreto!")</script>';
	echo '<script> window.location="cadastro.php"</script>';
}

?>

<?php
session_start();
if(!isset($_SESSION['carrinho'])){
	$_SESSION['carrinho'] = [];
}
$pdo = new PDO("mysql: host=localhost; dbname=photographydata","root", "");
?>
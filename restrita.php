<?php
session_start();
if (isset($_SESSION["ra"]) && isset($_SESSION["senha"])){
	echo "Bem vindo a página restrita!!!<br>";
	echo "Seu RA é ".$_SESSION["ra"]."<br><br>";
	echo "<a href='logout.php'>Sair</a>";
}else{
	echo "Sessão expirada!<br>";
	echo "<a href='index.php'>Fazer login</a>";
}
?>
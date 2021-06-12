<?php
	$ra   = $_POST["ra"];
	$senha = $_POST["senha"];
	if ($ra=="123" && $senha=="uninove"){	
		session_start();
		$_SESSION["ra"] = $ra;
		$_SESSION["senha"] = $senha;
		setcookie("ra",$ra,time()+3600);
		echo "<script>location.href='restrita.php';</script>";
	}else{
		echo "<script>
			alert('Usuário ou senha inválidos!');
			location.href='index.php';
		</script>";
	}
?>
<?php
$ra = "";
if (isset($_COOKIE)){
	$ra = $_COOKIE["ra"];
}
?>

<html>
<head></head>
<body>
  <form action="validar.php" method="post">
	RA...: <input type="text" name="ra" value="<?=$ra;?>"/><br>
	SENHA: <input type="password" name="senha"/><br>
	<input type="submit" value="Entrar"/>
  </form>
</body>
</html>
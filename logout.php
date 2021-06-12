<?php

session_start();
unset($_SESSION["ra"]);
unset($_SESSION["senha"]);
//session_unset();// apaga todas de um vez só
session_destroy();

header("location:index.php");

?>

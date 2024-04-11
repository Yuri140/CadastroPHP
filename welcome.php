<?php
session_start();

if (!isset($_SESSION["username"])) {
  header('location: login.php');
}
?>


<h1>Bem-vindo ao sistema!!!</h1>
<a href="logout.php">Sair</a>
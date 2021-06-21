<?php
session_start();
include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuário'];?></h2>
<h2>Clique aqui para ir até a página <a href="index.html">Razor</a></h2>
<h2><a href="logout.php">Sair</a></h2>
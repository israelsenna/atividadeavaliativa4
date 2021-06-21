<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'israel');


$conexao = mysqli_connect('localhost:3307', USUARIO, SENHA, DB) or die ('Não foi possível conectar');

?>
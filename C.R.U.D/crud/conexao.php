<?php
define('HOST','');
define('USUARIO','');
define('SENHA','');
define('DB','');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('não foi possivel conectar');
?>
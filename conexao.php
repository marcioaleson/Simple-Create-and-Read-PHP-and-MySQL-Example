<?php
$servidor = "localhost:3303"; //127.0.0.1
$usuario = "root";
$senha = "";
$banco = "loja";

$link = mysql_connect($servidor,$usuario,$senha);//Conecta com o servidor.
$select = mysql_select_db($banco);
mysql_query("set names 'utf8'");
?>

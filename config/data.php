<?php
include('config.php');
function connect()
{
try
{
//connection
$connect = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PW, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
return $connect ;
}
catch(PDOExeption $e)
{
	echo"Erreur de connection". $e->getMessage();
	return false;
}
}
?>
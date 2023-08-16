<?php 
$host= getenv("MYSQL_SERVICE_HOST");
$port= getenv("MYSQL_SERVICE_PORT");
$database= getenv("MYSQL_DATABASE");
$username= getenv("MYSQL_USER");
$password= getenv("MYSQL_PASSWORD");

try {
	$bd = new PDO (
		'mysql:host='.$host.';dbname='.$database,
		$username,
		$password,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>


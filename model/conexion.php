<?php 
$contrasena = "root";
$usuario = "root";
$nombre_bd = "distribuidas";

try {
	$bd = new PDO (
		'mysql:host=34.121.105.224;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>


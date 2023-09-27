<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$nombre_base_de_datos = "login_register_db";

$conexion = mysqli_connect($host, $usuario, $contrasena, $nombre_base_de_datos);

if (!$conexion) {
  die("Error de conexión: " . mysqli_connect_error());
}
?>
 

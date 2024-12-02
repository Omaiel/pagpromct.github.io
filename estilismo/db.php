<?php
$conexion = mysqli_connect("localhost", "root", "", "gueros");
if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);
}

?>

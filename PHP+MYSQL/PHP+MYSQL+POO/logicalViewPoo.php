<?php
include 'Conexion_bd_poo.php';

$sql="SELECT * FROM USER";
$resultado=$conexion->query($sql);

$conexion->close();
?>
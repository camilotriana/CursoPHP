<?php
include 'Conexion_bd.php';

$consulta = "SELECT * FROM user";
$resultado = mysqli_query($conexion,$consulta);

mysqli_close($conexion);

?>
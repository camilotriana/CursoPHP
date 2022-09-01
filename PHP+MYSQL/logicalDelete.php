<?php 
include 'Conexion_bd.php';

$id = $_GET["id"];


$consulta = "DELETE FROM user WHERE user_id='$id'";
$resultado = mysqli_query($conexion,$consulta);

header("Location: view.php");

mysqli_close($conexion);
?>
<?php 
include 'Conexion_bd.php';

$id = $_GET["id_u"];
$name = $_GET["name"];
$email = $_GET["email"];

$consulta = "UPDATE user SET name='$name',email='$email' WHERE user_id='$id'";
$resultado = mysqli_query($conexion,$consulta);

header("Location: view.php");

mysqli_close($conexion);
?>
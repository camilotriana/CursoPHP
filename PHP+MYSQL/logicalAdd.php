<?php
include 'Conexion_bd.php';

$id = $_GET["id"];
$name = $_GET["name"];
$email = $_GET["email"];

$consulta = "INSERT INTO user VALUES('$id','$name','$email')";
$resultado = mysqli_query($conexion,$consulta);

header("Location: view.php");

mysqli_close($conexion);
?>
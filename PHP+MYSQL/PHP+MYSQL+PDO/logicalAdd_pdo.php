<?php
include 'Conexion_bd_pdo.php';

$id =  $_GET["id"];
$nombre =  $_GET["name"];
$correo =  $_GET["email"];

try {
    $consulta = "INSERT INTO user VALUES(?,?,?)"; //Consulta sql
    $resultado = $conexion->prepare($consulta); //Preparamos la consulta
    $resultado->execute(array($id,$nombre,$correo)); //Ejecutamos la consulta y pasamos los parametros de busqueda
} catch (\Throwable $th) {
    die($th->getMessage());
} 

header("Location: view_pdo.php");
$resultado->closeCursor();
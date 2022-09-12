<?php 
include 'Conexion_bd_pdo.php';

$id = $_GET["id"];

try {
    $consulta = "DELETE FROM user WHERE user_id=?"; //Consulta sql
    $resultado = $conexion->prepare($consulta); //Preparamos la consulta
    $resultado->execute(array($id)); //Ejecutamos la consulta y pasamos los parametros para eliminar
} catch (\Throwable $th) {
    die($th->getMessage());
}

header("Location: view_pdo.php");
$resultado->closeCursor();
?>
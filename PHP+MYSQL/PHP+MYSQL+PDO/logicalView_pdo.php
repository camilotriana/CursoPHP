<?php
include 'Conexion_bd_pdo.php';


try {
    $consulta = "SELECT * FROM user"; //Consulta sql
    $resultado = $conexion->prepare($consulta); //Preparamos la consulta
    $resultado->execute(); //Ejecutamos la consulta y pasamos los parametros de busqueda
} catch (\Throwable $th) {
    die($th->getMessage());
} 
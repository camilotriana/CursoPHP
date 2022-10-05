<?php 

try {
    $conexion = new PDO("mysql:host=localhost; dbname=curso_php","camilo","camilo12345");
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conexion->exec("SET CHARACTER SET utf8");
    
} catch (\Throwable $th) {
    die("Error:  ".$th->getMessage());
}

?>
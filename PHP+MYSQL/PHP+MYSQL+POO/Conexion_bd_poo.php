<?php

try {
    $conexion = new mysqli("localhost","camilo","camilo12345","curso_php");
    $conexion->set_charset("utf8");
} catch (\Throwable $th) {
    echo "!!!!!!ERROR FALLO LA CONEXION!!!!!!!!";
    echo "<br><br> $th";
    exit();
}

?>
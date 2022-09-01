<?php

$db_host = "localhost";
$db_name = "curso_php";
$db_user = "camilo";
$db_password = "camilo12345";

try {
    $conexion=@mysqli_connect($db_host,$db_user,$db_password,$db_name);
} catch (\Throwable $th) {
    echo "ERROR AL CONECTAR: ".mysqli_connect_errno();
    exit();
}

?>
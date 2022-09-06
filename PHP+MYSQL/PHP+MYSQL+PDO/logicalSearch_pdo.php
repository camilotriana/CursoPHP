<?php
include 'Conexion_bd_pdo.php';

$nombre =  $_GET["buscar"];

try {
    $consulta = "SELECT * FROM user WHERE name= ?"; //Consulta sql
    $resultado = $conexion->prepare($consulta); //Preparamos la consulta
    $resultado->execute(array($nombre)); //Ejecutamos la consulta y pasamos los parametros de busqueda
} catch (\Throwable $th) {
    die($th->getMessage());
} 

    echo
'<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <br>';
    echo
    '<table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">USER ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                </tr>
            </thead>
            <tbody>';
    while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>
                <th scope="row">' . $fila['user_id'] . '</th>
                <td>' . $fila['name'] . '</td>
                <td>' . $fila['email'] . '</td>
                </tr>';
    }
    echo '</tbody>
        </table>';
echo
'<div class="row justify-content-md-center">
        <a class="d-grid gap-2 col-sm-3" href="search_pdo.php"><input type="button" class="btn btn-primary" value="Volver Atras"></a>
        <a class="d-grid gap-2 col-sm-3" href="../index.php"><input type="button" class="btn btn-primary" value="Pagina Principal"></a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>';

$resultado->closeCursor();

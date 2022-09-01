<?php
include 'Conexion_bd.php';

$nombre =  $_GET["buscar"];

//CONSULTA PREPARADA PARA EVITAR INYECCION SQL
$consulta = "SELECT * FROM user WHERE name= ?";
$resultado = mysqli_prepare($conexion, $consulta); //Se prepara la consulta
$validacion = mysqli_stmt_bind_param($resultado, "s", $nombre); //Se pasan los parametros para la consulta
$validacion = mysqli_stmt_execute($resultado); //Se executa la consulta

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
if ($validacion==true) {
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
    $validacion = mysqli_stmt_bind_result($resultado, $id, $name, $email);
    while ((mysqli_stmt_fetch($resultado))) {
        echo '<tr>
                <th scope="row">' . $id . '</th>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                </tr>';
    }
    echo '</tbody>
        </table>';
} else {
    echo '<div class="card">
           <div class="card-header">
               <h3 style="color:#FF0000">!!!! ERROR !!!!</h3>
           </div>
           <div class="card-body">
                   <h3>No se encontro ningun registro con esta caracteristica</h3>
           </div>
       </div><br>';
}
echo
'<div class="row justify-content-md-center">
        <a class="d-grid gap-2 col-sm-3" href="search.php"><input type="button" class="btn btn-primary" value="Volver Atras"></a>
        <a class="d-grid gap-2 col-sm-3" href="index.php"><input type="button" class="btn btn-primary" value="Pagina Principal"></a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>';
mysqli_close($conexion);

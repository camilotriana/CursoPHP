<?php 
include 'Conexion_bd.php';

$id = $_GET["id"];


$consulta = "SELECT * FROM user WHERE user_id='$id'";
$resultado = mysqli_query($conexion,$consulta);
$fila = mysqli_fetch_assoc($resultado);

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" </head>
</head>

<body>
    <div class="container col-6">
        <br>
        <div class="card">
            <div class="card-header">
                <h3>EDITAR REGISTRO</h3>
            </div>
            <div class="card-body">
                <form action="saveEdit.php" method="get">
                    <div class="input-group mb-2">
                        <span class="input-group-text col-2" id="basic-addon1">User Id:</span>
                        <input type="number" name="id_u" class="form-control"  value="<?php echo $fila['user_id']?>" aria-label="Userid" aria-describedby="basic-addon1" readonly>
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text col-2" id="basic-addon1">Name:</span>
                        <input type="text" name="name" class="form-control"  value="<?php echo $fila['name'] ?>" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text col-2" id="basic-addon1">Email:</span>
                        <input type="email" name="email" class="form-control"  value="<?php echo $fila['email'] ?>" aria-label="Useremail" aria-describedby="basic-addon1">
                    </div>
                    <input class="btn btn-primary d-grid gap-2 col-3 mx-auto" type="submit" name="enviar" value="Aceptar">
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
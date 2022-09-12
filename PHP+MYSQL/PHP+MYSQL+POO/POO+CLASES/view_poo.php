<?php
include "logicalView_poo.php";
$logical = new ViewUser();
$arrayUser = $logical->getUser(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW PHP POO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">USER ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">OPCION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($arrayUser as $fila) { ?>
                    <!-- buscar por nombre de campo -->
                    <tr>
                        <th scope="row"><?php echo $fila['user_id'] ?></th>
                        <td><?php echo $fila['name'] ?></td>
                        <td><?php echo $fila['email'] ?></td>
                        <td>
                            <div class="row">
                                <a class="col-2" href=""><input class="btn btn-primary" type="submit" value="Editar"></a>
                                <a class="col-2" href=""><input class="btn btn-danger" type="submit" value="Eliminar"></a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a class="d-grid gap-2 col-3 mx-auto" href="../../index.php"><input type="button" class="btn btn-primary" value="Pagina Principal"></a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
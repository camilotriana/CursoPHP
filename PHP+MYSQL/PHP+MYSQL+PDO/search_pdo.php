<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEARCH PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container col-6">
        <br>
        <div class="card">
            <div class="card-header">
                <h3>BUSCAR REGISTROS</h3>
            </div>
            <div class="card-body">
                <form action="logicalSearch_pdo.php" method="get">
                    <div class="input-group mb-2">
                        <span class="input-group-text" id="basic-addon1">Buscar:</span>
                        <input type="text" name="buscar" class="form-control" placeholder="Ingrese el nombre" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <input class="btn btn-primary d-grid gap-2 col-3 mx-auto" type="submit" name="enviar" value="Aceptar">
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
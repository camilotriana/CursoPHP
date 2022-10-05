<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" </head>
</head>

<body>
    <div class="container col-5">
        <br>
        <div class="card">
            <div class="card-header">
                <h3>LOGIN</h3>
            </div>
            <div class="card-body">
                <form action="logicalLogin.php" method="POST">
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form2Example1">User</label>
                        <input id="form2Example1" class="form-control" name="user" placeholder="Ingrese el usuario"/>
                    </div>

                    <div class="form-outline mb-3">
                        <label class="form-label" for="form2Example2">Password</label>
                        <input type="password" id="form2Example2" class="form-control" name="password" placeholder="Ingrese la contraseña"/>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <input class="btn btn-primary" type="submit" name="enviar" value="INICIAR SESION">
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
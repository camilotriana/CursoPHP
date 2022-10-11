<?php
include 'conexionLogin.php';

$user = htmlentities(addslashes($_POST["user"])); //Funcion para evitar la inyeccion sql
$password = htmlentities(addslashes($_POST["password"])); //Funcion para evitar la inyeccion sql

try {
    $sql = "SELECT * FROM login WHERE user=? AND password=?";
    $resultado = $conexion->prepare($sql);
    $resultado->execute(array($user,$password));

    $validacion = $resultado->rowCount();
    if ($validacion!=0) {

        session_start(); //Iniciamos una session
        $_SESSION["usuarioRegistrado"]=$user; //Almacenar en la variable global el usuario, la variable global se llama usuarioRegistrado
        header("location:dashBoard.php");

    }else{
        header("location:login.php");
    }
} catch (\Throwable $th) {
    die($th->getMessage());
}

?>
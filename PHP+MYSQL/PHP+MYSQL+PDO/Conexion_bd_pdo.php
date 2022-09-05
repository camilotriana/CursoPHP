<?php

try {
    $conexion = new PDO('mysql:host=localhost; dbname=curso_php','camilo','camilo1345');
    echo "CONEXION EXITOSA";
} catch (\Throwable $th) {
    echo "!!!!! ERROR, NO SE HA PODIDO CONECTAR A LA BASE DE DATOS!!!!<br><br>";
    //die($th->getMessage()); //Termina el proceso, se sale del script
    echo $th->getMessage();
} finally{
    echo "<br><br>LA INSTRUCCION FINALLY SE EJECUTA SIEMPRE, TANTO PARA TRY COMO PARA CATCH";
}
?>
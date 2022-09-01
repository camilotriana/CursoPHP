<?php
//----------------Dos comandos para mostrar por pantalla (Print y Echo)-------------
print 'BIENVENIDO A PHP USANDO PRINT';
echo nl2br("\n"); //Saltar linea en php
echo 'BIENVENIDO A PHP',' USANDO ECHO';
echo nl2br("\n\n");
//phpinfo(); obtener la version de php

//-------------------VARIABLES------------------
$nombre = 'CAMILO ANDRES TRIANA MARQUEZ';
$numero = 24;
$decimal = number_format(1.80,2);

//----------Dos formas diferentes de concatenar mensajes-------------------------
echo nl2br("Nombre: $nombre \nEdad: $numero \nEstatura: $decimal");
echo nl2br("\n\nNombre: ".$nombre. "\nEdad: ".$numero. "\nEstatura: ".$decimal);
echo nl2br("\n\n");

//-------------DEFINIR UNA CONSTANTE----------------
define('curso','php');
echo curso;
echo nl2br("\n\n");

//-----------------CONDICIONALES--------------------
$number_one = 34;
$number_two = 13;

if ($number_one<$number_two) {
    echo "$number_one < $number_two";
}
elseif ($number_one==$number_two) {
    echo "$number_one = $number_two";
}
else {
    echo "$number_one > $number_two";
}

//---------------SWITCH CASE----------------------
echo nl2br("\n\n");
$curso = "php";
switch ($curso) {
    case 'php':
        echo "LUNES Y MARTES";
        break;
    case 'java':
        echo "MIERCOLES Y JUEVES";
        break;
    case 'pyhon':
        echo "VIERNES";
        break;
    default:
        echo "ESTA MATERIA NO ESTA INSCRITA";
        break;
}

//---------------------CICLOS-----------------------------
echo nl2br("\n\nFACTORIAL CON WHILE\n\n");
$factorial = 8;
$resultado = $factorial;
while ($factorial>1) {
    $resultado *= $factorial-1;
    $factorial -= 1;
}
echo $resultado;

echo nl2br("\n\nFACTORIAL CON DO WHILE\n\n");
$factorial = 8;
$resultado = $factorial;
do {
    $resultado *= $factorial-1;
    $factorial -= 1;
} while ($factorial>1);
echo $resultado;

echo nl2br("\n\nFACTORIAL CON FOR\n\n");
$factorial = 8;
$resultado = 1;
for ($i=1; $i <=$factorial ; $i++) { 
    $resultado *= $i; 
}
echo $resultado;

//-------------------------ARRAY-----------------------
echo nl2br("\n\n");
$dias = array('LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO');
$estudiante = array('Nombre' => 'Camilo','Apellido' => 'Triana','Edad' => 23 ); //array asociativo 
var_dump($dias);
echo nl2br("\n\n");
print_r($dias);
echo nl2br("\n\n");
print_r($estudiante);
echo nl2br("\n");
echo "Nombre: ".$estudiante['Nombre'];
?>



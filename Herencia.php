<?php

class Vehiculo{
//ATRIBUTOS
    public $motor = false;
    public $marca;
    public $color;
    private $mensaje;

//METODOS
    public function estado(){
        $mensaje = $this->motor ? "El motor esta encendio" : "El motor esta apagado";
        echo $mensaje;
    }

    public function encender(){
        if ($this->motor) {
            $mensaje =   "Cuidado, el motor ya se encuentra encendido y puede dañarlo";
        }
        else{
            $mensaje = "El motor fue encendido con exito";
            $this->motor=true;
        }
        echo $mensaje;
    }

    public function apagar(){
        if ($this->motor) {
            $mensaje =   "El motor fue apagado con exito";
            $this->motor=false;
        }
        else{
            $mensaje = "Cuidado, el motor ya se encuentra apagado y puede dañarlo";
        }
        echo $mensaje;
    }
}

$vehiculo1 = new Vehiculo();
$vehiculo1->estado();
echo "<br>";
$vehiculo1->encender();
echo "<br>";
$vehiculo1->estado();
echo "<br>";
$vehiculo1->encender();
echo "<br>";
$vehiculo1->estado();
echo "<br><br><br>";
$vehiculo1->apagar();
echo "<br>";
$vehiculo1->estado();
echo "<br>";
$vehiculo1->apagar();
echo "<br>";
$vehiculo1->estado();
echo "<br><br><br>";

class Moto extends Vehiculo{
}

$moto1 = new Moto();
$moto1->estado();
echo "<br>";
$moto1->encender();
echo "<br>";
$moto1->estado();
echo "<br>";
$moto1->apagar();
echo "<br>";
$moto1->estado();

?>
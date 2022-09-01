<?php
class Facebook{
    public $name;
    public $age;
    private $password;

/*
En php el constructor es una funcion con el mismo nombre de la clase en versiones anteriores de php
En versiones recientes se usa la palabra reservada construct
El constructor se encarga de darle un estado inicial al objeto
this -> hace referencia a la clase Coche (esta clase)
-> la flecha me referencia a un metodo o atributo
*/

    public function __construct($name,$age,$password){
        $this->name=$name;
        $this->age=$age;
        $this->password=$password;        
    }

    public function viewInformation(){
        echo "Name: ".$this->name."<br>";
        echo "Age: ".$this->age."<br>";
        echo "Password: ".$this->password."<br>";
    }

    public function __destruct(){
        
    }
}
$usuario = new Facebook('Camilo',24,'Camilo@12345');
$usuario2 = new Facebook('Andres',25,'Andres@12345');
$usuario3 = new Facebook('Carlos',30,'Carlos1992');

$usuario->viewInformation();
echo "<br>";
$usuario2->viewInformation();
echo "<br>";
echo $usuario3->name;
echo "<br>";
$usuario3->viewInformation();
/*
Podemos acceder al nombres por que es de tipo publico pero a la contraseña no se puede acceder por fuera de la clase
echo $usuario->name."<br>";
echo $usuario->password."<br>";
*/


?>
<?php
require "conexion_poo.php";

class ViewUser extends Conexion{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUser(){
        $consulta = "SELECT * FROM user";
        $resultado = $this->conexion_db->query($consulta);
        $list = $resultado->fetch_all(MYSQLI_ASSOC);

        return $list;
    }
}
?>
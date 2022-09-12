<?php
require "config.php";

class Conexion{

    protected $conexion_db;

    public function __construct()
    {
        try {
            $this->conexion_db=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
            $this->conexion_db->set_charset(DB_CHARSET);
        } catch (\Throwable $th) {
            die($th->getMessage());
        }
    }
}

?>
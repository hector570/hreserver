<?php
require_once 'bd_conexion.php';

class Mesa
{

    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

        if($this->conn->connect_error){
            echo $error -> $conn->connect_error;
        }
    }

    public function getMesas(){
        $sql = "SELECT * FROM mesas";
        return $this->conn->query($sql);
    }

}



?>
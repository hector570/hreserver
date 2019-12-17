<?php
require_once 'bd_conexion.php';

class Restaurante
{

    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

        if(mysqli_connect_errno()){
            echo "Error: No se pudo conectar a la base de datos.";
            exit;
        }
    }

    public function getRestaurantes(){
        $sql = "SELECT * FROM restaurantes";
        $result = $this->conn->query($sql);

        if($result){
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $list[] = $row;
                }
                return json_encode($list);
            }
        }else {
            return 0;
        }
    }

    public function getHorasRestaurante($id){
        $sql = "SELECT * FROM horas WHERE id_rest=$id";

        $result = $this->conn->query($sql);

        if($result){
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $list[] = $row;
                }
                return json_encode($list);
            }
        }
    }

}



?>
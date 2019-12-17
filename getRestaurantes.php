<?php
require_once 'modelo/restaurante.php';

$rest = new Restaurante();

$result= $rest->getRestaurantes();

echo $result;

?>
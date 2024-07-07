<?php 
include "conexion.php";

$datos = json_decode(file_get_contents("php://input"));


$nombre = $datos->usuario;

$sql = "SELECT * FROM usuario WHERE nombre = '$nombre'";
$res = $conec->query($sql);

if($res->num_rows == 0 ){
    echo "nombre de usuario valido";
}else{
    echo "Error: existe un usuario con el mismo nombre";
}
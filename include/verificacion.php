<?php 
include "conexiion.php";

$datos = json_decode(file_get_contents("php://input"));


$usuario_C = $datos->usuario_C;

$sql = "SELECT * FROM reservas WHERE usuario_C = '$usuario_C'";
$res = $conec->query($sql);

if($res->num_rows == 0 ){
    echo "nombre de usuario valido";
}else{
    echo "Error: existe un usuario con el mismo nombre";
}
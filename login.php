<?php
include "conexion.php";

$usuario_C = $_REQUEST['usuario_C'];
$contra = $_REQUEST['contrasena'];

$SQL = "SELECT * FROM reservas 
            WHERE usuario_C = '$usuario_C'";

$res = $conec->query($SQL);

$datos = $res->fetch_assoc();

if( password_verify( $contra , $datos['contrasena'] ) ){
    $_SESSION['usuario_C'] = $datos; 
}else{
    header('location:logeo.php');
}
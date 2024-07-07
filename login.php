<?php
include "conexion.php";

$nombre = $_REQUEST['nombre'];
$contrasena = $_REQUEST['contrasena'];

$SQL = "SELECT * FROM usuario 
            WHERE nombre = '$nombre'";

$res = $conec->query($SQL);

$datos = $res->fetch_assoc();

if( password_verify( $contrasena , $datos['contrasena'] ) ){
    $_SESSION['usuario'] = $datos; 
}else{
    header('location:logeo.php');
}
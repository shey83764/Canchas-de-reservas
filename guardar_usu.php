<?php
include 'conexiion.php';
$nombre=$_REQUEST['nombre'];
$sena=$_REQUEST['sena'];
$canchas=$_REQUEST['canchas'];
$tele=$_REQUEST['telefono'];
$fecha=$_REQUEST['fecha'];
$hora=$_REQUEST['hora'];
$SQL="SELECT *FROM reservas WHERE fecha='$fecha' AND hora='$hora'";
$res=$conec->query($SQL);
if ($res->num_rows>0) {
    
}else{
    
}
<?php
include "conexiion.php";
if (isset($_SESSION['nombre'])) {
    $nom=$_SESSION['nombre'];
    $can=$_REQUEST['canchas'];
    $sen=$_REQUEST['sena'];
    $tele=$_REQUEST['telefono'];
    $fecha=$_REQUEST['fecha'];
    $hora=$_REQUEST['hora']; 
    $sqll="SELECT * FROM reservas 
            WHERE fecha = '$fecha' AND hora = '$hora' ";
    $res=$conec->query($sqll);
    if ($res->num_rows>0) {
        echo "<h1>ocupado</h1>";
    }else{
    $sql="INSERT INTO reservas (nombre,canchas,sena,telefono,fecha,hora)VALUES ('$nom','$can','$sen',$tele,'$fecha','$hora')";
    echo "<h1>El turno fue guardado exitosamente</h1>"; 
    echo"<a href='form11.php'> volver al inicio</a>"; 
    $conec->query("$sqll");}
} else {
    //Redirigir al usuario
}
 header('location/..form11.php');
?> 
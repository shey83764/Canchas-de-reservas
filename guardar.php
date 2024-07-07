<?php
//conexion a base de datos
include "conexion.php";

//recibe los datos del usuario
$nombre = $_REQUEST['nombre'];
//recibe la clave y la encripta. 
$clave = password_hash( $_REQUEST['contrasena'] , PASSWORD_BCRYPT);

// selecciona al campo que nosotros estamos llamando
$sql = "SELECT * FROM usuario WHERE nombre = '$nombre'";
$res = $conec->query($sql);
//verifica si el nombre de usuario fue creado o no
if($res->num_rows == 0 ){
    $sql = "INSERT INTO usuario(nombre,contrasena) 
            VALUES ('$nombre','$contrasena')";

    $con->query($sql);
}else{
    echo "Error: existe un usuario con el mismo nombre";
}
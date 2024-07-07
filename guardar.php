<?php
//conexion a base de datos
include "conexion.php";

//recibe los datos del usuario
$usuario_C= $_REQUEST['usuario_C'];
//recibe la clave y la encripta. 
$contra = password_hash( $_REQUEST['contrasena'] , PASSWORD_BCRYPT);

// selecciona al campo que nosotros estamos llamando
$sql = "SELECT * FROM reservas WHERE usuario_C = '$usuario_C'";
$res = $conec->query($sql);
//verifica si el nombre de usuario fue creado o no
if($res->num_rows == 0 ){
    $sql = "INSERT INTO usuario_C(nombre,contrasena) 
            VALUES ('$usuario_C','$contra')";

    $conec->query($sql);
}else{
    echo "Error: existe un usuario con el mismo nombre";
}
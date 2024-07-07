<?php
include "conexiion.php";
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

$SQL = "SELECT * FROM usuario WHERE nombre = '$nombre'";
$res = $conec->query($SQL);

if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    if ($clave == $row['clave']) {
        session_start();
        $_SESSION['usuario'] = $nombre;
        header('Location: ../form11.php');
        exit();
    } else {
        echo "Contraseña incorrecta";
        exit();
    }
} else {
    echo "nombre incorrecta";
    exit();
}
?>
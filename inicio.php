<?php
session_start();

if (!isset( $_SESSION['usuario'] )){
    header('location:logeo.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola bienvenido , Esto solo lo vas a ver si estas logeado</h1>
</body>
</html>
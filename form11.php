<?php
session_start();

if (!isset( $_SESSION['usuario'] )){
    header('location:logueo.php');
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
<h1>Reserva tu turno</h1>
<form action="guardar_datos" method="post">
    <label for="nombre"> Nombre</label>
    <input type="text" name="nombre">
<br>
    <label for="canchas"> Cancha que va a usar</label>
    <input type="text" name="canchas">
<br>
    <label for="fecha"> Fecha</label>
    <input type="date" name="fecha" id='fecha'>
<br>
    <label for="hora">Hora</label>
    <select name="hora" id="hora"></select>
<br> 
    

    <label for="telefono">telefono</label>
    <input type="tel" name="telefono">
<br>
    <label for="sena">Importe de la seña</label>
    <input type="text" name="sena">

    <input type="submit" value="Reservar">

</form>
<br>

<a href="eliminarr.php">Eliminar turno</a> 
<br>
<a href="modificaar.php">Modificar turno</a>

<h1 id="h1"></h1>
<script src="index.js"></script>
</body>
</html>
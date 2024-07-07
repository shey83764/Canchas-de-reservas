<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1>Registro</h1>
    <form action="guardar.php" method="post" class="bg-secondary p-3">
        <label for="nombre" class="form-label" >Nombre de usuario</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
        <label id="msj"></label><br>
        <label for="clave" class="form-label">Contraseña</label>
        <input type="password" name="contrasena" id="contrasena" class="form-control">

        <input type="submit" value="Registrar" class="col-5">
    </form>

    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
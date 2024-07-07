<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       telefono<input type="tel" name="telefono">
        <input type="submit" value="eliminar">
    </form>

        <?php
        if (isset($_REQUEST["telefono"])) {
            include "conexiion.php";
            $telefono=$_REQUEST["telefono"];
            $SQL="SELECT * FROM reservas WHERE telefono=$telefono LIMIT 1";
            $res=$conec->query($SQL);
            if ($res->num_rows==0){
                echo"no se encuentra este numero disponible";
            }else {
                $registro=$res->fetch_assoc();
                echo"reservas <hr> <br>
                fecha=$registro[fecha] <br>
                hora=$registro[hora]<br>
                Estas seguro? $registro[nombre]
                <a href='id=$registro[id]'>SI</a>
                <a href= 'form11.php'>NO</a>";
            }

        }
        if (isset($_REQUEST["id"])) {
            include "conexiion.php";
            $id=$_REQUEST["id"];
            $SQL="DELETE FROM reservas WHERE id=$id";
            $conex->query("$SQL");
            header('location:form11.php');
        }
        ?>
</body>
</html>
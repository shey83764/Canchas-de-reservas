<?php
include "conexiion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['telefono'])) {
    $telefono = $_POST['telefono'];
    $sql = "SELECT id, nombre, canchas, telefono, fecha, hora,sena FROM reservas WHERE telefono='$telefono'";
    $result = $conec->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>Modificar turnos</h1>";
        echo "<table border='1'>
            <tr>
                <th>nombre</th>
                <th>canchas</th>
                <th>teléfono</th>
                <th>fecha</th>
                <th>hora</th>
                <th>seña</th>
            </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<form method='post' action='" . $_SERVER['PHP_SELF'] . "'>";
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
            echo "<td><input type='text' name='nombre' value='" . $row['nombre'] . "'></td>";
            echo "<td><input type='text' name='canchas' value='" . $row['canchas'] . "'></td>";
            echo "<td><input type='text' name='telefono' value='" . $row['telefono'] . "'></td>";
            echo "<td><input type='date' name='fecha' value='" . $row['fecha'] . "'></td>";
            echo "<td><select name='hora'>";
            for ($i = 9; $i <= 20; $i++) {
                $selected = ($i == (int)explode(':', $row['hora'])[0]) ? 'selected' : '';
                echo "<option value='$i:00' $selected>$i:00</option>";
            }
            echo "<td><input type='text' name='sena' value='" . $row['sena'] . "'></td>";
            echo "</select></td>";
            echo "<td><input type='submit' value='Modificar'></td>";
            echo "</form>";
            echo "</tr>";
        }

        echo "</table>";
    } else {

        echo "No se encontraron resultados para el número de teléfono proporcionado. <br><br>";

    }
} else {

    echo "<h1>Modifica</h1>";
    echo "<form method='post' action=''>
            <label>Número de Contacto:</label>
            <input type='text' name='telefono'>
            <input type='submit' value='Buscar'>
        </form>";

}

echo "<a href='form11.php'>Volver al inicio</a>";
?>
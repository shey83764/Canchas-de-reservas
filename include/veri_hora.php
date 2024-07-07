<?php
$a=json_decode(file_get_contents("php://input"),true);
echo json_encode("Esta todo bien $a[fecha]");

      include "conexiion.php";


        if(isset($a["fecha"])){
            $fecha = $a["fecha"];

            $SQL = "SELECT hora FROM reservas
                    WHERE fecha = '$fecha' ";

            $res = $conec->query($SQL);


            while( $fila = $res->fetch_assoc() ){
                //echo "<p>$fila[hora]</p>";
                $a[] = $fila['hora'];
            }
            //var_dump($a);
        }
        
        for($i = 9; $i <= 20; $i++) {
            $tiempo = "$i:00:00";
            $ocupado = false; // Variable para controlar si el tiempo está ocupado
        
            foreach($a as $x) {
                if($tiempo == $x) {
                    echo "<option>Esta ocupado</option>";
                    $ocupado = true;
                    break; // Salir del bucle una vez que se encuentra que el tiempo está ocupado
                }
            }
        
            if(!$ocupado) {
                echo "<option>$i:00</option>";
            }
        }
        
        ?>
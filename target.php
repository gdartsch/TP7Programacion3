<table border="1">
<?php
    $filas = $_POST["valor1"];
    $columnas = $_POST["valor2"];

    if($filas != $columnas){
        echo "Ambos valores deben ser iguales";
        return;
    }

    for($fila = 0; $fila < $filas; $fila++){
        echo "<tr>";
        for($columna = 0; $columna < $columnas; $columna++){
            if ($fila + $columna == $filas-1) {
                 echo "<td>" . "1" . "</td>";
            }else{
                echo "<td>" . "0" . "</td>";
            }
           
        }
        echo "</tr>";
    }
?>
</table>

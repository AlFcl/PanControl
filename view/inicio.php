<?php
require_once '../config/db.php';

  

    $sql = "SELECT g.idGuardado,cl.NombreCliente,g.Hallullas,g.Marraquetas,(g.Hallullas+g.Marraquetas) as Total ,g.Fecha FROM guardado g INNER JOIN  clientes cl on g.idClientes = cl.idClientes";
    $result = $conn->query($sql);
    

    if ($result->num_rows == 0) {
        echo "No hay nada guardado";
    } else {
     
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Hallullas</th>";
        echo "<th>Marraquetas</th>";
        echo "<th>Total</th>";
        echo "<th>Fecha</th>";
        echo "</tr>";
        echo "</table>";    
        while($row = $result->fetch_assoc()) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td>".$row["NombreCliente"]."</td>";
            echo "<td>".$row["Hallullas"]."</td>";
            echo "<td>".$row["Marraquetas"]."</td>";
            echo "<td>".$row["Total"]."</td>";
            echo "<td>".$row["Fecha"]."</td>";
            echo "</tr>";
            echo "</table>";
        }
    }




    $conn -> close();

?>
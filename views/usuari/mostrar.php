<table class="table">
<tr>
    <th>id</th>
    <th>nombre</th>
    <th>apellidos</th>
    <th>email</th>
    <th>password</th>
    <th>fecha</th>
</tr>

<?php

    while ($row = $usuaris->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nombre"]."</td>";
        echo "<td>".$row["apellidos"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "<td>".$row["fecha"]."</td>";
        echo "</tr>";
    }


?>
</table>
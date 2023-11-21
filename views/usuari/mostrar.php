<table class="table">
<tr>
    <th>id</th>
    <th>nombre</th>
    <th>apellidos</th>
    <th>email</th>
    <th>password</th>
    <th>fecha</th>
    <th>actualitzar</th>
    <th>eliminar</th>
</tr>

<a href="http://"></a>
<?php

    while ($row = $usuaris->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nombre"]."</td>";
        echo "<td>".$row["apellidos"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "<td>".$row["fecha"]."</td>";
        echo "<td><a class=\"btn btn-warning btn-lg active\" href=\"index.php?controller=usuari&action=actualitzar&id=".$row["id"]."\">Actualitzar</a></button></td>";
        echo "<td><a class=\"btn btn-danger btn-lg active\" href=\"index.php?controller=usuari&action=eliminar&id=".$row["id"]."\">Eliminar</a></button></td>";
        echo "</tr>";
    }


?>
</table>

<a class="btn btn-primary btn-lg active" href="index.php?controller=usuari&action=insertar">Insertar</a></button>
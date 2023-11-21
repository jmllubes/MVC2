<div class="form-group">
<form class="form-control" action="index.php?controller=usuari&action=modificar" method="post">

    <input class="form-control" type="hidden" name="id" value="<?php echo $row["id"];?>" id="nom" required>

    <label for="nom">Nom</label>
    <input class="form-control" type="text" name="nom" value="<?php echo $row["nombre"];?>" id="nom" required>

    <label for="cognoms">Cognoms</label>
    <input class="form-control" type="text" name="cognoms" value="<?php echo $row["apellidos"];?>" id="cognoms" required>

    <label for="email">Email</label>
    <input class="form-control" type="email" name="email" value="<?php echo $row["email"];?>" id="email" required>

    <label for="password">Password</label>
    <input class="form-control" type="password" name="password" value="<?php echo $row["password"];?>" id="password" required>

    <label for="fecha">Fecha</label>
    <input class="form-control" type="date" name="fecha" value="<?php echo $row["fecha"];?>" id="fecha" required>


    <input class="form-control" type="submit" value="Modificar">



</form>
</div>
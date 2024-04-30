<?php
    include "conexion_bd.php";
      $id = $_GET["id"];
      
    $sql = $conexion->query("select * from estudiantes where id=$id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/barranav.css">
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Modificar Registros</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "controller/editarestudiante.php";
        while($datos = $sql->fetch_object()){?>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres del Inscrito</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $datos->nombres ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos del Inscrito</label>
                <input type="text" class="form-control" name="apellido" value="<?php echo $datos->apellidos ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Direccion</label>
                <input type="text" class="form-control" name="direccion" value="<?php echo $datos->direccion ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha" value="<?php echo $datos->fecha_nacimiento ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono" value="<?php echo $datos->telefono ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" value="<?php echo $datos->correo ?>">
            </div>

        <?php }
        ?>
  
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Actualizar registro</button>
</form>
</body>
</html>
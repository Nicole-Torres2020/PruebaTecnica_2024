<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/barranav.css">
  </head>
<body>
    <script>
      function eliminar(){
        var respuesta=confirm("¿Deseas eliminar este registro?");
        return respuesta
      }
    </script>

    <header class="header">
        <div class="logo">
            <img src="img/logo.png" alt="logo">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="cursos.php">Cursos</a></li>
                <li><a href="AgregarEstudiante.php">Agregar Estudiante</a></li>
                <li><a href="MostrarEstudiantes.php">Ver Estudiantes</a></li>
                <li><a href="login.php">Cerrar Sesion</a></li>
            </ul>
        </nav>
        <a href="https://fepade.org.sv/contactenos/" class="btn"><button>Contactanos</button></a>
    </header>

    <h1 class="text-center p-3">REGISTRO DE INSCRITOS</h1>

    <?php
      include "conexion_bd.php";
      include "controller/eliminarregistro.php";
    ?>


    <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Registro de personas</h3>
       
       <?php
          include "conexion_bd.php";
          include "controller/registro_personas.php";
        ?>
       
       <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombres del Inscrito</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellidos del Inscrito</label>
    <input type="text" class="form-control" name="apellido">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Direccion</label>
    <input type="text" class="form-control" name="direccion">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="fecha">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="email" class="form-control" name="correo">
  </div>
  
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
</form>
        <div class="col-8 p-4">
        <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Direccion</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

    <?php
        include "conexion_bd.php";
        $sql = $conexion->query("select * from estudiantes");
        while($datos=$sql->fetch_object()){ ?>
            <tr>
                <td><?php echo $datos->id ?></td>
                <td><?php echo $datos->nombres ?></td>
                <td><?php echo $datos->apellidos?></td>
                <td><?php echo $datos->direccion?></td>
                <td><?php echo $datos->fecha_nacimiento?></td>
                <td><?php echo $datos->telefono?></td>
                <td><?php echo $datos->correo?></td>
                <td>
                    <a href="EditarEstudiante.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a onclick="return eliminar()" href="AgregarEstudiante.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        <?php }
    ?>

  </tbody>
</table>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
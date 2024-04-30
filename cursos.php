<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="css/barranav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
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

<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Curso</th>
      <th scope="col">Fecha de Inicio</th>
      <th scope="col">Fecha de Finalizacion</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
  <tbody>

    <?php
        include "conexion_bd.php";
        $sql = $conexion->query("select * from cursos");
        while($datos=$sql->fetch_object()){ ?>
            <tr>
                <td><?php echo $datos->id ?></td>
                <td><?php echo $datos->nombre_curso ?></td>
                <td><?php echo $datos->fec_inicio?></td>
                <td><?php echo $datos->fec_fin?></td>
                <td><?php echo $datos->descripcion?></td>
        <?php }
    ?>

  </tbody>
</table>
</body>
</html>

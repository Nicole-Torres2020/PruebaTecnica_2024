<?php
    if(!empty($_POST['btnregistrar'])){
        if(!empty($_POST['nombre']) and !empty($_POST['apellido']) and !empty($_POST['direccion']) and !empty($_POST['fecha']) and !empty($_POST['telefono']) and !empty($_POST['correo'])){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $fecha = $_POST['fecha'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];

            $sql = $conexion->query("insert into estudiantes(nombres, apellidos,direccion,fecha_nacimiento,telefono,correo) values('$nombre', '$apellido', '$direccion', '$fecha', '$telefono', '$correo')" );
            if ($sql==1) {
                echo '<div class="alert alert-success">Persona registrada correctamente</div>';
            } else {
                echo '<div class="alert alert-danger">Persona registrada incorrectamente</div>';
            }
            
        }else{
            echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
            ;
        }
    }
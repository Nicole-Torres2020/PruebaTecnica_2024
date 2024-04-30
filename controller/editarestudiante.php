<?php
    if(!empty($_POST['btnregistrar'])){
        if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["direccion"]) and !empty($_POST["fecha"]) and !empty($_POST["telefono"]) and !empty($_POST["correo"])){
            $id = $_POST["id"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $direccion = $_POST["direccion"];
            $fecha = $_POST["fecha"];
            $telefono = $_POST["telefono"];
            $correo = $_POST["correo"];
            $sql = $conexion->query("update estudiantes set nombres='$nombre', apellidos='$apellido', direccion='$direccion', fecha_nacimiento='$fecha', telefono='$telefono', correo='$correo' where id=$id");
            if ($sql==1) {
                header("location: AgregarEstudiante.php");
            } else {
                echo "<div class='alert alert-danger'>Error al Actualizar</div>";
            }
            
        }else{
            echo "<div class='alert alert-warning'>Campos Vacios</div>";
        }
    }
?>
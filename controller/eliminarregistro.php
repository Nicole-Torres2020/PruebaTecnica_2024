<?php
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $sql = $conexion->query("delete from estudiantes where id=$id");
        if ($sql==1) {
            echo "<div class='alert alert-success'>Persona Eliminada correctamente</div>";
        } else {
            echo "<div class='alert alert-danger'>Error al eliminar</div>";
        }
        
    }
?>
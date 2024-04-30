<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Consulta a la base de datos
$sql = "SELECT * FROM cursos";
$result = $conn->query($sql);

// Pasar los resultados a la vista
$cursos = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $cursos[] = $row;
    }
}

// Cerrar conexión
$conn->close();

// Incluir la vista
include 'cursos.php';
?>

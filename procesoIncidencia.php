<?php
session_start();
require 'db.php';
require 'log.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: inicioSesion.php");
    exit();
}

$Titulo = $_POST['Titulo'];
$Descripcion = $_POST['Descripcion'];
$Prioridad = $_POST['Prioridad'];
$Categoria = $_POST['Categoría'];
$Subcategoria = $_POST['Subcategoria'];
$Estado = 'abierta';
$Fecha_creacion = date('Y-m-d H:i:s');

$sql_id = "SELECT id FROM usuarios WHERE Nombre = ?";
$stmt_id = $conn->prepare($sql_id);
$stmt_id->bind_param("s", $_SESSION['usuario']);
$stmt_id->execute();
$result = $stmt_id->get_result();
$usuario = $result->fetch_assoc();
$Id_usuario = $usuario['id'];

$sql = "INSERT INTO incidencias (Título, Descripción, Estado, Prioridad, Categoria, Subcategoria, FechaCreación, IdUsuario)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssi", $Titulo, $Descripcion, $Estado, $Prioridad, $Categoria, $Subcategoria,  $Fecha_creacion, $Id_usuario);

if ($stmt->execute()) {
	registrarLog($_SESSION['usuario'], "Creó la incidencia: $Titulo");
    echo "Incidencia creada, espere a que uno de nuestros técnicos la revise y solucione.";
} else {
    echo "Error al crear la incidencia: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Centro de Incidencias</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<p><a href="panel.php" class="btn">Volver a la página principal</a></p>
</body>
</html>


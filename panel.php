<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: inicioSesion.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Centro de incidencias</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?> (<?php echo $_SESSION['rol']; ?>)</h2>

<div class="menu-links">
    <a href="crearIncidencia.php" class="btn">Nueva incidencia</a>
    <a href="listadoIncidencias.php" class="btn">Listado de incidencias</a>
    <a href="comentario.php" class="btn">Comentarios de soluciones</a>
    <a href="historialIncidencias.php" class="btn">Historial de incidencias</a>
    <a href="backup.php" class="btn" target="_blank">Generar Backup de la Base de Datos</a>
    <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin'): ?>
        <a href="logs.php" class="btn">Ver Registro de Actividad (Logs)</a>
    <?php endif; ?>
    <a href="cerrarSesion.php" class="btn">Cerrar sesión</a>
</div>

</body>
</html>


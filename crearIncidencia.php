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
    <title>Crear Incidencia</title>
</head>
<body>
    <h2>Crear nueva incidencia</h2>
    <form action="procesoIncidencia.php" method="POST">
        <label>Título:</label><br>
        <input type="text" name="Titulo" required><br><br>

        <label>Descripción:</label><br>
        <textarea name="Descripcion" required></textarea><br><br>

        <label>Prioridad:</label><br>
        <select name="Prioridad" required>
            <option value="baja">Baja</option>
            <option value="media">Media</option>
            <option value="alta">Alta</option>
      </select><br><br>
            
        <label>Categoría:</label><br>
<select name="Categoría" required>
    <option value="hardware">Hardware</option>
    <option value="software">Software</option>
    <option value="redes">Redes</option>
    <option value="otros">Otros</option>
      </select><br><br>
    <label>Subcategoría:</label><br>
<select name="Subcategoria" required>
    <option value="general">General</option>
    <option value="disco duro">Disco duro</option>
    <option value="sistema operativo">Sistema operativo</option>
    <option value="router">Router</option>
    <option value="aplicación">Aplicación</option>
    <option value="usuario">Usuario</option>

      </select><br><br>


        <input type="submit" value="Crear incidencia">
    </form>

    <p><a href="panel.php">Volver al panel</a></p>
</body>
</html>


<?php
session_start();
require 'db.php';

if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
    echo "Acceso denegado.";
    exit();
}

$sql = "SELECT * FROM logs ORDER BY fecha DESC";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de actividad</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h2>Registro de actividad</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Usuario</th>
            <th>Acción</th>
            <th>Fecha</th>
        </tr>

        <?php
        if ($resultado && $resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($fila['usuario']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['accion']) . "</td>";
                echo "<td>" . $fila['fecha'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hay registros.</td></tr>";
        }
        ?>

    </table>

    <p><a href="panel.php" class="btn"> Volver al panel</a></p>
</body>
</html>


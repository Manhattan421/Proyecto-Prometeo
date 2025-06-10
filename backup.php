<?php
session_start();

if ($_SESSION['rol'] != 'admin') {
    echo "Acceso no autorizado";
    exit();
}

$usuario = 'root';
$contraseña = 'tucontraseña';
$servidor = 'localhost';
$baseDeDatos = 'Incidencias';

$archivoBackup = '/var/www/html/incidencias/backups/backup_' . date('Y-m-d_H-i-s') . '.sql';

$comando = "mysqldump -u $usuario -p$contraseña -h $servidor $baseDeDatos > $archivoBackup";

exec($comando, $output, $return_var);

if ($return_var == 0) {
    echo "Respaldo realizado con éxito.";
} else {
    echo "Error al hacer el respaldo.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Centro de incidencias</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <p><a href="panel.php" class="btn">Volver a la página principal</a></p>

</body>
</html>

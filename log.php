<?php
require 'db.php';

function registrarLog($usuario, $accion) {
    global $conn;

    $sql = "INSERT INTO logs (usuario, accion) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $accion);
    $stmt->execute();
    $stmt->close();
}
?>


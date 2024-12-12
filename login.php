<?php
session_start();
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST['nombre']);
    $contraseña = trim($_POST['contraseña']);


    $sql = "SELECT nombre FROM usuarios WHERE nombre = ? AND contraseña = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nombre, $contraseña);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        echo "Usuario encontrado. Redirigiendo...";
        header("Location: principal.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>

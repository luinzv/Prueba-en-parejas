<?php
require_once "conexion.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];
$confirmar_contraseña = $_POST["confirmar_contraseña"];

if ($contraseña !== $confirmar_contraseña) {
    die("Las contraseñas no son iguales.");
}

function insertar_registro($conn, $nombre, $apellido, $correo, $contraseña) {
    $sql = "
    INSERT INTO usuarios (nombre, apellido, correo, contraseña)
    VALUES (?, ?, ?, ?)
    ";
    
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error en la consulta: " . $conn->error);
    }
    
    $stmt->bind_param("ssss", $nombre, $apellido, $correo, $contraseña);
    
    if ($stmt->execute()) {
        return true;
    } else {
        echo "Error en el registro: " . $stmt->error;
        return false;
    }
}

if (insertar_registro($conn, $nombre, $apellido, $correo, $contraseña)) {
    header('Location: index.php');
    exit();
} else {
    echo "ERROR AL INSERTAR EL REGISTRO";
}
?>
<?php
include('db.php');



$telefono = $_POST['telefono'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];

$sql = "INSERT INTO visitas (telefono, nombre, apellido, correo)
        VALUES ('$telefono', '$nombre', '$apellido', '$correo')";

if ($conn->query($sql) === TRUE) {
    header("Location: listar.php");
    exit(); 
} else {
    echo "Error al guardar: " . $conn->error;
}
?>

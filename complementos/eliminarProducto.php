<?php
session_start();

include_once('../config/conexion.php');

$Id_producto = $_REQUEST['Id_producto'];

$sqlEliminar = "DELETE FROM productos WHERE Id_producto = '$Id_producto'";
$result = $conexion->query($sqlEliminar);

if ($result == true) {
    $_SESSION['mensaje'] = "Producto eliminado correctamente.";
} else {
    $_SESSION['mensaje'] = "Error al eliminar el producto: " . $conexion->error;
}

// Redirección a la página catalogo.php
header("Location: ../catalogo.php");
exit();
?>

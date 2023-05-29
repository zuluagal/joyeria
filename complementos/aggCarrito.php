<?php
require('../config/conexion.php');
session_start();

$Id_producto = $_POST['Id_producto'];


if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}


array_push($_SESSION['carrito'], $Id_producto);

    // Redirecciona de vuelta a la página principal
    //header('Location: inicio.php');
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>

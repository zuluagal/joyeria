<?php
session_start();


if (isset($_POST['Id_producto'])) {
    $Id_producto = $_POST['Id_producto'];

    if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
        $index = array_search($Id_producto, $_SESSION['carrito']);

        if ($index !== false) {
            array_splice($_SESSION['carrito'], $index, 1);
        }
    }
}

header('Location: ../carrito.php');
?>

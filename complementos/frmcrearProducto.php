<?php
    session_start();

    include_once('../config/conexion.php');

    if(isset($_POST['crearProducto'])){

        function validar($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
    
            return $data;
        }
    
        $imageNombre = $_FILES['portada']['name'];
        $imagen = $_FILES['portada']['tmp_name'];
        $ruta="img/catalogo";
        $ruta=$ruta."/".$imageNombre;
        
       $ruta = validar($ruta);
       
    $nombre =  validar($_POST['nombre']);
    $descripcion =  validar($_POST['descripcion']);
    $cantidad =  validar($_POST['cantidad']);
    $precio =  validar($_POST['precio']);
    $promos = validar($_POST['promos']);
    
    $productoDatos = 'nombre=' . $nombre . '&descripcion=' . $descripcion;

    if (empty($ruta)) {
        echo "<script>
            alert('Faltan datos.');
            location.href = '../crearProducto.php'
          </script>";
        exit();
    }elseif (empty($imagen)) {
        echo "<script>
        alert('Faltan datos.');
        location.href = '../crearProducto.php'
      </script>";
            exit();
    }elseif (empty($nombre)) {
        echo "<script>
            alert('Faltan datos.');
            location.href = '../crearProducto.php'
          </script>";
        exit();
    }elseif (empty($descripcion)) {
        echo "<script>
            alert('Faltan datos.');
            location.href = '../crearProducto.php'
          </script>";
        exit();
    }elseif (empty($cantidad)) {
        echo "<script>
            alert('Faltan datos.');
            location.href = '../crearProducto.php'
          </script>";
        exit();
    }elseif (empty($precio)) {
        echo "<script>
            alert('Faltan datos.');
            location.href = '../crearProducto.php'
          </script>";
        exit();
    }elseif (empty($promos)) {
        echo "<script>
        alert('Faltan datos.');
        location.href = '../crearProducto.php'
      </script>";
        exit();
    }else {
            $sqlProductoNuevo = "INSERT INTO productos(portada, Nombre, Descripcion, Cantidad_disponible, precio, promos) VALUES ('$ruta','$nombre','$descripcion','$cantidad', '$precio', '$promos')";
            $sqlProductoNuevo = $conexion->query($sqlProductoNuevo);

            if ($sqlProductoNuevo) {
                header("location: ../crearProducto.php?success=Producto creado con exito!&$productoDatos");     
                exit();
            }else {
                header("location: ../crearProducto.php?error=Error desconocido&$productoDatos");
                exit();
            }
        }
 
}
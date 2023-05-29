<?php
require('config/conexion.php');
session_start();

if(isset($_SESSION['Reg'])){
    if($_SESSION['Reg']=='ok'){

if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
    echo "<script>
            alert('El carrito está vacío.');
            location.href = 'catalogo.php'
          </script>";
    exit;
}


$productos = $_SESSION['carrito'];

$sqlProductos = "SELECT * FROM productos WHERE Id_producto IN (".implode(',', $productos).")";
$sqlProductos = $conexion->query($sqlProductos);
//$result = mysqli_query($con, $query);
$total = 0;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CARRITO | Golden Word</title>
        <meta
            name="description"
            content="Encuentra los mejores perfumes en nuestra tienda online">
        <link rel="stylesheet" href="css/inicio.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body background="fondo.jpg">
        <header>
            <a href="index.php" class="logo"><img class="pondersky" src="img/1.png" height="50" width="80" align="left"></a>
            <nav>
                <ul>
                    <li>
                        <a href="inicio.php">Inicio</a>
                    </li>
                    <?php if ($_SESSION['id_tipousuario'] == '1') {
                    echo '<li><a href="crearProducto.php">Crear Producto</a></li>';
                            } 
                    ?>
                    <li>
                        <a href="encuentranos.php">Encuentranos</a>
                    </li>
                    <li>
                        <a href="login/cerrarSesion.php" class="btn-cerrar-sesion">Cerrar Sesion</a>
                    </li>
                </ul>
            </nav>
        </header>
        <h1>Carrito de compras</h1>
        <table class="carrito-compras">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Accion</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($sqlProductos)) { ?>
            <tr>
                <td><?php echo $row['Nombre']; ?></td>
                <td><?php echo $row['precio']; ?></td>
                <td><form action="complementos/eliminarDelCarrito.php" method="post">
                        <input type="hidden" name="Id_producto" value="<?php echo $row['Id_producto']; ?>">
                        <input type="submit" class="btn-eliminar-producto" value="Eliminar">
                    </form></td>
            </tr>
            <?php 
            $total += $row['precio'];
        } ?>
            <tr>
                <td><strong>Total A Pagar:</strong></td>
                <td><strong><?php echo $total; ?></strong></td>
            </tr>
        </table>
        <button class="btn-imprimir" onclick="imprimirPagina()">Imprimir Ticket A Pagar</button>
        <footer>
            <p>Golden Word</p>
        </footer>
        <script src="CSS/javaredes.js"></script>
    </body>
</html>
<?php
        }else{
        header("Location: index.php");
        }
        }else{
        header("Location: index.php");
    }
?>
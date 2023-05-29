<?php
require('config/conexion.php');
session_start();


if(isset($_SESSION['Reg'])){
if($_SESSION['Reg']=='ok'){
    $usuario = $_SESSION['nombreUsuario'];

    $sqlPromos = "SELECT * FROM productos WHERE promos = 'S' ";
    $promos = $conexion->query($sqlPromos);

    $sqlNoPromos = "SELECT * FROM productos WHERE promos = 'N' ";
    $coleccion = $conexion->query($sqlNoPromos);

    $sqlUsuario = "SELECT * FROM usuarios WHERE nombreUsuario = '$usuario'";
    $usuario = $conexion->query($sqlUsuario);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Golden Word</title>
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
                        <a href="carrito.php">Ver Carrito</a>
                    </li>
                    <li>
                        <a href="encuentranos.php">Encuentranos</a>
                    </li>
                    <li>
                        <a href="login/cerrarSesion.php" class="btn-cerrar-sesion">Cerrar Sesion</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <h1>Productos</h1>
            <p>Bienvenidos a nuestra tienda online<strong>FRUBITS</strong>, aquí encontrarás una amplia selección de sabores que deleitaran tu paladar.</p>
            <?php if (isset($_SESSION['mensaje'])) {
                    echo "<p class='productoEliminado'>" . $_SESSION['mensaje'] . "</p>";
                    unset($_SESSION['mensaje']); 
                } ?>
            <section class="promos">
                <h2>Promos</h2>
                <div class="productos-container">
                <?php foreach ($promos as $producto) : ?>
                    <div class="producto">
                        <div class="img-contenedor">
                            <img src='<?php echo $producto['portada']; ?>'class="img-portada-coleccion">
                        </div>
                        <h3><?php echo $producto['Nombre']; ?></h3>
                        <strong><?php echo $producto['Descripcion']; ?></strong>
                        <strong>Stock: <?php echo $producto['Cantidad_disponible']; ?></strong>
                        <p class="precio">$<?php echo $producto['precio']; ?></p>
                        <form action="complementos/aggCarrito.php" method="post">
                            <input type="hidden" name="Id_producto" value="<?php echo $producto['Id_producto']; ?>">
                            <input type="submit" value="Añadir al carrito">
                        </form>
                        <?php
                            if ($_SESSION['id_tipousuario'] == '1') {
                                echo "<a href='complementos/eliminarProducto.php?Id_producto=" . $producto['Id_producto'] . "' class='btn-eliminar-producto'>Eliminar Producto</a>";
                            }   
                        ?>
                    </div>
                <?php endforeach; ?>
                </div>
            </section>
            <section class="coleccion">
                <h2>Coleccion</h2>
                <div class="productos-container">
                    <?php foreach ($coleccion as $productoColeccion) : ?>
                    <div class="producto">
                        <div class="img-contenedor"><img
                            src='<?php echo $productoColeccion['portada']; ?>'
                            class="img-portada-coleccion">
                        </div>
                        <h3><?php echo $productoColeccion['Nombre']; ?></h3>
                        <strong><?php echo $productoColeccion['Descripcion']; ?></strong>
                        <strong>Stock: <?php echo $productoColeccion['Cantidad_disponible']; ?></strong>
                        <p class="precio">$<?php echo $productoColeccion['precio']; ?></p>
                        <form action="complementos/aggCarrito.php" method="post">
                            <input type="hidden" name="Id_producto" value="<?php echo $productoColeccion['Id_producto']; ?>">
                            <input type="submit" value="Añadir al carrito">
                        </form>
                        <?php
                            if ($_SESSION['id_tipousuario'] == '1') {
                                echo "<a href='complementos/eliminarProducto.php?Id_producto=" . $productoColeccion['Id_producto'] . "' class='btn-eliminar-producto'>Eliminar Producto</a>";
                            }   
                        ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </main>
        <footer>
            <p>Golden Word</p>
        </footer>
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
<?php
require('config/conexion.php');
session_start();

if(isset($_SESSION['Reg'])){
if($_SESSION['Reg']=='ok'){
    
?>

<!DOCTYPE html>
<html>
    <!--JOHANCAMILO/CRISTIAN GONZALES -->
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Golden Word</title>
        <link rel="stylesheet" href="css/inicio.css">
    </head>
    <body>
        <header>
            <a href="index.php" class="logo"><img class="pondersky" src="img/1.png" height="50" width="80" align="left"></a>
            <nav>
                <ul>
                    <?php if ($_SESSION['id_tipousuario'] == '1') {
                    echo '<li><a href="crearProducto.php">Crear Producto</a></li>';
                            } 
                    ?>
                    <li>
                        <a href="catalogo.php">Catalogo</a>
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
        <section class="contenido-principal">
            <h1>Primeros En Hacer Algo Divertido
                <strong>FRUBITS Tu Mejor Opcion</strong>
            </h1>
        </section>
        <footer>
            <p>Golden Word</p>
        </footer>
    </body>
    <!-- JOHANCAMILO/CRISTIAN GONZALES -->
</html>
<?php
        }else{
        header("Location: index.php");
        }
        }else{
        header("Location: index.php");
    }
?>
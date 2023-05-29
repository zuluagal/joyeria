<?php
require('config/conexion.php');
session_start();

if(isset($_SESSION['Reg'])){

    if($_SESSION['Reg']=='ok' && $_SESSION['id_tipousuario'] == 1){

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="css/inicio.css">
        <link rel="stylesheet" href="css/style.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>
        <title>Crear Producto</title>
    </head>
    <body>
        <header>
            <a href="index.php" class="logo"><img class="pondersky" src="img/1.png" height="50" width="80" align="left"></a>
            <nav>
                <ul>
                    <li>
                        <a href="inicio.php">Inicio</a>
                    </li>
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
        <div class="container-index">
            <div class="container-index-hijo">
                <form action="complementos/frmcrearProducto.php" enctype="multipart/form-data" method="POST">
                    <div class="container">
                        <h2>
                            <ins>Crear Producto</ins>
                        </h2>

                        <?php if (isset($_GET['error'])) { ?>
                        <p class="error">
                            <?php echo $_GET['error']; ?></p>
                        <?php }?>
                        <br>
                        <?php if (isset($_GET['success'])) { ?>
                        <p class="success">
                            <?php echo $_GET['success']; ?></p>
                        <?php }?>

                        <label>Portada</label><br>
                        <label for="portada" class="icono-plus"><img src="img/portada.png" width="100" height="100" style="cursor: pointer;"></label>
                        <br>
                        <input
                            type="file"
                            name="portada"
                            id="portada"
                            class="form-control"
                            style="display: none; visibility: none;"
                            onchange="getImage(this.value);" >
                        <div id="display-image" style="display: none;"></div>

                        <label for="">
                            <i class="fa-solid fa-file-signature"></i>Nombre</label>
                        <input
                            type="text"
                            placeholder="Ingrese nombre"
                            name="nombre"
                            autocomplete="off">

                        <label for="">
                            <i class="fa-solid fa-box-open"></i>Descripcion</label>
                        <input
                            type="text"
                            placeholder="Ingrese descripcion completa"
                            name="descripcion"
                            autocomplete="off">

                        <label for="">
                            <i class="fa-solid fa-box-open"></i>Cantidad Disponible</label>
                        <input type="number" placeholder="Ingrese cantidad" name="cantidad">

                        <label for="">
                            <i class="fa-solid fa-money-bill"></i>Precio</label>
                        <input type="number" placeholder="Precio producto" name="precio">
                        <br>
                        <label for="">
                            <i class="fa-solid fa-tag"></i>Promocion</label>
                        <select name="promos" id="promos">
                            <option value="S">Si</option>
                            <option value="N">No</option>
                        </select>
                        <input
                            type="submit"
                            class="button"
                            value="Guardar Producto"
                            name="crearProducto">
                    </form>
                </div>
            </div>
            <script>
                function getImage(imagename){
	                $('#display-image').html(imagename);
                }    
            </script>
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
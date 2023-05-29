<?php

require('config/conexion.php');
session_start();

if(isset($_SESSION['Reg'])){
if($_SESSION['Reg']=='ok'){
    echo '<script>window.location="inicio.php"</script>';
    }}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap"
            rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>
        <title>Login | Golden</title>
    </head>
    <body>
        <div class="container-index">
            <div class="container-index-hijo">
                <h2>Iniciar sesion</h2>
                <form action="login/LoginAuth.php" method="POST">
                    <?php if(isset($_GET['error'])) {?>

                    <p><?php echo $_GET['error']?></p>
                    <?php } ?>
                    <label for=""><i class="fa-solid fa-user"></i>Usuario</label>
                    <input type="text" placeholder="Ingrese usuario" name="Usuario" autocomplete="off">
                    <br>    
                    <label for=""><i class="fa-solid fa-key"></i>Clave</label>
                    <input type="password" placeholder="Ingrese Clave" name="Clave" autocomplete="OFF">
                    <input type="submit" value="INICIAR SESION">
                    <p class="message">
                        No tienes una cuenta?
                        <a href="registrarse.php">Registrate</a>
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>
<?php



?>
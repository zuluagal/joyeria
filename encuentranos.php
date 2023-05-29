<?php
require('config/conexion.php');
session_start();

if(isset($_SESSION['Reg'])){
if($_SESSION['Reg']=='ok'){

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
        <link
            href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap"
            rel="stylesheet"/>
        <link rel="stylesheet" href="css/redes.css"/>
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
                        <a href="login/cerrarSesion.php" class="btn-cerrar-sesion">Cerrar Sesion</a>
                    </li>
                </ul>
            </nav>
        </header>
    </head>
    <body>
        <section class="questions">
            <div class="title">
                <h2>CONOCENOS MAS</h2>
            </div>
            <!-- questions -->
            <div class="section-center">
                <article class="question">
                    <div class="question-title">
                        <p>Instagram</p>
                        <button type="button" class="question-btn">
                            <span class="plus-icon">
                                <i class="far fa-plus-square"></i>
                            </span>
                            <span class="minus-icon">
                                <i class="far fa-minus-square"></i>
                            </span>
                        </button>
                    </div>
                    <div class="question-text">
                        <p>
                            PUEDES CONOCER MAS DE NOSOTROS AQUI @FRUBITS
                        </p>
                    </div>
                </article>
                <article class="question">
                    <div class="question-title">
                        <p>Facebook</p>
                        <button type="button" class="question-btn">
                            <span class="plus-icon">
                                <i class="far fa-plus-square"></i>
                            </span>
                            <span class="minus-icon">
                                <i class="far fa-minus-square"></i>
                            </span>
                        </button>
                    </div>
                    <div class="question-text">
                        <p>
                            Puedes Conocer Mas De Nosotros Aqui @FRUBITS
                        </p>
                    </div>
                </article>
                <article class="question">
                    <div class="question-title">
                        <p>Tienda Fisica</p>
                        <button type="button" class="question-btn">
                            <span class="plus-icon">
                                <i class="far fa-plus-square"></i>
                            </span>
                            <span class="minus-icon">
                                <i class="far fa-minus-square"></i>
                            </span>
                        </button>
                    </div>
                    <div class="question-text">
                        <p>
                            Puedes Encontrarnos En Carrear 69B #24-15 Fitnus Salitre
                        </p>
                    </div>
                </article>
            </section>
        </main>
        <script src="CSS/javaredes.js"></script>
        <br><br><br><br><br><br><br>
        <footer>
            <p1>FRUBITS Lo Mejor Para Ti</p1>
        </footer>
    </body>
    <!-- María Camila Martínez Oviedo -->
</html>
<?php
        }else{
        header("Location: index.php");
        }
        }else{
        header("Location: index.php");
    }
?>
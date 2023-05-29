<?php

    session_start();

    include_once('../config/conexion.php');

     if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {
        
        function Validar($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $usuario = Validar($_POST['Usuario']);
        $clave = Validar($_POST['Clave']);

        if (empty($usuario)) {
            header('location: ../index.php?error=El usuario es requerido');
            exit();
        }elseif (empty($clave)) {
            header('location: ../index.php?error=La clave es requerida');
            exit();
        }else {
            $Sql = "SELECT * FROM usuarios WHERE nombreUsuario = '$usuario'";
            $query = mysqli_query($conexion, $Sql);

            if ($query->num_rows==1) {
                $usuarioQ = $query->fetch_assoc();

                $Id = $usuarioQ['id'];
                //$Nombre = a nombre completo del usuario
                $Nombre = $usuarioQ['nombre'];
                $NombreUsuario = $usuarioQ['nombreUsuario'];
                $Clave = $usuarioQ['clave'];
                $TipoUsuario = $usuarioQ['id_tipousuario'];    
                //$NombreCompleto = $usuarioQ['NombreCompleto'];


                if ($usuario === $NombreUsuario) {
                    if (password_verify($clave, $Clave)) {
                        $_SESSION['id'] = $Id;
                        $_SESSION['nombreUsuario'] = $NombreUsuario;
                        $_SESSION['id_tipousuario'] = $TipoUsuario;
                        //$_SESSION['nombreCompleto'] = $NombreCompleto;

                        echo "<script>
                            alert('Bienvenido $Nombre ');
                            location.href = '../inicio.php'
                          </script>";
                        session_start();
                        $_SESSION['Reg']='ok';
                    }else {
                        header('Location:../index.php?error=Usuario o clave incorrecta');
                        $_SESSION['Reg']='fail';
                    }
                }else {
                    header('Location:../index.php?error=Usuario o clave incorrecta');
                    $_SESSION['Reg']='fail';
                }  
            }else {
                header('Location:../index.php?error=Usuario o clave incorrecta');
                $_SESSION['Reg']='fail';
            }
        }
    }
<?php
require_once("../../modelo/conexion.php");
require_once("../../modelo/usuariosModelo/usuariosModelo.php");

$UsuarioModel = new usuarioModelo();

if(isset($_POST["Registrarse"])){
    $UsuarioModel->setNombres($_POST['Nombres']);
    $UsuarioModel->setApellidos($_POST['Apellidos']);
    $UsuarioModel->setFechaNacimiento($_POST['FechaNacimiento']);
    $UsuarioModel->setCorreo($_POST['Correo']);
    $UsuarioModel->setContrasena($_POST['Contrasena']);
 
    $UsuarioRegistrado = $UsuarioModel->Registrarse();
    if($UsuarioRegistrado){
        ?>
            <script>
                 alert("Usuario registrado correctamente  ");
                 window.location.href = "../../vista/usuariosVista/iniciarSesion.php";
            </script>
        <?php
    }else{
        ?>
        <script>
                window.location.href = "../../vista/usuariosVista/iniciarSesion.php";
        </script>
    <?php
    }

}




if (isset($_POST["IniciarSesion"])) {
    $UsuarioModel->setCorreo($_POST['Correo']);
    $UsuarioModel->setContrasena($_POST['Contrasena']);

    $UsuarioEncontrado = $UsuarioModel->iniciarSesion();

    if (isset($UsuarioEncontrado['idUsuario'])) {

        if ($UsuarioEncontrado['estado'] == 1) {
            session_start();
            $_SESSION['IdUsuario'] = $UsuarioEncontrado['idUsuario'];
            $_SESSION['Nombres'] = $UsuarioEncontrado['nombres'];
            $_SESSION['Apellidos'] = $UsuarioEncontrado['apellidos'];
            $_SESSION['FechaNacimiento'] = $UsuarioEncontrado['fechaNacimiento'];
            $_SESSION['Correo'] = $UsuarioEncontrado['correo'];
            $_SESSION['Contrasena'] = $UsuarioEncontrado['contrasena'];
            $_SESSION['Administrador'] = $UsuarioEncontrado['administrador'];
            $_SESSION['Estado'] = $UsuarioEncontrado['estado'];
            $_SESSION['IdAvatar'] = $UsuarioEncontrado['idAvatar'];
            $_SESSION['NombreAvatar'] = $UsuarioEncontrado['nombreAvatar'];
?>
            <script>
                window.location.href = "../../vista/plantillaVista/index.php";
            </script>
        <?php

        } else {
        ?>
            <script>
                alert("Usuario inactivo");
                // window.location.href = "../../vista/usuariosVista/iniciarSesion.php";
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert("Correo o contraseña incorrecta");
            window.location.href = "../../vista/usuariosVista/iniciarSesion.php";
        </script>
<?php

    }
}

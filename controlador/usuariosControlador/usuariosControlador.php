<?php
require_once("../../modelo/conexion.php");
require_once("../../modelo/usuariosModelo/usuariosModelo.php");

$UsuarioModel = new usuarioModelo();

if (isset($_POST["Registrarse"])) {
    $UsuarioModel->setNombres($_POST['Nombres']);
    $UsuarioModel->setApellidos($_POST['Apellidos']);
    $UsuarioModel->setFechaNacimiento($_POST['FechaNacimiento']);
    $UsuarioModel->setCorreo($_POST['Correo']);
    $UsuarioModel->setContrasena($_POST['Contrasena']);
    $UsuarioModel->setAdministrador(0);

    $UsuarioRegistrado = $UsuarioModel->RegistrarUsuario();
    if ($UsuarioRegistrado) {
?>
        <script>
            alert("Usuario registrado correctamente  ");
            window.location.href = "../../vista/usuariosVista/iniciarSesion.php";
        </script>
    <?php
    } else {
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
                window.location.href = "../../vista/panelAdministrativo/index.php";
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

if (isset($_POST['EditarUsuario'])) {
    $UsuarioModel->setIdUsuario($_POST['IdUsuario']);
    $UsuarioModel->setNombres($_POST['Nombres']);
    $UsuarioModel->setApellidos($_POST['Apellidos']);
    $UsuarioModel->setFechaNacimiento($_POST['FechaNacimiento']);
    $UsuarioModel->setCorreo($_POST['Correo']);
    $UsuarioModel->setAdministrador($_POST['Administrador']);

    $EditadoExitoso = $UsuarioModel->EditarUsuario();

    if ($EditadoExitoso) {
    ?>
        <script>
            alert("Usuario editado correctamente ");
            window.location.href = "../../vista/usuariosVista/consultarUsuarios.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Ocorrio un error en el ediatr ");
            // window.location.href = "../../vista/usuariosVista/consultarUsuarios.php";
        </script>
    <?php
    }
}

if (isset($_POST["RegistrarUsuario"])) {

    $Correo = explode("@", $_POST['Correo']);
    $Fecha = explode("-", ($_POST['FechaNacimiento']));
    $ContrasenaUsuario = strtolower($Correo[0] . $Fecha[2] . $Fecha[1] . $Fecha[0]);

    $UsuarioModel->setNombres($_POST['Nombres']);
    $UsuarioModel->setApellidos($_POST['Apellidos']);
    $UsuarioModel->setFechaNacimiento($_POST['FechaNacimiento']);
    $UsuarioModel->setCorreo($_POST['Correo']);
    $UsuarioModel->setAdministrador($_POST['Administrador']);
    $UsuarioModel->setContrasena($ContrasenaUsuario);

    $UsuarioRegistrado = $UsuarioModel->RegistrarUsuario();
    if ($UsuarioRegistrado) {
    ?>
        <script>
            alert("Usuario registrado correctamente  ");
            window.location.href = "../../vista/usuariosVista/iniciarSesion.php";
        </script>
    <?php
    } else {
    ?>
        <script>
            window.location.href = "../../vista/usuariosVista/iniciarSesion.php";
        </script>
<?php
    }
}

<?php
session_start();

require_once("../plantillaVista/header.php");
require_once("../../modelo/conexion.php");
require_once("../../modelo/usuariosModelo/usuariosModelo.php");

$UsuarioModel = new usuarioModelo();
$UsuarioModel->setIdUsuario($_GET['idUsuario']);
$ListaDatosUsuario = $UsuarioModel->ListarDatosUsuario();

?>
<div class="d-flex justify-content-center">
    <div class="card col-5">
        <div class="card-body register-card-body">
            <div class="row justify-content-center mb-0">
                <div class="card mb-0" style="width: 100px;">
                    <img src="../publico/dist/img/avatares/<?php echo $ListaDatosUsuario["nombreAvatar"] ?>" class="card-img-top" alt="Avatar">
                </div>
            </div>
            <p class="login-box-msg text-center font-weight-bold mt-0"><?php echo ucfirst(substr($ListaDatosUsuario["nombreAvatar"], 4, -4)); ?></p>
            <form action="../../controlador/usuariosControlador/usuariosControlador.php" method="post">
                <input type="hidden" id="IdUsuario" name="IdUsuario" value="<?php echo $_GET['idUsuario']; ?>">
                <small class="ml-2">Nombres</small>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Nombres" value="<?php echo $ListaDatosUsuario['nombres']; ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <small class="ml-2">Apellidos</small>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos" value="<?php echo $ListaDatosUsuario['apellidos']; ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <small class="ml-2">Fecha de nacimiento</small>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="FechaNacimiento" name="FechaNacimiento" value="<?php echo $ListaDatosUsuario['fechaNacimiento']; ?>" placeholder="Fecha de nacimiento">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-calendar-alt"></span>
                        </div>
                    </div>
                </div>
                <small class="ml-2">Correo electrónico</small>
                <div class="input-group mb-2">
                    <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Correo electrónico" value="<?php echo $ListaDatosUsuario['correo']; ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <small>Administrador</small>
                <div class="input-group mb-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Administrador" id="AdministradorSi" value="1" <?php echo ($ListaDatosUsuario['administrador'] == 1) ? "checked" : ""; ?>>
                        <label class="form-check-label" for="AdministradorSi">Sí</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Administrador" id="AdministradorNo" value="0" <?php echo ($ListaDatosUsuario['administrador'] == 0) ? "checked" : ""; ?>>
                        <label class="form-check-label" for="AdministradorNo">No</label>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-4">
                        <a href="consultarUsuarios.php" class="btn btn-sm btn-outline-danger btn-block">Volver</a>
                    </div>
                    <div class="col-6">
                        <button type="submit" id="EditarUsuario" name="EditarUsuario" class="btn btn-sm btn-outline-primary btn-block">Editar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.card -->
</div>

<?php
require_once("../plantillaVista/footer.php");
?>
<?php
session_start();
require_once("../../modelo/conexion.php");
require_once("../plantillaVista/header.php");
require_once("../../modelo/usuariosModelo/usuariosModelo.php");

$UsuarioModel = new usuarioModelo();
$UsuarioModel->setIdUsuario($_SESSION['IdUsuario']);
$ListaDatosPerfil = $UsuarioModel->ListarDatosUsuario();

?>
<div class="d-flex justify-content-center">
    <div class="card col-5">
        <div class="card-body register-card-body">
            <div class="row justify-content-between">
                <h4>Mis datos</h4>
                <a  href="../../controlador/usuariosControlador/usuariosControlador.php?desactivarMiCuenta=true" id="DesactivarCuenta" name="DesactivarCuenta" class="btn btn-sm btn-outline-warning">Desactivar mi cuenta</a> 
            </div>
            <form action="../../controlador/usuariosControlador/usuariosControlador.php" method="post">
                <input type="hidden" id="Administrador" name="Administrador" value="<?php echo $ListaDatosPerfil['administrador']; ?>">
                <small class="ml-2">Nombres</small>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Nombres" value="<?php echo $ListaDatosPerfil['nombres']; ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <small class="ml-2">Apellidos</small>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos" value="<?php echo $ListaDatosPerfil['apellidos']; ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <small class="ml-2">Fecha de nacimiento</small>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="FechaNacimiento" name="FechaNacimiento" value="<?php echo $ListaDatosPerfil['fechaNacimiento']; ?>" placeholder="Fecha de nacimiento">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-calendar-alt"></span>
                        </div>
                    </div>
                </div>
                <small class="ml-2">Correo electrónico</small>
                <div class="input-group mb-2">
                    <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Correo electrónico" value="<?php echo $ListaDatosPerfil['correo']; ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-around mt-3">
                    <div class="col-4">
                        <a href="../panelAdministrativo/index.php" class="btn btn-sm btn-outline-danger btn-block">Volver</a>
                    </div>
                    <div class="col-6">
                        <button type="submit" id="ActualizarDatos" name="ActualizarDatos" class="btn btn-sm btn-outline-primary btn-block">Actualizar datos</button>
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
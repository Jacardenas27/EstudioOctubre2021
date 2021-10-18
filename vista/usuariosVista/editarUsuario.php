<?php
require_once("../plantillaVista/header.php");
require_once("../../modelo/conexion.php");
require_once("../../modelo/usuariosModelo/usuariosModelo.php");

$UsuarioModel = new usuarioModelo();
$UsuarioModel->setIdUsuario($_GET['idUsuario']);
$ListaDatosUsuario = $UsuarioModel->ListarDatosUsuario();


?>
<div class="d-flex justify-content-center">
    <div class="card col-6">
        <div class="card-body register-card-body">
            <div class="row justify-content-center">
                <div class="card" style="width: 128px;">
                    <img src="../publico/dist/img/avatares/<?php echo $ListaDatosUsuario["nombreAvatar"] ?>" class="card-img-top" alt="Avatar">
                    <!-- <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div> -->
                </div>
            </div>
            <p class="login-box-msg text-center font-weight-bold"><?php echo ucfirst(substr($ListaDatosUsuario["nombreAvatar"], 4, -4)); ?></p>
            <form action="../../controlador/usuariosControlador/usuariosControlador.php" method="post">

                <input type="hidden" id="IdUsuario" name="IdUsuario" value="<?php echo $_GET['idUsuario']; ?>">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Nombres" value="<?php echo $ListaDatosUsuario['nombres']; ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos" value="<?php echo $ListaDatosUsuario['apellidos']; ?>" >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="date" class="form-control" id="FechaNacimiento" name="FechaNacimiento" value="<?php echo $ListaDatosUsuario['fechaNacimiento']; ?>">
                    <div class="input-group-append">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Correo electrónico" value="<?php echo $ListaDatosUsuario['correo']; ?>" >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-6">
                        <button type="submit" id="Registrarse" name="Registrarse" class="btn btn-sm btn-outline-primary btn-block">Editar</button>
                    </div>
                    <div class="col-4">
                        <a href="consultarUsuarios.php" class="btn btn-sm btn-outline-primary btn-block">Volver</a>
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
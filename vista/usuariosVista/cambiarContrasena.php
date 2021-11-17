<?php
require_once("../plantillaVista/header.php");
?>
<div class="d-flex justify-content-center">
    <div class="card col-5">
        <div class="card-body register-card-body">
            <div class="row justify-content-between">
                <h4>Cambiar contraseña</h4>
            </div>
            <form action="../../controlador/usuariosControlador/usuariosControlador.php" method="post">
                <small class="ml-2">Contraseña Actual</small>
                <div class="input-group mb-2">
                    <input type="password" class="form-control" id="ContrasenaActual" name="ContrasenaActual" placeholder="Contraseña actual" value="">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user-lock"></span>
                        </div>
                    </div>
                </div>
                <small class="ml-2">Nueva contraseña</small>
                <div class="input-group mb-2">
                    <input type="password" class="form-control" id="NuevaContrasena" name="NuevaContrasena" placeholder="Nueva contraseña" value="">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <small class="ml-2">Repetir nueva contraseña</small>
                <div class="input-group mb-2">
                    <input type="password" class="form-control" id="RepetirNuevaContrasena" name="RepetirNuevaContrasena" placeholder="Repetir nueva contraseña" value="">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-around mt-3">
                    <div class="col-4">
                        <a href="../panelAdministrativo/index.php" class="btn btn-sm btn-outline-danger btn-block">Volver</a>
                    </div>
                    <div class="col-6">
                        <button type="submit" id="ActualizarContrasena" name="ActualizarContrasena" class="btn btn-sm btn-outline-primary btn-block">Actualizar contraseña</button>
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
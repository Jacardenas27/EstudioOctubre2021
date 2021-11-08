<?php
session_start();
if(!(isset($_SESSION['IdUsuario']))){
    header("Location: cerrarSesion.php"); 
} 
require_once("../plantillaVista/header.php");
?>
<div class="d-flex justify-content-center">
    <div class="card col-5">
        <div class="card-body register-card-body">
            <div class="row justify-content-center mb-0">
                <div class="card mb-0" style="width: 100px;">
                    <img src="../publico/dist/img/avatares/001-antelope.svg" class="card-img-top" alt="Avatar">
                </div>
            </div>
            <p class="login-box-msg text-center font-weight-bold mt-0">Antelope</p>
            <form action="../../controlador/usuariosControlador/usuariosControlador.php" method="post">
                <small class="ml-2">Nombres</small>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Nombres">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <small class="ml-2">Apellidos</small>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <small class="ml-2">Fecha de nacimiento</small>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="FechaNacimiento" name="FechaNacimiento" placeholder="Fecha de nacimiento">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-calendar-alt"></span>
                        </div>
                    </div>
                </div>
                <small class="ml-2">Correo electrónico</small>
                <div class="input-group mb-2">
                    <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Correo electrónico">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <small>Administrador</small>
                <div class="input-group mb-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Administrador" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Sí</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Administrador" id="inlineRadio2" value="0" checked>
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-4">
                        <a href="consultarUsuarios.php" class="btn btn-sm btn-outline-danger btn-block">Volver</a>
                    </div>
                    <div class="col-6">
                        <button type="submit" id="RegistrarUsuario" name="RegistrarUsuario" class="btn btn-sm btn-outline-primary btn-block">Registrar</button>
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
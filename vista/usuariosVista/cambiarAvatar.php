<?php

require_once("../../modelo/conexion.php");
require_once("../plantillaVista/header.php");
require_once("../../modelo/usuariosModelo/usuariosModelo.php");

$UsuarioModel = new usuarioModelo();
$listarAvatares = $UsuarioModel->ListarAvatares();
?>
<div class="d-flex justify-content-center">
    <div class="card col-10">
        <div class="card-body register-card-body">
            <div class="row justify-content-between">
                <h4>Cambiar mi avatar</h4>
            </div>
            <form action="../../controlador/usuariosControlador/usuariosControlador.php" method="post">
                <div class="row justify-content-end">
                    <a href="../panelAdministrativo/index.php" class="btn btn-outline-danger mb-3">Volver</a>
                    <button type="submit" class="btn btn-outline-primary mb-3 ml-3" id="CambiarAvatar">Cambiar avatar</button>
                </div>
                <div class="row justify-content-center">
                    <?php foreach ($listarAvatares as $key => $value) {
                    ?>
                        <div class="col-sm-2">
                            <label for="Avatar<?php echo $key+1?>">
                                <div class="card">
                                    <?php $nombreAvatar= $value['nombreAvatar']?>
                                    <img src="../publico/dist/img/avatares/<?php echo $value['nombreAvatar'] ?>" class="card-img-top" alt="Avatar">
                                    <p class="m-auto"><input type="radio" class="" name="Avatar" id="Avatar<?php echo $key+1?>" value="<?php echo $key+1?>"><?php echo ucfirst(substr($value["nombreAvatar"], 4, -4)); ?></p>
                                </div>
                            </label>
                        </div>

                    <?php } ?>
                </div>
                <div class="row justify-content-end">
                    <a href="../panelAdministrativo/index.php" class="btn btn-outline-danger mt-3">Volver</a>
                    <button type="submit" class="btn btn-outline-primary mt-3 ml-3" id="CambiarAvatar">Cambiar avatar</button>
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
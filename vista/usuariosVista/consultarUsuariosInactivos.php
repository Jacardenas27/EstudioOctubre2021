<?php
session_start();
if(!(isset($_SESSION['IdUsuario']))){
    header("Location: cerrarSesion.php"); 
} 
require_once("../plantillaVista/header.php");
require_once("../../modelo/conexion.php");
require_once("../../modelo/usuariosModelo/usuariosModelo.php");

$UsuarioModel = new usuarioModelo();
$UsuarioModel->setEstado(0);
$ListaUsuarios = $UsuarioModel->ListarUsuarios();

?>
<table class="table table-striped table-borderer bg-white pd-2 rounded" id="tablaConsultarUsuarios">
    <thead class="">
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha Nacimiento</th>
            <th>Correo</th>
            <th>Administrador</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($ListaUsuarios as $value) { ?>
            <?php if ($value['estado'] == 0) { ?>
                <tr>
                    <td><?php echo $value['nombres']; ?></td>
                    <td><?php echo $value['apellidos']; ?></td>
                    <td><?php echo $value['fechaNacimiento']; ?></td>
                    <td><?php echo $value['correo']; ?></td>
                    <td><?php echo ($value['administrador'] == 1) ? "Sí" : "No"; ?> </td>
                    <td>
                        <a href="editarUsuario.php?idUsuario=<?php echo $value['idUsuario'] ?>" id="editarUsuario" name="editarUsuario" class="btn btn-outline-primary" title="Editar usuario">
                            <i class="far fa-edit"></i>
                        </a>
                        <a id="cambiarEstado" name="cambiarEstado" href="../../controlador/usuariosControlador/usuariosControlador.php?idUsuario=<?php echo $value['idUsuario']?>&desactivar=false"  class="btn btn-outline-success" title="Habilitar usuario">
                            <i class="far fa-check-circle"></i>
                        </a>

                    </td>
                </tr>
            <?php
            }
            ?>
        <?php
        }
        ?>

    </tbody>
</table>
<?php
require_once("../plantillaVista/footer.php");
?>
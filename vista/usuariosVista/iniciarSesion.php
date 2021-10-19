<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesión</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../publico/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../publico/dist/css/adminlte.css">
    <link rel="stylesheet" href="../publico/dist/css/estilos.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../publico/plugins/icheck-bootstrap/icheck-bootstrap.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>Estudio</b> 2020
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Ingresar al sistema</p>

                <form action="../../controlador/usuariosControlador/usuariosControlador.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" id="Correo" name="Correo" class="form-control" placeholder="Correo electrónico">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" id="Contrasena" name="Contrasena" class="form-control" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <small class="mb-1">
                        <a href="forgot-password.html">¿Olvídaste la contraseña?</a>
                    </small>
                    <div class="row justify-content-end">
                        <!-- <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Recuerdame
                                </label>
                            </div>
                        </div> -->
                        <!-- /.col -->
                        <div class="col-6">
                            <button type="submit" id="IniciarSesion" name="IniciarSesion" class="btn btn-sm btn-outline-primary btn-block">Iniciar sesión</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->

            </div>
            <!-- /.login-card-body -->
        </div>
        <div class="card mt-1 p-0">
            <div class="card-body login-card-body">
                <p class="mb-0 text-center">
                    <strong>¿Eres nuevo? </strong><a href="registrarse.php" class="text-center">Registrarme en el sistema</a>
                </p>
            </div>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../publico/plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../publico/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../publico/plugins/jquery-validation/jquery.validate.js"></script>
    <!-- AdminLTE App -->
    <script src="../publico/dist/js/adminlte.js"></script>
    <script src="../publico/dist/js/funciones.js"></script>
</body>

</html>
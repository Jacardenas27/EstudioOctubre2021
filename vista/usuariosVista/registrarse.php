<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../publico/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../publico/dist/css/adminlte.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../publico/plugins/icheck-bootstrap/icheck-bootstrap.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <b>Estudio</b> 2021
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Registrarse en el sistema</p>

                <form action="../../index.html" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Nombres">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" id="FechaNacimiento" name="FechaNacimiento">
                        <div class="input-group-append">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Correo electrónico">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="Contrasena" name="Contrasena" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="RepetirContrasena" name="RepetirContrasena" placeholder="Repetir contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <a href="iniciarSesion.php" class="text-center">Ya tengo una cuenta.</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="../publico/plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../publico/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../publico/dist/js/adminlte.js"></script>
</body>

</html>
<?php
require_once("header.php");
?>
<div class="row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>

        <p class="card-text">
          Some quick example text to build on the card title and make up the bulk of the card's
          content.
        </p>

        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div>

    <div class="card card-primary card-outline">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>

        <p class="card-text">
          Some quick example text to build on the card title and make up the bulk of the card's
          content.
        </p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
      </div>
    </div><!-- /.card -->
  </div>
  <!-- /.col-md-6 -->
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h5 class="m-0">Featured</h5>
      </div>
      <div class="card-body">
        <h6 class="card-title">Special title treatment</h6>

        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-sm btn-outline-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="m-0">Featured</h5>
      </div>
      <div class="card-body">
        <h6 class="card-title">Contraseña encriptada</h6>

        <p class="card-text">
          <?php
          $password = password_hash("administrador2021", null);
          echo $password . "<br>";

          echo (password_verify("administrador2021", $password)) ? "Concuerda" : "Incorrecta";
          ?>
        </p>
        <a href="#" class="btn btn-sm btn-outline-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <!-- /.col-md-6 -->
</div>
<!-- /.row -->
<?php
require_once("footer.php");
?>
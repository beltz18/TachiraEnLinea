<?php
  $page = "signup";
  require './server/controllers/__init__.php';
  require './client/partials/head.php';
?>
<body>
  <div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Cargando...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Sign Up Start -->
    <div class="container-fluid">
      <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
          <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
            <div class="text-center mb-4">
              <h3>REGISTRO</h3>
            </div>
            <br>
            <form action="" method="post">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingText" placeholder="Nombre" name="nom_usr" required>
                <label for="floatingText">Nombre completo</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputCedula" placeholder="Cédula" name="ced_usr" pattern="[0-9VEP-]{8,15}" required>
                <label for="floatingInputCedula">Número de cédula</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="correo@correo.com" name="ema_usr" required>
                <label for="floatingInput">Correo electrónico</label>
              </div>
              <div class="form-floating mb-4">
                <input type="password" class="form-control" id="floatingPassword" placeholder="**********" name="psw_usr" required>
                <label for="floatingPassword">Contraseña</label>
              </div>
              <br>
              <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Registrar</button>
            </form>
            <?php require './server/controllers/registro.php'; ?>
            <p class="text-center mb-0">Ya tengo una cuenta <a href="./signin.php">Iniciar sesión</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Sign Up End -->
  </div>
</body>
<?php require './client/partials/footer.php'; ?>
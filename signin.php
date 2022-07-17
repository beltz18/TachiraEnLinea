<?php
  $page = "signin";
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

    <!-- Sign In Start -->
    <div class="container-fluid">
      <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
          <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
            <div class="text-center mb-4">
              <h3>INICIAR</h3>
            </div>
            <br>
            <form action="" method="post">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Correo" required>
                <label for="floatingInput">Correo</label>
              </div>
              <div class="form-floating mb-4">
                <input type="password" class="form-control" id="floatingPassword" placeholder="**********" required>
                <label for="floatingPassword">Contraseña</label>
              </div>
              <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                </div>
                <a href="#">Olvidé mi contraseña</a>
              </div>
              <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Iniciar sesión</button>
            </form>
            <p class="text-center mb-0">No tengo cuenta <a href="./signup.html">Registrarme</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Sign In End -->
  </div>
</body>
<?php require './client/partials/footer.php'; ?>
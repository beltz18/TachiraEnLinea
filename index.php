<?php
  $page = "index";
  require './server/controllers/__init__.php';
  require './client/partials/head.php';

  if (!isset($_SESSION['logged'])):
    header("location: signin.php");
  endif;
?>
<body>
  <div class="container-xxl position-relative bg-white d-flex p-0">
    <?php
      require './client/partials/spinner.php';
      require './client/partials/sidebar.php';
    ?>
    <div class="content">
      <?php require './client/partials/navbar.php'; ?>

      <!-- Sale & Revenue Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-line fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Venta diaria</p>
                <h6 class="mb-0">$1500.00</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-bar fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Venta semanal</p>
                <h6 class="mb-0">$1500.00</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-area fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Ganancias hoy</p>
                <h6 class="mb-0">$1500.00</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-pie fa-3x text-primary"></i>
              <div class="ms-3">
                <p class="mb-2">Ganancias totales</p>
                <h6 class="mb-0">$1500.00</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Sale & Revenue End -->

      <!-- Sales Chart Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
          <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Ventas</h6>
                <a href="">Mostrar todo</a>
              </div>
              <canvas id="worldwide-sales"></canvas>
            </div>
          </div>
          <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Inversión y Ganancias</h6>
                <a href="">Mostrar todo</a>
              </div>
              <canvas id="salse-revenue"></canvas>
            </div>
          </div>
        </div>
      </div>
      <!-- Sales Chart End -->

      <!-- Recent Sales Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
          <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Inversión Reciente</h6>
            <a href="">Mostrar todo</a>
          </div>
          <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
              <thead>
                <tr class="text-dark">
                  <th scope="col"><input class="form-check-input" type="checkbox"></th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Código</th>
                  <th scope="col">Vendedor</th>
                  <th scope="col">Monto</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Acción</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input class="form-check-input" type="checkbox"></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>Jhon Doe</td>
                  <td>$123</td>
                  <td>Pagado</td>
                  <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                </tr>
                <tr>
                  <td><input class="form-check-input" type="checkbox"></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>Jhon Doe</td>
                  <td>$123</td>
                  <td>Pagado</td>
                  <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                </tr>
                <tr>
                  <td><input class="form-check-input" type="checkbox"></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>Jhon Doe</td>
                  <td>$123</td>
                  <td>Pagado</td>
                  <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                </tr>
                <tr>
                  <td><input class="form-check-input" type="checkbox"></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>Jhon Doe</td>
                  <td>$123</td>
                  <td>Pagado</td>
                  <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                </tr>
                <tr>
                  <td><input class="form-check-input" type="checkbox"></td>
                  <td>01 Jan 2045</td>
                  <td>INV-0123</td>
                  <td>Jhon Doe</td>
                  <td>$123</td>
                  <td>Pagado</td>
                  <td><a class="btn btn-sm btn-primary" href="">Detalles</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- Recent Sales End -->

      <!-- Widgets Start -->
      <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
          <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-light rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-2">
                <h6 class="mb-0">Mensajes</h6>
                <a href="">Show All</a>
              </div>
              <div class="d-flex align-items-center border-bottom py-3">
                <img class="rounded-circle flex-shrink-0" src="./client/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="w-100 ms-3">
                  <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-0">Jhon Doe</h6>
                    <small>15 minutes ago</small>
                  </div>
                  <span>Short message goes here...</span>
                </div>
              </div>
              <div class="d-flex align-items-center border-bottom py-3">
                <img class="rounded-circle flex-shrink-0" src="./client/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="w-100 ms-3">
                  <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-0">Jhon Doe</h6>
                    <small>15 minutes ago</small>
                  </div>
                  <span>Short message goes here...</span>
                </div>
              </div>
              <div class="d-flex align-items-center border-bottom py-3">
                <img class="rounded-circle flex-shrink-0" src="./client/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="w-100 ms-3">
                  <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-0">Jhon Doe</h6>
                    <small>15 minutes ago</small>
                  </div>
                  <span>Short message goes here...</span>
                </div>
              </div>
              <div class="d-flex align-items-center pt-3">
                <img class="rounded-circle flex-shrink-0" src="./client/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="w-100 ms-3">
                  <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-0">Jhon Doe</h6>
                    <small>15 minutes ago</small>
                  </div>
                  <span>Short message goes here...</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-light rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Calender</h6>
                <a href="">Show All</a>
              </div>
              <div id="calender"></div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-xl-4">
            <div class="h-100 bg-light rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">To Do List</h6>
                <a href="">Show All</a>
              </div>
              <div class="d-flex mb-2">
                <input class="form-control bg-transparent" type="text" placeholder="Enter task">
                <button type="button" class="btn btn-primary ms-2">Add</button>
              </div>
              <div class="d-flex align-items-center border-bottom py-2">
                <input class="form-check-input m-0" type="checkbox">
                <div class="w-100 ms-3">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <span>Short task goes here...</span>
                    <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center border-bottom py-2">
                <input class="form-check-input m-0" type="checkbox">
                <div class="w-100 ms-3">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <span>Short task goes here...</span>
                    <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center border-bottom py-2">
                <input class="form-check-input m-0" type="checkbox" checked>
                <div class="w-100 ms-3">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <span><del>Short task goes here...</del></span>
                    <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center border-bottom py-2">
                <input class="form-check-input m-0" type="checkbox">
                <div class="w-100 ms-3">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <span>Short task goes here...</span>
                    <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center pt-2">
                <input class="form-check-input m-0" type="checkbox">
                <div class="w-100 ms-3">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <span>Short task goes here...</span>
                    <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Widgets End -->
    </div>
    <!-- Content End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>
</body>
<?php require './client/partials/footer.php'; ?>
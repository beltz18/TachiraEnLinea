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
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Cargando...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
      <nav class="navbar bg-light navbar-light">
        <a href="./index.php" class="navbar-brand mx-4 mb-3">
          <h3 class="text-primary"><?php echo $title; ?></h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
          <div class="position-relative">
            <img class="rounded-circle" src="./client/img/user.jpg" alt="" style="width: 40px; height: 40px;">
            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
          </div>
          <div class="ms-3">
            <h6 class="mb-0">Jhon Doe</h6>
            <span>Administrador</span>
          </div>
        </div>
        <div class="navbar-nav w-100">
          <a href="./index.php" class="nav-item nav-link active"><i class="fa fa-home me-2"></i>Inicio</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-pencil-alt me-2"></i>Registro</a>
            <div class="dropdown-menu bg-transparent border-0">
              <a href="#" class="dropdown-item">Buttons</a>
              <a href="#" class="dropdown-item">Typography</a>
              <a href="#" class="dropdown-item">Other Elements</a>
            </div>
          </div>
          <a href="#" class="nav-item nav-link"><i class="fa fa-search me-2"></i>Consulta</a>
          <a href="#" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Perfil</a>
          <a href="#" class="nav-item nav-link"><i class="fa fa-cog me-2"></i>Configuración</a>
          <a href="./server/controllers/logout.php" class="nav-item nav-link"><i class="fa fa-power-off me-2"></i>Cerrar sesión</a>
        </div>
      </nav>
    </div>
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="content">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
          <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
          <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
          <input class="form-control border-0" type="search" placeholder="Buscar...">
        </form>
        <div class="navbar-nav align-items-center ms-auto">
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <i class="fa fa-envelope me-lg-2"></i>
              <span class="d-none d-lg-inline-flex">Mensajes</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
              <a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="./client/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                  <div class="ms-2">
                    <h6 class="fw-normal mb-0">Jhon te envió un mensaje</h6>
                    <small>Hace 15 minutos</small>
                  </div>
                </div>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="./client/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                  <div class="ms-2">
                    <h6 class="fw-normal mb-0">Jhon te envió un mensaje</h6>
                    <small>Hace 15 minutos</small>
                  </div>
                </div>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <div class="d-flex align-items-center">
                  <img class="rounded-circle" src="./client/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                  <div class="ms-2">
                    <h6 class="fw-normal mb-0">Jhon te envió un mensaje</h6>
                    <small>Hace 15 minutos</small>
                  </div>
                </div>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item text-center">Ver todos</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <i class="fa fa-bell me-lg-2"></i>
              <span class="d-none d-lg-inline-flex">Notificaciones</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">Perfil actualizado</h6>
                <small>Hace 15 minutos</small>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">Nuevo usuario agregado</h6>
                <small>Hace 15 minutos</small>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item">
                <h6 class="fw-normal mb-0">Contraseña cambiada</h6>
                <small>Hace 15 minutos</small>
              </a>
              <hr class="dropdown-divider">
              <a href="#" class="dropdown-item text-center">Ver todas</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <img class="rounded-circle me-lg-2" src="./client/img/user.jpg" alt="" style="width: 40px; height: 40px;">
              <span class="d-none d-lg-inline-flex">John Doe</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
              <a href="#" class="dropdown-item">Mi perfil</a>
              <a href="#" class="dropdown-item">Configuración</a>
              <a href="./server/controllers/logout.php" class="dropdown-item">Cerrar sesión</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

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
<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-2 py-0">
  <a href="#" class="sidebar-toggler flex-shrink-0">
    <i class="fa fa-bars"></i>
  </a>
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
        <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['name']; ?></span>
      </a>
      <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
        <a href="#" class="dropdown-item">Mi perfil</a>
        <a href="#" class="dropdown-item">Configuración</a>
        <a href="./server/controllers/logout.php" class="dropdown-item">Cerrar sesión</a>
      </div>
    </div>
  </div>
</nav>
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
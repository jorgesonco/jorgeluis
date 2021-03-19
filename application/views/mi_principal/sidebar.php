<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../../index3.html" class="brand-link">
    <img src="<?= base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">INICIO</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Administrador Principal</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Inicio
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url(); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pagina principal</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-alt "></i>
            <p>
              Usuarios
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url(); ?>pasantes/crear" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Registrar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>pasantes/index" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>listar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?= base_url(); ?>pasantes/registro" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Personal
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th-list "></i>
            <p>
              Informaciòn laboral
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../UI/general.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Guardar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../UI/icons.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Actualizar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../UI/buttons.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Editar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../UI/sliders.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Borrar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-pdf"></i>
            <p>
              Reportes
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../forms/general.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Guardar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../forms/advanced.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Actualizar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../forms/editors.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Editar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../forms/validation.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Borrar</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
  <!-- /.sidebar -->
</aside>
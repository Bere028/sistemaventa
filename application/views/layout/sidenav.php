<body class="bg-default">
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white text-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="<?php echo base_url(); ?>assets/img/logo.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link nav-dashboard" href="<?php echo base_url(); ?>dashboard">
                <i class="ni ni-tv-2 text-default"></i>
                <span class="tex-dark text-fontl5">Página principal</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-category" href="<?php  echo base_url(); ?>categorias">
                <i class="ni ni-tag text-default"></i>
                <span class="tex-dark text-fontl4">Categorias</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-product" href="<?php  echo base_url(); ?>productos">
                <i class="ni ni-box-2 text-default"></i>
                <span class="tex-dark text-fontl6">Productos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-client" href="<?php  echo base_url(); ?>clientes">
                <i class="ni ni-single-02 text-default"></i>
                <span class="tex-dark text-fontl7">Clientes</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-user" href="<?php  echo base_url(); ?>usuarios">
                <i class="ni ni-circle-08 text-default"></i>
                <span class="tex-dark text-fontl9">Usuarios</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-sale" href="<?php  echo base_url(); ?>ventas">
                <i class="ni ni-cart text-default"></i>
                <span class="tex-dark text-fontl8">Ventas</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
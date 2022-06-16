<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">

      <a href="./" class="site_title"><img src="<?= media() ?>/images/favicon/logo.png" class="img-responsive"></i> 
      <span><?= $data['page_title'] ?>!</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <!-- <img src="<?= media() ?>/images/img.jpg" alt="Assets." class="img-circle profile_img"> -->
        <img src="<?= media() ?>/images/avatar.png" alt="Assets." class="img-circle profile_img">

      </div>
      <div class="profile_info">
        <!-- <span>Welcome,</span>
        <h2>Jose Daniel Grijalba Osorio</h2> -->
        <span><?= $_SESSION['userData']['nombres']; ?></span>
          <h2 class="app-sidebar__user-designation"><?= $_SESSION['userData']['nombrerol']; ?></h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="<?php base_url();?>/www/TIENDA/dashboard"><i class="fa fa-home"></i> Inicio </a>
          </li>
          <li><a><i class="app-menu__icon fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?= base_url() ?>/usuarios">Usuarios</a></li>
              <li><a href="<?= base_url() ?>/roles">Roles</a></li>
              <li><a href="<?= base_url() ?>/permisos">Permisos</a></li>
            </ul>
          </li>

          <li><a href="<?= base_url() ?>/clientes"><i class="app-menu__icon fa fa-user"></i> Clientes</a>
          </li>
          <li><a><i class="app-menu__icon fa fa-archive"></i> Tienda <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?= base_url() ?>/productos">Productos</a></li>
              <li><a href="<?= base_url() ?>/categorias">Categorias</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url() ?>/pedidos"><i class="app-menu__icon fa fa-shopping-cart"></i> Pedidos </a>
          </li>
          <li><a href="<?= base_url() ?>/subscritores"><i class="app-menu__icon fas fa-user-tie"></i>Subscritores</a>
          </li>
          <li><a href="<?= base_url() ?>/mensajes"><i class="app-menu__icon fas fa-envelope"></i> Mensajes</a>
          </li>
          <li><a href="<?= base_url() ?>/paginas"><i class="app-menu__icon fas fa-file-alt"></i> Paginas</a>
          </li>
        </ul>
      </div>


    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <!-- <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a> -->
      <a data-toggle="tooltip">
        <span class="glyphicon"></span>
      </a>
      <a data-toggle="tooltip">
        <span class="glyphicon"></span>
      </a>
      <!-- <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a> -->

      <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url() ?>/logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
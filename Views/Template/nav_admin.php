      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?= media() ?>/images/avatar.png" alt="">
                  <span><?= $_SESSION['userData']['nombres']; ?></span>

                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?= base_url() ?>/usuarios/perfil"> Perfil</a>
                  <a class="dropdown-item" href="<?= base_url() ?>/dashboard">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Opciones</span>
                  </a>
                  <a class="dropdown-item" href="javascript:;">Ayuda</a>
                  <a class="dropdown-item" href="<?= base_url() ?>/logout">
                    <i class="fa fa-sign-out pull-right"></i> Salir</a>
                </div>
              </li>

              <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="<?= media() ?>/images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were whereAssets.
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="<?= media() ?>/images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were whereAssets.
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="<?= media() ?>/images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were whereAssets.
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="<?= media() ?>/images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were whereAssets.
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->
      <!-- left Column -->
      <div class="col-md-3 left_col">
        <div class="left_col">
          <div class="navbar nav_title" style="border: 0;">

            <a href="./" class="site_title"><img src="<?= media() ?>/images/favicon/logo.png" class="img-responsive"></i>
              <span><?= $data['page_title'] ?>!</span></a>
          </div>
          <div class="clearfix"></div>
          <br>
          <br>
          <br>
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
          <div class="scroll-sidebar">
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <?php if (!empty($_SESSION['permisos'][1]['r'])) { ?>
                    <li> <a class="app-menu__item" href="<?= base_url(); ?>/dashboard">
                        <i class="fa fa-home"></i> Inicio </a>
                    </li>
                  <?php } ?>
                  <li>
                    <a class="app-menu__item" href="<?= base_url(); ?>" target="_blank">
                      <i class="app-menu__icon fa fas fa-globe" aria-hidden="true"></i>
                      <span class="app-menu__label">Ver sitio web</span>
                    </a>
                  </li>

                  <?php if (!empty($_SESSION['permisos'][2]['r'])) { ?>
                    <li><a class="app-menu__item"><i class="app-menu__icon fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="<?= base_url() ?>/usuarios">Usuarios</a></li>
                        <li><a href="<?= base_url() ?>/roles">Roles</a></li>
                        <!-- <li><a href="<?= base_url() ?>/permisos">Permisos</a></li> -->
                      </ul>
                    </li>
                  <?php } ?>
                  <?php if (!empty($_SESSION['permisos'][3]['r'])) { ?>
                    <li><a class="app-menu__item" href="<?= base_url() ?>/clientes"><i class="app-menu__icon fa fa-user"></i> Clientes</a>
                    </li>
                  <?php } ?>
                  <?php if (!empty($_SESSION['permisos'][4]['r']) || !empty($_SESSION['permisos'][6]['r'])) { ?>
                    <li><a class="app-menu__item"><i class="app-menu__icon fa fa-archive"></i> Tienda <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <?php if (!empty($_SESSION['permisos'][4]['r'])) { ?>

                          <li><a href="<?= base_url() ?>/productos">Productos</a></li>
                        <?php } ?>
                        <?php if (!empty($_SESSION['permisos'][6]['r'])) { ?>
                          <li><a href="<?= base_url() ?>/categorias">Categorias</a></li>
                        <?php } ?>

                      </ul>
                    </li>
                  <?php } ?>
                  <?php if (!empty($_SESSION['permisos'][5]['r'])) { ?>
                    <li><a class="app-menu__item" href="<?= base_url() ?>/pedidos"><i class="app-menu__icon fa fa-shopping-cart"></i> Pedidos </a>
                    </li>
                  <?php } ?>

                  <?php if (!empty($_SESSION['permisos'][MSUSCRIPTORES]['r'])) { ?>
                    <li><a class="app-menu__item" href="<?= base_url() ?>/suscriptores"><i class="app-menu__icon fas fa-user-tie"></i>Suscritores</a>
                    </li>
                  <?php } ?>

                  <?php if (!empty($_SESSION['permisos'][MDCONTACTOS]['r'])) { ?>
                    <li><a class="app-menu__item" href="<?= base_url() ?>/contactos"><i class="app-menu__icon fas fa-envelope"></i> Mensajes</a>
                    </li>
                  <?php } ?>

                  <?php if (!empty($_SESSION['permisos'][MDPAGINAS]['r'])) { ?>
                    <li><a class="app-menu__item" href="<?= base_url() ?>/paginas"><i class="app-menu__icon fas fa-file-alt"></i> Paginas</a>
                    </li>
                  <?php } ?>

                </ul>
              </div>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Herramientas">
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

            <a data-toggle="tooltip" data-placement="top" title="Salir" href="<?= base_url() ?>/logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>
      <!-- left Column -->
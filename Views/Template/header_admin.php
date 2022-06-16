        <!DOCTYPE html>
        <html lang="en">

        <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <!-- Meta, title, CSS, favicons, etc. -->
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="icon" href="<?= media() ?>/images/favicon.ico" type="image/ico" />

          <title><?= $data['page_tag'] ?></title>

          <!-- Bootstrap -->
          <link href="<?= media() ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
          <!-- Font Awesome -->
          <link href="<?= media() ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
          <!-- NProgress -->
          <link href="<?= media() ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
          <!-- iCheck -->
          <link href="<?= media() ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

          <!-- bootstrap-progressbar -->
          <link href="<?= media() ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
          <!-- JQVMap -->
          <link href="<?= media() ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
          <!-- bootstrap-daterangepicker -->
          <link href="<?= media() ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
          <!-- <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css"> -->

          <!-- Custom Theme Style -->
          <link href="<?= media() ?>/build/css/custom.min.css" rel="stylesheet">
        </head>

        <body class="nav-md">
          <div class="container body">
            <div class="main_container">
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
                          <!-- <img src="<?= media() ?>/images/img.jpg" alt="">John Doe -->
                          <img src="<?= media() ?>/images/avatar.png" alt="">John Doe
                        </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="<?= base_url() ?>/perfil"> Perfil</a>
                          <a class="dropdown-item" href="<?= base_url() ?>/dashboard">
                            <span class="badge bg-red pull-right">50%</span>
                            <span>Opciones</span>
                          </a>
                          <a class="dropdown-item" href="javascript:;">Help</a>
                          <a class="dropdown-item" href="<?= base_url() ?>/logout">
                          <i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
              <?php require_once 'nav_admin.php' ?>
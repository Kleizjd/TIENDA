<?php headerAdmin($data); getModal('modalPerfil', $data); ?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>User Profile</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>User Report <small>Activity report</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="col-md-3 col-sm-3  profile_left">
              <div class="profile_img">
                <div id="crop-avatar">
                  <!-- Current avatar -->
                  <img class="img-responsive avatar-view" src="<?= media() ?>/images/uploads/jose.jpg" alt="Avatar" title="Change the avatar">
                  <!-- <img class="img-responsive avatar-view" src="<?= media() ?>/images/picture.jpg" alt="Avatar" title="Change the avatar"> -->
                </div>
              </div>
              <h2><?= $_SESSION['userData']['nombres']; ?></h2>
              <ul class="list-unstyled user_data">
                <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                </li>

                <li>
                  <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                </li>

                <li class="m-top-xs">
                  <i class="fa fa-external-link user-profile-icon"></i>
                  <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                </li>
              </ul>
              <br />
              <!-- start skills -->
              <h4>Skills</h4>
              <ul class="list-unstyled user_data">
                <li>
                  <p>Web Applications</p>
                  <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                  </div>
                </li>
                <li>
                  <p>Website Design</p>
                  <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                  </div>
                </li>
                <li>
                  <p>Automation & Testing</p>
                  <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                  </div>
                </li>
                <li>
                  <p>UI / UX</p>
                  <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                  </div>
                </li>
              </ul>
              <!-- end of skills -->
            </div>
            <div class="col-md-9 col-sm-9 ">
              <div class="profile_title">
                <div class="col-md-6">
                  <h2>User Activity Report</h2>
                </div>
                <div class="col-md-6">
                  <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                  </div>
                </div>
              </div>
              <!-- start of user-activity-graph -->
              <!-- Column -->
              <div class="col-lg-12 col-xlg-12 col-md-12">
                <div class="card">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Perfil</a> </li>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home" role="tab">Datos Fiscales</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Configuraciones</a> </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div class="tab-pane " id="home" role="tabpanel">
                      <div class="card-body">
                        <div class="profiletimeline">
                          <div class="sl-item">
                            <div class="sl-left"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle" /> </div>
                            <div class="sl-right">
                              <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                <p>assign a new task <a href="javascript:void(0)"> Design weblayout</a></p>
                                <div class="row">
                                  <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img1.jpg" class="img-responsive radius" /></div>
                                  <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img2.jpg" class="img-responsive radius" /></div>
                                  <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img3.jpg" class="img-responsive radius" /></div>
                                  <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/images/big/img4.jpg" class="img-responsive radius" /></div>
                                </div>
                                <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                              </div>
                            </div>
                          </div>
                          <hr>
                          <div class="sl-item">
                            <div class="sl-left"> <img src="../assets/images/users/2.jpg" alt="user" class="img-circle" /> </div>
                            <div class="sl-right">
                              <div> <a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                <div class="m-t-20 row">
                                  <div class="col-md-3 col-xs-12"><img src="../assets/images/big/img1.jpg" alt="user" class="img-responsive radius" /></div>
                                  <div class="col-md-9 col-xs-12">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="javascript:void(0)" class="btn btn-success"> Design weblayout</a>
                                  </div>
                                </div>
                                <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                              </div>
                            </div>
                          </div>
                          <hr>
                          <div class="sl-item">
                            <div class="sl-left"> <img src="../assets/images/users/3.jpg" alt="user" class="img-circle" /> </div>
                            <div class="sl-right">
                              <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                              </div>
                              <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                            </div>
                          </div>
                          <hr>
                          <div class="sl-item">
                            <div class="sl-left"> <img src="../assets/images/users/4.jpg" alt="user" class="img-circle" /> </div>
                            <div class="sl-right">
                              <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                <blockquote class="m-t-10">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                </blockquote>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--second tab-->
                    <div class="tab-pane active" id="profile" role="tabpanel">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-3 col-xs-6 b-r"> <strong>Nombre</strong>
                            <br>
                            <p class="text-muted"><?= $_SESSION['userData']['nombres']; ?></p>
                          </div>
                          <div class="col-md-3 col-xs-6 b-r"> <strong>Apellido</strong>
                            <br>
                            <p class="text-muted"><?= $_SESSION['userData']['apellidos']; ?></p>
                          </div>
                          <div class="col-md-3 col-xs-6 b-r"> <strong>Cedula de Identificación</strong>
                            <br>
                            <p class="text-muted"><?= $_SESSION['userData']['identificacion']; ?></p>
                          </div>
                          <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                            <br>
                            <p class="text-muted"><?= $_SESSION['userData']['email_user']; ?></p>
                          </div>
                          <!-- <div class="col-md-3 col-xs-6"> <strong>Location</strong><br><p class="text-muted">London</p></div> -->
                        </div>
                        <hr>
                        <p class="m-t-30"></p>

                      </div>
                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel">
                      <div class="card-body">
                        <form class="form-horizontal form-material">
                          <div class="form-group">
                            <label class="col-md-12">Nombre</label>
                            <div class="col-md-12">
                              <input type="text" placeholder="<?= $_SESSION['userData']['nombres']; ?>" class="form-control form-control-line">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-12">Apellido</label>
                            <div class="col-md-12">
                              <input type="text" placeholder="<?= $_SESSION['userData']['apellidos']; ?>" class="form-control form-control-line">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-12">Identificación</label>
                            <div class="col-md-12">
                              <input type="text" placeholder="<?= $_SESSION['userData']['identificacion']; ?>" class="form-control form-control-line">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="example-email" class="col-md-12">Correo Electronico</label>
                            <div class="col-md-12">
                              <input type="email" placeholder="<?= $_SESSION['userData']['email_user']; ?>" class="form-control form-control-line" name="example-email" id="example-email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-12">Contraseña</label>
                            <div class="col-md-12">
                              <input type="password" value="password" class="form-control form-control-line">
                            </div>
                          </div>
<!-- 
                          <div class="form-group">
                            <label class="col-sm-12">Select Country</label>
                            <div class="col-sm-12">
                              <select class="form-control form-control-line">
                                <option>London</option>
                                <option>India</option>
                                <option>Usa</option>
                                <option>Canada</option>
                                <option>Thailand</option>
                              </select>
                            </div>
                          </div> -->
                          <div class="form-group">
                            <div class="col-sm-12 text-center">
                              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar Cambios</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Column -->
              <!-- end of user-activity-graph -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<?php footerAdmin($data); ?>
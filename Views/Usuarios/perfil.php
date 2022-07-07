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
                </div>
              </div>
              <h2 align="center"><?= $_SESSION['userData']['nombres']; ?>
                <?= $_SESSION['userData']['apellidos']; ?>
              </h2>
              </h2>
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
              </div>
              <!-- start of user-activity-graph -->
              <!-- Column -->
              <div class="col-lg-12 col-xlg-12 col-md-12">
                <div class="card">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Perfil</a> </li>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#fiscales" role="tab">Datos Fiscales</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Configuraciones</a> </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div class="tab-pane " id="fiscales" role="tabpanel">
                      <div class="card-body">
                        <form id="formDataFiscal" name="formDataFiscal">
                          <div class="row mb-4">
                            <div class="col-md-6">
                              <label>Identificación Tributaria</label>
                              <input class="form-control" type="text" id="txtNit" name="txtNit" value="<?= $_SESSION['userData']['nit']; ?>">
                            </div>
                            <div class="col-md-6">
                              <label>Nombre fiscal</label>
                              <input class="form-control" type="text" id="txtNombreFiscal" name="txtNombreFiscal" value="<?= $_SESSION['userData']['nombrefiscal']; ?>">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-4">
                              <label>Dirección fiscal</label>
                              <input class="form-control" type="text" id="txtDirFiscal" name="txtDirFiscal" value="<?= $_SESSION['userData']['direccionfiscal']; ?>">
                            </div>
                          </div>
                          <div class="row mb-10">
                            <div class="col-md-12">
                              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Guardar</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!--second tab-->
                    <div class="tab-pane" id="profile" role="tabpanel">
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
                          <div class="col-md-3 col-xs-6 b-r"> <strong>Celular</strong>
                            <br>
                            <p class="text-muted"><?= $_SESSION['userData']['telefono']; ?></p>
                          </div>
                          <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                            <br>
                            <p class="text-muted"><?= $_SESSION['userData']['email_user']; ?></p>
                          </div>
                        </div>
                        <hr>
                        <p class="m-t-30"></p>

                      </div>
                    </div>
                    <div class="tab-pane active" id="settings" role="tabpanel">
                      <div class="card-body">
                        <form id="formPerfil" name="formPerfil" class="form-horizontal">
                          <p class="text-primary">Los campos con asterisco (<span style="color:red">*</span>) son obligatorios.</p>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="txtIdentificacion">Identificación <span style="color:red">*</span></label>
                              <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" value="<?= $_SESSION['userData']['identificacion']; ?>" required="">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="txtNombre">Nombres <span style="color:red">*</span></label>
                              <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre" value="<?= $_SESSION['userData']['nombres']; ?>" required="">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="txtApellido">Apellidos <span style="color:red">*</span></label>
                              <input type="text" class="form-control valid validText" id="txtApellido" name="txtApellido" value="<?= $_SESSION['userData']['apellidos']; ?>" required="">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="txtTelefono">Teléfono <span style="color:red">*</span></label>
                              <input type="text" class="form-control valid validNumber" id="txtTelefono" name="txtTelefono" value="<?= $_SESSION['userData']['telefono']; ?>" required="" onkeypress="return controlTag(event);">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="txtEmail">Email</label>
                              <input type="email" class="form-control valid validEmail" id="txtEmail" name="txtEmail" value="<?= $_SESSION['userData']['email_user']; ?>" required="" readonly disabled>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="txtPassword">Password</label>
                              <input type="password" class="form-control" id="txtPassword" name="txtPassword">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="txtPasswordConfirm">Confirmar Password</label>
                              <input type="password" class="form-control" id="txtPasswordConfirm" name="txtPasswordConfirm">
                            </div>
                          </div>
                          <div class="tile-footer">
                            <button id="btnActionForm" class="btn btn-info" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Actualizar</span></button>
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
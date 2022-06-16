       <?php headerTienda($data);
		getModal('modalUsuarios', $data); ?>
       <!-- page content -->
       <div class="right_col" role="main">
       	<div class="">
       		<div class="page-title">
       			<div class="title_left">
       				<!-- <h3>Usuarios</h3> -->
       				<h3><i class="fas fa-user-tag"></i> <?= $data['page_title'] ?>
       				</h3>
       			</div>

       			<div class="title_right">
       				<div class="col-md-5 col-sm-5  form-group pull-right top_search">
       					<div class="input-group center">
       						<ul class="app-breadcrumb breadcrumb">
       							<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
       							<li class="breadcrumb-item"><a href="<?= base_url(); ?>/usuarios"><?= $data['page_title'] ?></a></li>
       						</ul>
       					</div>
       				</div>
       			</div>
       		</div>
       		<div class="clearfix">
       			<div class="row">
       				<div class="col-md-12 col-sm-12 ">
       					<div class="x_panel">
       						<div class="x_title">
       							<!-- <h2>Form Design <small>different form elements</small></h2> -->
       							<!-- <?php if ($_SESSION['permisosMod']['w']) { ?> -->
       								<button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus-circle"></i> Nuevo</button>
       							<!-- <?php } ?> -->
       							<!-- <ul class="nav navbar-right panel_toolbox">
       								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
       								</li>
       								<li class="dropdown">
       									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
       									<ul class="dropdown-menu" role="menu">
       										<li><a class="dropdown-item" href="#">Settings 1</a>
       										</li>
       										<li><a class="dropdown-item" href="#">Settings 2</a>
       										</li>
       									</ul>
       								</li>
       								<li><a class="close-link"><i class="fa fa-close"></i></a>
       								</li>
       							</ul> -->
       							<div class="clearfix"></div>
       						</div>
       						<div class="x_content">
       							<!-- <div class="row"> -->
       							<div class="col-md-12 col-sm-12 ">
       								<div class="x_panel">
       									<div class="row">
       										<div class="col-md-12">
       											<div class="tile">
       												<div class="tile-body">
       													<div class="table-responsive">
       														<table class="table table-hover table-bordered" id="tableUsuarios">
       															<thead>
       																<tr>
       																	<th>ID</th>
       																	<th>Nombres</th>
       																	<th>Apellidos</th>
       																	<th>Email</th>
       																	<th>Teléfono</th>
       																	<th>Rol</th>
       																	<th>Status</th>
       																	<th>Acciones</th>
       																</tr>
       															</thead>
       															<tbody>
       																<tr>
       																	<td>1</td>
       																	<td>Carlos</td>
       																	<td>Henández</td>
       																	<td>carlos@info.com</td>
       																	<td>78542155</td>
       																	<td>Administrador</td>
       																	<td>Activo</td>
       																	<td></td>
       																</tr>
       															</tbody>
       														</table>
       													</div>
       												</div>
       											</div>
       										</div>
       									</div>
       								</div>
       							</div>
       						</div>
       					</div>


       				</div>
       			</div>
       		</div>
       	</div>
       </div>
       <!-- /page content -->

       <!-- footer content -->
       <?php footerTienda($data); ?>
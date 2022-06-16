       <?php headerTienda($data); getModal('modalUsuarios', $data); ?>
       <!-- page content -->
       <div class="right_col" role="main">
       	<div class="">
       		<div class="page-title">
       			<div class="title_left">
       				<h3>Titulo</h3>
       			</div>

       			<div class="title_right">
       				<div class="col-md-5 col-sm-5  form-group pull-right top_search">
       					<div class="input-group">
       						<input type="text" class="form-control" placeholder="Search for<?= media(); ?>.">
       						<span class="input-group-btn">
       							<button class="btn btn-default" type="button">Go!</button>
       						</span>
       					</div>
       				</div>
       			</div>
       		</div>
       		<div class="clearfix">
       			<div class="row">
       				<div class="col-md-12 col-sm-12 ">
       					<div class="x_panel">
       						<div class="x_title">
       							<h2>Form Design <small>different form elements</small></h2>
       							<ul class="nav navbar-right panel_toolbox">
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
       							</ul>
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
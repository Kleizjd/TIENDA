       <?php headerAdmin($data); getModal('modalClientes', $data); ?>
       <!-- page content -->
       <div id="contentAjax"></div>
       <div class="right_col" role="main">
       	<div class="">
       		<div class="page-title">
       			<div class="title_left">
       				<h4><i class="fas fa-user-tag"></i> <?= $data['page_title'] ?>
       				</h4>
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
       								<?php if ($_SESSION['permisosMod']['w']) { ?>
       									<button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus-circle"></i> Nuevo</button>
       								<?php } ?>
       							<div class="clearfix"></div>
       						</div>
       						<div class="x_content">
       							<div class="col-md-12 col-sm-12 ">
       								<div class="x_panel">
       									<div class="row">
       										<div class="col-md-12">
       											<div class="tile">
       												<div class="tile-body">
       													<div class="table-responsive">
       														<table class="table table-hover table-bordered" id="tableClientes">
       															<thead>
       																<tr>
       																	<th>ID</th>
       																	<th>Identificación</th>
       																	<th>Nombres</th>
       																	<th>Apellidos</th>
       																	<th>Email</th>
       																	<th>Teléfono</th>
       																	<th>Acciones</th>
       																</tr>
       															</thead>
       															<tbody>
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
       <?php footerAdmin($data); ?>
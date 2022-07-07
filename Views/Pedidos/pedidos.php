<?php headerAdmin($data); //getModal('modalProductos',$data); ?>
<div id="contentAjax"></div>
<div class="right_col" role="main">
  <div class="">
    <div class="app-title">
      <div class="row">
        <div class="col-8">
          <h1>
            <i class="fas fa-box"></i> <?= $data['page_title'] ?>
            <?php if ($_SESSION['permisosMod']['w']) { ?>
              <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus-circle"></i> Nuevo</button>
            <?php } ?>
          </h1>
        </div>
        <div class="col-4">
          <br>
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>/clientes"><?= $data['page_title'] ?></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="clearfix">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="tablePedidos">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Ref. / Transacción</th>
                      <th>Fecha</th>
                      <th>Monto</th>
                      <th>Tipo pago</th>
                      <th>Estado</th>
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

<?php footerAdmin($data); ?>
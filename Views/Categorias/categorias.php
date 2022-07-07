<?php
headerAdmin($data);
getModal('modalCategorias', $data);
?>
<div id="contentAjax"></div>
<div class="right_col" role="main">
  <div class="">
    <div class="app-title">
      <div class="row">
        <div class="col-8">
          <h1><i class="fas fa-box-tissue"></i> <?= $data['page_title'] ?>
            <?php if ($_SESSION['permisosMod']['w']) { ?>
              <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fas fa-plus-circle"></i> Nuevo</button>
            <?php } ?>
          </h1>
        </div>
        <div class="col-4">
          <br>
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>/categorias"><?= $data['page_title'] ?></a></li>
          </ul>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="table-responsive">
              <table class="table table-hover table-bordered" id="tableCategorias">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Status</th>
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
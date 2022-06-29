<?php
$cantCarrito = 0;
if (isset($_SESSION['arrCarrito']) and count($_SESSION['arrCarrito']) > 0) {
  foreach ($_SESSION['arrCarrito'] as $product) {
    $cantCarrito += $product['cantidad'];
  }
}
$tituloPreguntas = !empty(getInfoPage(PPREGUNTAS)) ? getInfoPage(PPREGUNTAS)['titulo'] : "";
$infoPreguntas = !empty(getInfoPage(PPREGUNTAS)) ? getInfoPage(PPREGUNTAS)['contenido'] : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= media() ?>/images/favicon.ico" type="image/ico" />

    <title><?= $data['page_tag'] ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <?php
    $nombreSitio = NOMBRE_EMPESA;
    $descripcion = DESCRIPCION;
    $nombreProducto = NOMBRE_EMPESA;
    $urlWeb = base_url();
    $urlImg = media() . "/images/portada.jpg";
    if (!empty($data['producto'])) {
      //$descripcion = $data['producto']['descripcion'];
      $descripcion = DESCRIPCION;
      $nombreProducto = $data['producto']['nombre'];
      $urlWeb = base_url() . "/tienda/producto/" . $data['producto']['idproducto'] . "/" . $data['producto']['ruta'];
      $urlImg = $data['producto']['images'][0]['url_image'];
    }
    ?>
    <meta property="og:locale" content='es_ES' />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $nombreSitio; ?>" />
    <meta property="og:description" content="<?= $descripcion; ?>" />
    <meta property="og:title" content="<?= $nombreProducto; ?>" />
    <meta property="og:url" content="<?= $urlWeb; ?>" />
    <meta property="og:image" content="<?= $urlImg; ?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= media() ?>/tienda/images/favicon/logo" />
    <!--===============================================================================================-->
    <link href="<?= media() ?>/template/my-css-js/css/loading.css" rel="stylesheet">

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
    <link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/main.css">

    <!-- Custom Theme Style -->
    <link href="<?= media() ?>/build/css/custom.min.css" rel="stylesheet">
  <style>.top_nav{ width:100%; position:fixed;} .navbar{ position:fixed;}</style>

</head>

<body class="nav-md">
  <!-- Modal -->
  <div class="modal fade" id="modalAyuda" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><?= $tituloPreguntas ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="page-content">
            <?= $infoPreguntas; ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="loader">
      <div class="loader__figure"></div>
      <p class="loader__label">Tienda Virtual</p>
    </div>
  </div>
  <div class="container body">
    <div class="main_container">
      <!-- top navigation -->

      <!-- /top navigation -->
      <?php require_once 'nav_admin.php' ?>
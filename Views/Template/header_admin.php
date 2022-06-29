<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?= media() ?>/images/favicon.ico" type="image/ico" />

  <title><?= $data['page_tag'] ?></title>
  <link href="<?= media() ?>/template/my-css-js/css/loading.css" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="<?= media() ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= media() ?>/vendors/font-awesome/css/font-awesome.css" rel="stylesheet">

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
  <style>

  </style>
  <!-- Custom Theme Style -->
  <link href="<?= media() ?>/build/css/custom.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="<?= media() ?>/template/dist/css/style.css" rel="stylesheet">
  <style>.top_nav{ width:100%; position:fixed;} .navbar{ position:fixed;}</style>
</head>

<body class="nav-md">
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

      <?php require_once 'nav_admin.php' ?><br>
<br>
<br>
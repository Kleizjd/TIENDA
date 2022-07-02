 <!-- footer content -->
 <footer>
   <div class="pull-right">
     <span> &copy;Copyright <?= date("Y"); ?> Best -José Daniel Grijalba</span>
   </div>
   <div class="clearfix"></div>
 </footer>
 <!-- /footer content -->
 </div>
 </div>

 <script>
   const base_url = "<?= base_url(); ?>";
   const smony = "<?= SMONEY; ?>";
 </script>
 <script type="text/javascript" src="<?= media(); ?>/js/functions_admin.js"></script>
 <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>

 <!-- jQuery -->
 <script src="<?= media(); ?>/js/popper.min.js"></script>
 <script src="<?= media() ?>/vendors/jquery/dist/jquery-3.3.1.min.js"></script>
 <script src="<?= media() ?>/js/fontawesome.js"></script>
 <!-- Page specific javascripts-->
 <script type="text/javascript" src="<?= media(); ?>/js/plugins/sweetalert.min.js"></script>
 <script type="text/javascript" src="<?= media(); ?>/js/tinymce/tinymce.min.js"></script>
 <!-- Data table plugin-->
 <script type="text/javascript" src="<?= media(); ?>/js/plugins/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="<?= media(); ?>/js/plugins/dataTables.bootstrap.min.js"></script>
 <!-- <script type="text/javascript" src="<?= media(); ?>/js/plugins/bootstrap-select.min.js"></script> -->
 
 <script src="<?= media() ?>/vendors/bootstrap/dist/js/buttons.bootstrap4.js"></script>

 <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
 <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
 <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>

 <!--  -->
 <!-- Bootstrap -->
 <script src="<?= media() ?>/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <!-- FastClick -->
 <script src="<?= media() ?>/vendors/fastclick/lib/fastclick.js"></script>
 <!-- NProgress -->
 <script src="<?= media() ?>/vendors/nprogress/nprogress.js"></script>
 <!-- Chart.js -->
 <script src="<?= media() ?>/vendors/Chart.js/dist/Chart.min.js"></script>
 <!-- gauge.js -->
 <script src="<?= media() ?>/vendors/gauge.js/dist/gauge.min.js"></script>
 <!-- bootstrap-progressbar -->
 <script src="<?= media() ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
 <!-- iCheck -->
 <script src="<?= media() ?>/vendors/iCheck/icheck.min.js"></script>
 <!-- Skycons -->
 <script src="<?= media() ?>/vendors/skycons/skycons.js"></script>
 <!-- Flot -->
 <script src="<?= media() ?>/vendors/Flot/jquery.flot.js"></script>
 <script src="<?= media() ?>/vendors/Flot/jquery.flot.pie.js"></script>
 <script src="<?= media() ?>/vendors/Flot/jquery.flot.time.js"></script>
 <script src="<?= media() ?>/vendors/Flot/jquery.flot.stack.js"></script>
 <script src="<?= media() ?>/vendors/Flot/jquery.flot.resize.js"></script>
 <!-- Flot plugins -->
 <script src="<?= media() ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
 <script src="<?= media() ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
 <script src="<?= media() ?>/vendors/flot.curvedlines/curvedLines.js"></script>
 <!-- DateJS -->
 <script src="<?= media() ?>/vendors/DateJS/build/date.js"></script>
 <!-- JQVMap -->
 <script src="<?= media() ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
 <script src="<?= media() ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
 <script src="<?= media() ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
 <!-- bootstrap-daterangepicker -->
 <script src="<?= media() ?>/vendors/moment/min/moment.min.js"></script>
 <script src="<?= media() ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
 <!-- slimscrollbar scrollbar JavaScript -->
 <script src="<?= media() ?>/template/dist/js/perfect-scrollbar.jquery.min.js"></script>
 <!-- Custom Theme Scripts -->

 <script src="<?= media() ?>/build/js/custom.min.js"></script>
 <script>
   $(function() {
     $(".preloader").fadeOut();
   });
   $(function() {
     // ============================================================== 
     // Perfact scrollbar
     // ============================================================== 
     // $('.scroll-sidebar, .right-side-panel, .message-center, .right-sidebar').perfectScrollbar();
     $('.scroll-sidebar').perfectScrollbar();


   });
 </script>

 </body>

 </html>
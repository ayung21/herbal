<!-- jQuery 2.1.3 -->
<script src="<?= base_url(); ?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- jQuery UI 1.11.2 -->
<script src="<?= base_url('assets/dist/js/jquery-ui.min.js'); ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="<?= base_url('assets/dist/js/raphael-min.js'); ?>"></script>
<script src="<?= base_url(); ?>assets/plugins/morris/morris.min.js" type="text/javascript"></script>
<!-- Sparkline -->
<script src="<?= base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?= base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>assets/plugins/knob/jquery.knob.js" type="text/javascript"></script>
<!-- bootstrap -->
<script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?= base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?= base_url(); ?>assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="<?= base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>assets/plugins/fastclick/fastclick.min.js"></script>
<!-- select2 -->
<script src="<?= base_url(); ?>assets/dist/js/select2.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/app.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/dist/adminjs/app.js'); ?>" type="text/javascript"></script>
<script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=AtWtNvayYAjM3vq1VJn2iq4lOg9ikZxkHfTcoJvla1jeaeWAru64z9pUxE-r8mbf' async defer></script>

<script type='text/javascript'>
  function GetMap() {
    var map = new Microsoft.Maps.Map('#myMap');

    //Add your post map load code here.
  }
</script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?= base_url(); ?>assets/dist/js/pages/dashboard.js" type="text/javascript"></script> -->

<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url(); ?>assets/dist/js/demo.js" type="text/javascript"></script> -->
<script>
  var base_url = "<?= base_url(); ?>";
</script>
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b><?php echo $this->lang->line('b_footer_version', FALSE); ?></b> <?php echo $this->config->item('version'); ?>
    </div>
    <strong><?php echo $this->lang->line('b_footer_copyright', FALSE); ?> &copy; <?php echo date('Y'); ?> <a href="<?php echo base_url(); ?>">Prsteny Baroň</a>.</strong> <?php echo $this->lang->line('b_footer_all_rights_reserved', FALSE); ?>.
  </footer>

</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/templates/admin/adminlte2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/templates/admin/adminlte2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/templates/admin/adminlte2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/templates/admin/adminlte2/dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>

<script src="<?php echo base_url(); ?>assets/js/admin/global/view.js?v=<?php echo $this->config->item('version'); ?>"></script>

<?= $script ?>


</body>
</html>
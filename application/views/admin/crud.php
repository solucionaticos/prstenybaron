<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 
foreach($css_files as $file): ?>
  <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
  <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?> 
      </h1>
      <?php echo $breadCrumbs; ?> 
    </section>

    <!-- Main content -->
    <section class="content">
      
  <?php
  if ( $this->session->flashdata('alertMessage') ) {
  ?>
  <div class="alert alert-<?php echo $this->session->flashdata('alertType'); ?> alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php echo $this->session->flashdata('alertMessage'); ?>
  </div>
  <?php
  }
  ?>
      
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          <?php echo $tabs; ?>
          <?php echo $output; ?>
<?php
if ($code == 1) {
  if ($state == "edit" or $state == "read") {
    echo $html;
  }
}
?>


        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

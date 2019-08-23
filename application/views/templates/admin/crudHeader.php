<?php defined('BASEPATH') OR exit('No direct script access allowed');

$menu_open_1 = $menu_open_3 = '';
$display_block_1 = $display_block_3 = '';
$text_yellow_1_0 = $text_yellow_2_0 = $text_yellow_3_0 = $text_yellow_4_0 = '';
$yellow_1_1 = $yellow_1_2 = $yellow_3_1 = $yellow_3_2 = 'green';

switch ($menu) {
  case '1_1':
    $menu_open_1 = 'menu-open';
    $display_block_1 = 'style="display: block;"';
    $text_yellow_1_0 = 'text-yellow';
    $yellow_1_1 = 'yellow';
    break;
  case '1_2':
    $menu_open_1 = 'menu-open';
    $display_block_1 = 'style="display: block;"';
    $text_yellow_1_0 = 'text-yellow';
    $yellow_1_2 = 'yellow';
    break;

  case '2_0':
    $text_yellow_2_0 = 'text-yellow';
    break;

  case '3_1':
    $menu_open_3 = 'menu-open';
    $display_block_3 = 'style="display: block;"';
    $text_yellow_3_0 = 'text-yellow';
    $yellow_3_1 = 'yellow';
    break;
  case '3_2':
    $menu_open_3 = 'menu-open';
    $display_block_3 = 'style="display: block;"';
    $text_yellow_3_0 = 'text-yellow';
    $yellow_3_2 = 'yellow';
    break;

  case '4_0':
    $text_yellow_4_0 = 'text-yellow';
    break;

  default:
    # code...
    break;
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Prsteny Baroň. <?=$title?></title>

  <link href="<?php echo base_url(); ?>assets/images/image_332.ico" rel="icon" type="image/x-gif" />

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/templates/admin/adminlte2/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/templates/admin/adminlte2/dist/css/AdminLTE.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/templates/admin/adminlte2/dist/css/skins/_all-skins.min.css">

  <!-- Global
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin/global.css">
   -->
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/admin/global/view.css?v=<?php echo $this->config->item('version'); ?>" rel="stylesheet">

  <!-- style scripts -->
  <?= $css ?>  

</head>


<body class="hold-transition skin-yellow sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b> B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Prsteny</b> Baroň</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
              <button type="button" url="<?php echo base_url(); ?>admin/odhlasit_se" class="btn btn-info btn-sm button mt-10 mr-10"><?php echo $this->lang->line('b_header_sign_out', FALSE); ?></button>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/images/admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('be_user_name'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->lang->line('b_header_online', FALSE); ?></a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><?php echo $this->lang->line('b_header_main_navigation', FALSE); ?></li>

        <li class="treeview <?php echo $menu_open_1; ?>">
          <a href="#">
            <i class="fa fa-files-o <?php echo $text_yellow_1_0; ?>"></i> <span><?php echo $this->lang->line('b_menu_products', FALSE); ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" <?php echo $display_block_1; ?>>
            <li><a href='<?php echo base_url(); ?>backend/product'><i class='fa fa-circle-o text-<?php echo $yellow_1_1; ?>'></i> <span><?php echo $this->lang->line('b_menu_products_link', FALSE); ?></span></a></li>
            <li><a href='<?php echo base_url(); ?>backend/category'><i class='fa fa-circle-o text-<?php echo $yellow_1_2; ?>'></i> <span><?php echo $this->lang->line('b_menu_categories_link', FALSE); ?></span></a></li>
          </ul>

        </li>


        <li><a href='<?php echo base_url(); ?>backend/pages'><i class='fa fa-th <?php echo $text_yellow_2_0; ?>'></i> <span>Pages</span></a></li>


        <li class="treeview <?php echo $menu_open_3; ?>">
          <a href="#">
            <i class="fa fa-edit <?php echo $text_yellow_3_0; ?>"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" <?php echo $display_block_3; ?>>

            <li><a href='<?php echo base_url(); ?>backend/order'><i class='fa fa-circle-o text-<?php echo $yellow_3_1; ?>'></i> <span>Orders</span></a></li>

            <li><a href='<?php echo base_url(); ?>backend/price_calculation'><i class='fa fa-circle-o text-<?php echo $yellow_3_2; ?>'></i> <span>Price Calculations</span></a></li>

          </ul>

        </li>

        <li><a href='<?php echo base_url(); ?>backend/settings/index/edit/1'><i class='fa fa-cog <?php echo $text_yellow_4_0; ?>'></i> <span>Settings</span></a></li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

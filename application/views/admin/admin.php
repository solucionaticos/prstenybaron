<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Prsteny Baroň | Log in</title>

  <link href="<?php echo base_url(); ?>assets/images/image_332.ico" rel="icon" type="image/x-gif" />

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/templates/admin/adminlte2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/templates/admin/adminlte2/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/templates/admin/adminlte2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/templates/admin/adminlte2/dist/css/AdminLTE.min.css">
  <!-- recaptcha -->
  <script src='https://www.google.com/recaptcha/api.js?hl=cs'></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style type="text/css">
    body {
      background-image: url('<?php echo base_url(); ?>assets/images/bg-1.jpg') !important;
      background-position: center !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;
    }
    .login-logo {
      color: #ff9800;
    }
    .login-box-body {
      background-color: rgba(255, 255, 255, 0.8);;
    }
  </style>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Prsteny</b> Baroň
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Přihlašte se prosím</p>

    {msg}

      {form}
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" required minlength="10" maxlength="70">
      </div>
      <div class="form-group">
        <label for="pwd">Heslo:</label>
        <input type="password" class="form-control" id="pwd" name="pwd" required minlength="7" maxlength="20">
      </div>

      {recaptcha}

      <div class="text-right">
        <button type="submit" class="btn btn-warning">Přihlásit</button>  
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/templates/admin/adminlte2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/templates/admin/adminlte2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
  $(function () {

      $("#form-admin").validate({
          rules: {
              email: {
                  required: true,
                  email: true,
                  minlength: 10,
                  maxlength: 70
              },
              pwd: {
                  required: true,
                  minlength: 7,
                  maxlength: 20
              }
          }
      });

  });  
</script>

</body>
</html>
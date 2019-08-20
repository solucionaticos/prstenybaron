<?php defined('BASEPATH') OR exit('Přímý přístup k tomuto skriptu není povolen.'); ?>
<!DOCTYPE html>
<html lang="cs-CZ">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="{meta_description}">
  <meta name="author" content="">
  <meta name="yandex-verification" content="89dd9b7e2c212970" />
  <link href="{image_url}favicon.ico" rel="icon" type="image/x-gif" />
  <title><?php echo $this->lang->line('f_header_title', FALSE); ?>. {head_title}</title>
  <!-- Bootstrap core CSS -->
  <link href="{front_url}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{css_front_url}global/view.css?v={version}" rel="stylesheet">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Sweetalert2 -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <!-- recaptcha -->
  <script src='https://www.google.com/recaptcha/api.js?hl=cs'></script>

  {css}

</head>

<body>

<div class="container">
  <div class="row mx-0 ap-top-border" style="padding: 20px 0;">
    <div class="col-6 pl-0">
      <a class="navbar-brand" href="{base_url}">
        <img src="{image_url}logo-avs.svg?v={version}" alt="Architekti ve škole" border="0" class="img-fluid" width="100%">
      </a>
    </div>
    <div class="col-6 pr-0">
      <div id="user-area" class="text-right f-r">
        {user_s_area}
      </div>
      <div class="p-0-10 f-r fs-30 l-h-n link d-none d-lg-block">
        {user_avatar}
      </div>
    </div>
  </div>
</div>

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">      
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          {user_t_links}
        </ul>
        <ul class="navbar-nav float-lg-right">
          {user_s_links}
        </ul>
    </div>
  </nav>
</div>
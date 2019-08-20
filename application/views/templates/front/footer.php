<?php defined('BASEPATH') OR exit('Přímý přístup k tomuto skriptu není povolen.'); ?>
<div class="container mt-30">
  <footer class="footer_style">
    <div class="container">
      <div class="p-0-10">
        <div class="row mar-1 py-3">
          <div class="col-md-8">
            <div class="row m-10-0">
              <div class="col-md-6">
                <h2 class="h5">Architekti ve škole</h2>
                <ul class="vertical-menu">
                  <li><a href="{base_url}metodiky_a_navody"><?php echo $this->lang->line('f_footer_nav_metodiky_a_navody', FALSE); ?></a></li>
                  <li><a href="{base_url}blog"><?php echo $this->lang->line('f_footer_nav_blog', FALSE); ?></a></li>
                  <li><a href="{base_url}o_projektu"><?php echo $this->lang->line('f_footer_nav_o_projektu', FALSE); ?></a></li>
                  <li><a href="{base_url}nas_tym"><?php echo $this->lang->line('f_footer_nav_nas_tym', FALSE); ?></a></li>
                  {user_s_links}
                </ul>
              </div>
              <div class="col-md-6">
                <h2 class="h5">Odkazy</h2>
                <ul class="vertical-menu">
                  <li><a href="#"><?php echo $this->lang->line('f_footer_nav_ochrana_osobnich_udaju', FALSE); ?></a></li>
                  <li><a href="https://www.facebook.com/architektiveskole" target="_blank">Facebook</a></li>
                  <li><a href="https://www.youtube.com/channel/UCrZxZLYmw7Sb0mQKNcAypQw" target="_blank">Youtube</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 m-10-0">
            <h2 class="h5">Kontakt</h2>
            <p class="ap-blue"><?php echo $this->lang->line('f_footer_kontakt_text_2', FALSE); ?></p>
            <p class="ap-white"><?php echo $this->lang->line('f_footer_kontakt_text_3', FALSE); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 m-10-0 fs-10">
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
              <img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png">
            </a>
            <br>
            <span class="ap-blue"><?php echo $this->lang->line('f_footer_licence_text_1', FALSE); ?></span>
            <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.architektiveskole.cz/" property="cc:attributionName" rel="cc:attributionURL"><?php echo $this->lang->line('f_footer_licence_text_2', FALSE); ?></a>
            <span class="ap-blue"><?php echo $this->lang->line('f_footer_licence_text_3', FALSE); ?></span><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><?php echo $this->lang->line('f_footer_licence_text_4', FALSE); ?></a>.
            <span class="ap-blue"><?php echo $this->lang->line('f_footer_licence_text_5', FALSE); ?></span><a xmlns:cc="http://creativecommons.org/ns#" href="http://www.architektiveskole.cz/" rel="cc:morePermissions">http://www.architektiveskole.cz/</a>.
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

<div class="modal fade" id="myModalLogin" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><?php echo $this->lang->line('f_login_dialog_login', FALSE); ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="text-info font-weight-bold pb-2"><small><?php echo $this->lang->line('f_login_dialog_info', FALSE); ?></small></div>
          {form_prihlasit_se}
            <div class="form-group">
              <label for="email_footer">E-mail</label>
              <input type="email" class="form-control" id="email_footer" name="email" required minlength="10" maxlength="70">
            </div>
            <div class="form-group">
              <label for="pwd_footer">Heslo</label>
              <input type="password" class="form-control" id="pwd_footer" name="pwd" required minlength="7" maxlength="20">
            </div>

            {recaptcha}
            
            <button type="submit" class="btn btn-outline-dark btn-block"><?php echo $this->lang->line('f_login_dialog_login_btn', FALSE); ?></button>
          </form>
          <div class="row mar-2">
            <div class="col-12 text-center link">
              <a href="{base_url}zapomenute_heslo"><?php echo $this->lang->line('f_login_dialog_forgotten_psw_btn', FALSE); ?></a>
            </div>
          </div>
          <div class="row mt-5 mb-15">
            <div class="col-12 text-center"><?php echo $this->lang->line('f_login_dialog_no_account', FALSE); ?>
              <a href="{base_url}registrace"><?php echo $this->lang->line('f_login_dialog_register', FALSE); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  

<!-- jQuery -->
<script src="{front_url}vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{front_url}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery Validate -->
<script src="{plugins_url}jquery.validate/jquery.validate.min.js"></script>
<!-- Sweetalert2 -->
<script src="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<script type="text/javascript">
  var base_url = "{base_url}";
</script>

<script src="{js_front_url}global/view.js?v={version}"></script>

{js}

</body>
</html>
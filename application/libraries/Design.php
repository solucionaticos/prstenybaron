<?php
defined('BASEPATH') OR exit('Přímý přístup k tomuto skriptu není povolen.');

// Class 'Design'
class Design {

	// Index vars
	public function vars() {
		$CI =& get_instance();

		if ( get_cookie('fe_user_id') ) {
			$CI->session->set_userdata('fe_user_id', get_cookie('fe_user_id'));
			$CI->session->set_userdata('fe_user_name', get_cookie('fe_user_name'));
			$CI->session->set_userdata('fe_user_email', get_cookie('fe_user_email'));
		}

		if ($CI->session->has_userdata('fe_user_id')) {
			$user_s_area = '<span class="link"><a href="'.base_url().'nastaveni_uctu">'.$CI->session->userdata('fe_user_name').'</a></span><span class="link"><a href="'.base_url().'prihlasit_se/odhlasit_se">'.$CI->lang->line('f_header_user_s_area_odhlasit_e', FALSE).'</a></span>';

			$user_t_links = '

	          <li class="nav-item navbar_li_btn navbar_li_btn_sep_right">
	            <a class="nav-link" href="'.base_url().'metodiky_a_navody">'.$CI->lang->line('f_header_nav_metodiky_a_navody', FALSE).'</a>
	          </li>
	          <li class="nav-item navbar_li_btn navbar_li_btn_sep_right_2 ">
	            <a class="nav-link" href="'.base_url().'blog">'.$CI->lang->line('f_header_nav_blog', FALSE).'</a>
	          </li>
	          <li class="nav-item navbar_li_btn navbar_li_btn_sep_right_2 ">
	            <a class="nav-link" href="'.base_url().'o_projektu">'.$CI->lang->line('f_header_nav_o_projektu', FALSE).'</a>
	          </li>
	          <li class="nav-item navbar_li_btn navbar_li_btn_sep_left_2">
	            <a class="nav-link" href="'.base_url().'nas_tym">'.$CI->lang->line('f_header_nav_nas_tym', FALSE).'</a>
	          </li>
			';
			$user_s_links = '<li class="nav-item navbar_li_btn"><a class="nav-link" href="'.base_url().'knihovna">'.$CI->lang->line('f_footer_nav_knihovna', FALSE).'</a></li><li class="nav-item navbar_li_btn"><a class="nav-link" href="'.base_url().'nastaveni_uctu">'.$CI->lang->line('f_footer_nav_nastaveni_uctu', FALSE).'</a></li>';

			$user_avatar = '<a href="'.base_url().'nastaveni_uctu"><i class="fa fa-user"></i></a></span>';
		} else {
			$user_s_area = '<span id="login">'.$CI->lang->line('f_header_user_s_area_prihlasit_se', FALSE).'</span><br><a href="'.base_url().'registrace" id="sign_up">'.$CI->lang->line('f_header_user_s_area_registrovat', FALSE).'</a>';
			$user_t_links = '
	          <li class="nav-item navbar_li_btn navbar_li_btn_sep_right">
	            <a class="nav-link" href="'.base_url().'metodiky_a_navody">'.$CI->lang->line('f_header_nav_metodiky_a_navody', FALSE).'</a>
	          </li>
	          <li class="nav-item navbar_li_btn navbar_li_btn_sep_right_2 ">
	            <a class="nav-link" href="'.base_url().'blog">'.$CI->lang->line('f_header_nav_blog', FALSE).'</a>
	          </li>
	          <li class="nav-item navbar_li_btn navbar_li_btn_sep_left_2 ">
	            <a class="nav-link" href="'.base_url().'o_projektu">'.$CI->lang->line('f_header_nav_o_projektu', FALSE).'</a>
	          </li>
	          <li class="nav-item navbar_li_btn navbar_li_btn_sep_left">
	            <a class="nav-link" href="'.base_url().'nas_tym">'.$CI->lang->line('f_header_nav_nas_tym', FALSE).'</a>
	          </li>
			';
			$user_s_links = '';
			$user_avatar = '<i class="fa fa-user"></i>';
		}

		$data = array(
			'version' => $CI->config->item('version'),
			'head_title' => $CI->config->item('head_title'),
			'base_url' => base_url(),
			'front_url' => base_url() . 'assets/templates/front/startbootstrap/',
			'image_url' => base_url() . 'assets/images/',
			'uploads_files_url' => base_url() . 'assets/uploads/files/',
			'css_front_url' => base_url() . 'assets/css/front/',
			'js_front_url' => base_url() . 'assets/js/front/',
			'plugins_url' => base_url() . 'assets/plugins/',
			'user_s_area' => $user_s_area,
			'user_s_links' => $user_s_links,
			'user_t_links' => $user_t_links,
			'user_avatar' => $user_avatar
		);

		return $data;
	}

}
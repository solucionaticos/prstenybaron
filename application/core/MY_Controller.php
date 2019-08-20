<?php
defined('BASEPATH') OR exit('Přímý přístup k tomuto skriptu není povolen.');

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
  
    public function ctrSegAdmin() {
        if ( !$this->session->has_userdata('be_user_id') ) {
            // Error. You must authenticate to enter the application
            $this->session->set_flashdata('alertMessage', '<h4><i class="icon fa fa-ban"></i> Chyba </h4>Chcete-li jej zadat, musíte ověřit svou aplikaci');
            $this->session->set_flashdata('alertType', 'danger'); // success, info, warning, danger
            redirect ('admin');
        }
    }
  
    public function crudShow($crudTable, $title, $breadCrumbs = '', $css = '', $script = '', $tabs = '', $state = '', $code = 0, $html = '', $menu = '') {
        $headData['title'] = $title;
        $headData['breadCrumbs'] = $breadCrumbs;
        $headData['css'] = $css;
        $headData['menu'] = $menu;
        $footData['script'] = $script;

        $crudTableData['css_files'] = $crudTable->css_files;
        $crudTableData['js_files'] = $crudTable->js_files;
        $crudTableData['tabs'] = $tabs;
        $crudTableData['output'] = $crudTable->output;
        $crudTableData['state'] = $state;
        $crudTableData['code'] = $code;
        $crudTableData['html'] = $html;

        $this->load->view('templates/admin/crudHeader', $headData);
        $this->load->view('admin/crud',$crudTableData);
        $this->load->view('templates/admin/crudFooter', $footData);
    }

}

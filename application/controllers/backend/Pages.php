<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Pages
 * @version: 1.0
 * @fecha: 2019-08-20 13:08:41 
 * */

class Pages extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        $this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("pages"); // Tabla del Crud
        //-- Lista --------
        $crud->columns($this->lang->line('b_pages_label_title', FALSE),$this->lang->line('b_pages_label_code', FALSE),$this->lang->line('b_pages_label_meta_keywords', FALSE),$this->lang->line('b_pages_label_meta_image', FALSE),$this->lang->line('b_pages_label_created_at', FALSE));
        //-- Nuevo --------
        $crud->add_fields("title","code","description","meta_keywords","meta_description","meta_image");
        //-- Editar --------
        $crud->edit_fields("title","code","description","meta_keywords","meta_description","meta_image");
        //-- Etiquetas --------
        $crud->display_as($this->lang->line('b_pages_label_title', FALSE),"Title");
        $crud->display_as($this->lang->line('b_pages_label_code', FALSE),"Code");
        $crud->display_as($this->lang->line('b_pages_label_descripcion', FALSE),"Description");
        $crud->display_as($this->lang->line('b_pages_label_meta_keywords', FALSE),"Meta Keywords");
        $crud->display_as($this->lang->line('b_pages_label_meta_description', FALSE),"Meta Description");
        $crud->display_as($this->lang->line('b_pages_label_meta_image', FALSE),"Meta Image");
        $crud->display_as($this->lang->line('b_pages_label_created_at', FALSE),"Created At");

        //-- Upload File --------
        $crud->set_field_upload("meta_image","assets/uploads/files/pages_meta");

        //-- Tipos de Campos --------
        $crud->field_type("title", "string");
        $crud->field_type("code", "string");
        $crud->field_type("description", "text");
        $crud->field_type("meta_keywords", "string");
        $crud->field_type("meta_description", "text");
        //$crud->field_type("meta_image", "string");
        $crud->field_type("created_at", "datetime");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "pages_before_insert"));
        $crud->callback_before_update(array($this, "pages_before_update"));
        $crud->callback_before_delete(array($this, "pages_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "pages_after_insert"));
        $crud->callback_after_update(array($this, "pages_after_update"));
        $crud->callback_after_delete(array($this, "pages_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->crudShow($crudTabla, "Pages", '', '', '', '', '', 0, '', '2_0'); //

    }

    //-- Antes de Insertar --------
    public function pages_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function pages_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function pages_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function pages_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function pages_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function pages_after_delete($id) {


        return true;
    }

}

<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Image
 * @version: 1.0
 * @fecha: 2019-08-20 13:06:43 
 * */

class Image extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        $this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("image"); // Tabla del Crud
        $crud->order_by('id','desc');

        //-- Lista --------
        $crud->columns("product_id","image","created_at");
        //-- Nuevo --------
        $crud->add_fields("product_id","image");
        //-- Editar --------
        $crud->edit_fields("product_id","image");
        //-- Etiquetas --------
        $crud->display_as("product_id","Product Id");
        $crud->display_as("image","Image");
        $crud->display_as("created_at","Created At");

        //-- Upload File --------
        $crud->set_field_upload("image","assets/uploads/files/images");


        //-- Tipos de Campos --------
        $crud->field_type("id", "numeric");
        $crud->field_type("product_id", "numeric");
        //$crud->field_type("image", "string");
        $crud->field_type("created_at", "datetime");
        //-- Relaciones 1-N --------
        $crud->set_relation("product_id", "product","id");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "image_before_insert"));
        $crud->callback_before_update(array($this, "image_before_update"));
        $crud->callback_before_delete(array($this, "image_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "image_after_insert"));
        $crud->callback_after_update(array($this, "image_after_update"));
        $crud->callback_after_delete(array($this, "image_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->crudShow($crudTabla, $this->lang->line('b_crud_images', FALSE), '', '', '', '', '', 0, '', '2_1'); //
    }

    //-- Antes de Insertar --------
    public function image_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function image_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function image_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function image_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function image_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function image_after_delete($id) {


        return true;
    }

}

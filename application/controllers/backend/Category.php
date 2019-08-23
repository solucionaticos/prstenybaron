<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Category
 * @version: 1.0
 * @fecha: 2019-08-20 12:09:43 
 * */

class Category extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        $this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("category"); // Tabla del Crud
        //-- Lista --------
        $crud->columns($this->lang->line('b_category_label_name', FALSE),$this->lang->line('b_category_label_created_at', FALSE));
        //-- Nuevo --------
        $crud->add_fields("name");
        //-- Editar --------
        $crud->edit_fields("name");
        //-- Etiquetas --------
        $crud->display_as($this->lang->line('b_category_label_name', FALSE),"Name");
        $crud->display_as($this->lang->line('b_category_label_created_at', FALSE),"Created At");
        //-- Tipos de Campos --------
        $crud->field_type("name", "string");
        $crud->field_type("created_at", "datetime");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "category_before_insert"));
        $crud->callback_before_update(array($this, "category_before_update"));
        $crud->callback_before_delete(array($this, "category_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "category_after_insert"));
        $crud->callback_after_update(array($this, "category_after_update"));
        $crud->callback_after_delete(array($this, "category_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud

        $this->crudShow($crudTabla, $this->lang->line('b_crud_categories', FALSE), '', '', '', '', '', 0, '', '1_2'); //

    }

    //-- Antes de Insertar --------
    public function category_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function category_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function category_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function category_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function category_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function category_after_delete($id) {


        return true;
    }

}

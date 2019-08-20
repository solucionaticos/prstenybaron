<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Related_product
 * @version: 1.0
 * @fecha: 2019-08-20 13:09:28 
 * */

class Related_product extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        $this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("related_product"); // Tabla del Crud
        $crud->order_by('id','desc');
        
        //-- Lista --------
        $crud->columns("product_id","product_related","created_at");
        //-- Nuevo --------
        $crud->add_fields("product_id","product_related");
        //-- Editar --------
        $crud->edit_fields("product_id","product_related");
        //-- Etiquetas --------
        $crud->display_as("product_id","Product Id");
        $crud->display_as("product_related","Product Related");
        $crud->display_as("created_at","Created At");
        //-- Tipos de Campos --------
        $crud->field_type("product_id", "numeric");
        $crud->field_type("product_related", "numeric");
        $crud->field_type("created_at", "datetime");
        //-- Relaciones 1-N --------
        $crud->set_relation("product_id", "product","name");
        $crud->set_relation("product_related", "product","name");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "related_product_before_insert"));
        $crud->callback_before_update(array($this, "related_product_before_update"));
        $crud->callback_before_delete(array($this, "related_product_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "related_product_after_insert"));
        $crud->callback_after_update(array($this, "related_product_after_update"));
        $crud->callback_after_delete(array($this, "related_product_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->crudShow($crudTabla, "Related Products", '', '', '', '', '', 0, '', '2_1'); //

    }

    //-- Antes de Insertar --------
    public function related_product_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function related_product_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function related_product_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function related_product_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function related_product_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function related_product_after_delete($id) {


        return true;
    }

}

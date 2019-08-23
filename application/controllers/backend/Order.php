<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Order
 * @version: 1.0
 * @fecha: 2019-08-20 13:07:42 
 * */

class Order extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        $this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("order"); // Tabla del Crud
        //-- Lista --------
        $crud->columns("name","address","city","zip_code","contact_telephone","contact_email","type_male","type_female","size_male","size_female","type_stone","num_stone","material","color","text_engraving_male","text_engraving_female","takeover_method","notes","created_at");
        //-- Nuevo --------
        $crud->add_fields("name","address","city","zip_code","contact_telephone","contact_email","type_male","type_female","size_male","size_female","type_stone","num_stone","material","color","text_engraving_male","text_engraving_female","takeover_method","notes");
        //-- Editar --------
        $crud->edit_fields("name","address","city","zip_code","contact_telephone","contact_email","type_male","type_female","size_male","size_female","type_stone","num_stone","material","color","text_engraving_male","text_engraving_female","takeover_method","notes");
        //-- Etiquetas --------
        $crud->display_as("name","Name");
        $crud->display_as("address","Address");
        $crud->display_as("city","City");
        $crud->display_as("zip_code","Zip Code");
        $crud->display_as("contact_telephone","Contact Telephone");
        $crud->display_as("contact_email","Contact Email");
        $crud->display_as("type_male","Type Male");
        $crud->display_as("type_female","Type Female");
        $crud->display_as("size_male","Size Male");
        $crud->display_as("size_female","Size Female");
        $crud->display_as("type_stone","Type Stone");
        $crud->display_as("num_stone","Num Stone");
        $crud->display_as("material","Material");
        $crud->display_as("color","Color");
        $crud->display_as("text_engraving_male","Text Engraving Male");
        $crud->display_as("text_engraving_female","Text Engraving Female");
        $crud->display_as("takeover_method","Takeover Method");
        $crud->display_as("notes","Notes");
        $crud->display_as("created_at","Created At");
        //-- Tipos de Campos --------
        $crud->field_type("name", "string");
        $crud->field_type("address", "string");
        $crud->field_type("city", "string");
        $crud->field_type("zip_code", "string");
        $crud->field_type("contact_telephone", "string");
        $crud->field_type("contact_email", "string");
        $crud->field_type("type_male", "string");
        $crud->field_type("type_female", "string");
        $crud->field_type("size_male", "string");
        $crud->field_type("size_female", "string");
        $crud->field_type('type_stone','dropdown', array('1' => 'Zirkon', '2' => 'Brillant'));

        $crud->field_type("num_stone", "string");
        $crud->field_type("material", "dropdown", array('1' => 'Zlato 14 kt', '2' => 'Stříbro'));
        $crud->field_type("color", "dropdown", array('1' => 'Bílé', '2' => 'Žluté', '2' => 'Červené'));

        $crud->field_type("text_engraving_male", "string");
        $crud->field_type("text_engraving_female", "string");
        $crud->field_type("takeover_method", "dropdown", array('1' => 'Česká pošta dobírka', '2' => 'Osobně na adrese provozovny'));

        $crud->field_type("notes", "text");
        $crud->field_type("created_at", "datetime");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "order_before_insert"));
        $crud->callback_before_update(array($this, "order_before_update"));
        $crud->callback_before_delete(array($this, "order_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "order_after_insert"));
        $crud->callback_after_update(array($this, "order_after_update"));
        $crud->callback_after_delete(array($this, "order_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->crudShow($crudTabla, "Order", '', '', '', '', '', 0, '', '3_1'); //
    }

    //-- Antes de Insertar --------
    public function order_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function order_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function order_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function order_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function order_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function order_after_delete($id) {


        return true;
    }

}

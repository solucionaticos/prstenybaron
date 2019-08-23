<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Settings
 * @version: 1.0
 * @fecha: 2019-08-20 13:09:59 
 * */

class Settings extends MY_Controller {

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        $this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("settings"); // Tabla del Crud
        //-- Lista --------
        $crud->columns("title","logo","whatsapp","facebook","instagram","email","telephone","city","zip_code","contact_name","contact_identification","latitude","longitude");
        //-- Nuevo --------
        $crud->add_fields("title","logo","whatsapp","facebook","instagram","email","telephone","city","zip_code","contact_name","contact_identification","latitude","longitude");
        //-- Editar --------
        $crud->edit_fields("title","logo","whatsapp","facebook","instagram","email","telephone","city","zip_code","contact_name","contact_identification","latitude","longitude");
        //-- Etiquetas --------
        $crud->display_as("title","Title");
        $crud->display_as("logo","Logo");
        $crud->display_as("whatsapp","Whatsapp");
        $crud->display_as("facebook","Facebook");
        $crud->display_as("instagram","Instagram");
        $crud->display_as("email","Email");
        $crud->display_as("telephone","Telephone");
        $crud->display_as("city","City");
        $crud->display_as("zip_code","Zip Code");
        $crud->display_as("contact_name","Contact Name");
        $crud->display_as("contact_identification","Contact Identification");
        $crud->display_as("latitude","Latitude");
        $crud->display_as("longitude","Longitude");

        //-- Upload File --------
        $crud->set_field_upload("logo","assets/uploads/files/settings");

        //-- Tipos de Campos --------
        $crud->field_type("title", "string");
        // $crud->field_type("logo", "string");
        $crud->field_type("whatsapp", "string");
        $crud->field_type("facebook", "string");
        $crud->field_type("instagram", "string");
        $crud->field_type("email", "string");
        $crud->field_type("telephone", "string");
        $crud->field_type("city", "string");
        $crud->field_type("zip_code", "string");
        $crud->field_type("contact_name", "string");
        $crud->field_type("contact_identification", "string");
        $crud->field_type("latitude", "string");
        $crud->field_type("longitude", "string");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "settings_before_insert"));
        $crud->callback_before_update(array($this, "settings_before_update"));
        $crud->callback_before_delete(array($this, "settings_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "settings_after_insert"));
        $crud->callback_after_update(array($this, "settings_after_update"));
        $crud->callback_after_delete(array($this, "settings_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        $this->crudShow($crudTabla, "Settings", '', '', '', '', '', 0, '', '4_0'); //
    }

    //-- Antes de Insertar --------
    public function settings_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function settings_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function settings_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function settings_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function settings_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function settings_after_delete($id) {


        return true;
    }

}

<?php
defined("BASEPATH") OR exit("No esta permitido el acceso directo a este script.");
/**
 * @autor: Solucionaticos.com
 * @nombre: Product
 * @version: 1.0
 * @fecha: 2019-08-20 13:09:07 
 * */

class Product extends MY_Controller {

    public $product_id = 0;

    //-- Constructor --------
    public function __construct() {
        parent::__construct();
        $this->ctrSegAdmin(); // Control de Seguridad Administrativa
        $this->load->library("grocery_CRUD"); // Carga de la libreria GroceryCrud
    }

    //-- Metodo Principal --------
    public function index() {
        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("product"); // Tabla del Crud
        $crud->order_by('id','desc');

        //-- Lista --------
        $crud->columns($this->lang->line('b_products_label_name', FALSE), $this->lang->line('b_products_label_url', FALSE),$this->lang->line('b_products_label_category_id', FALSE),$this->lang->line('b_products_label_image', FALSE), $this->lang->line('b_products_label_material', FALSE),$this->lang->line('b_products_label_width', FALSE),$this->lang->line('b_products_label_price_size', FALSE),$this->lang->line('b_products_label_price_brillants', FALSE),$this->lang->line('b_products_label_meta_keywords', FALSE),$this->lang->line('b_products_label_meta_image', FALSE),$this->lang->line('b_products_label_created_at', FALSE));
        //-- Nuevo --------
        $crud->add_fields("name","url","description","category_id","image","material","width","price_size","price_brillants","meta_keywords","meta_description","meta_image");
        //-- Editar --------
        $crud->edit_fields("name","url","description","category_id","image","material","width","price_size","price_brillants","meta_keywords","meta_description","meta_image");
        //-- Etiquetas --------
        $crud->display_as($this->lang->line('b_products_label_name', FALSE),"Name");
        $crud->display_as($this->lang->line('b_products_label_url', FALSE),"Url");
        $crud->display_as("description","Description");
        $crud->display_as($this->lang->line('b_products_label_category_id', FALSE),"Category");
        $crud->display_as($this->lang->line('b_products_label_image', FALSE),"Image");
        $crud->display_as($this->lang->line('b_products_label_material', FALSE),"Material");
        $crud->display_as($this->lang->line('b_products_label_width', FALSE),"Width");
        $crud->display_as($this->lang->line('b_products_label_price_size', FALSE),"Price Size");
        $crud->display_as($this->lang->line('b_products_label_price_brillants', FALSE),"Price Brillants");
        $crud->display_as($this->lang->line('b_products_label_meta_keywords', FALSE),"Meta Keywords");
        $crud->display_as($this->lang->line('b_products_label_meta_description', FALSE),"Meta Description");
        $crud->display_as($this->lang->line('b_products_label_meta_image', FALSE),"Meta Image");
        $crud->display_as($this->lang->line('b_products_label_created_at', FALSE),"Created At");

        //-- Upload File --------
        $crud->set_field_upload("image","assets/uploads/files/products");
        $crud->set_field_upload("meta_image","assets/uploads/files/products_meta");

        //-- Tipos de Campos --------
        $crud->field_type("name", "string");
        $crud->field_type("url", "string");
        $crud->field_type("description", "text");
        //$crud->field_type("category_id", "numeric");
        //$crud->field_type("image", "string");
        $crud->field_type("material", "string");
        $crud->field_type("width", "string");
        $crud->field_type("price_size", "numeric");
        $crud->field_type("price_brillants", "numeric");
        $crud->field_type("meta_keywords", "string");
        $crud->field_type("meta_description", "text");
        $crud->unset_texteditor('meta_description');

        //$crud->field_type("meta_image", "string");
        $crud->field_type("created_at", "datetime");

        //-- Validations --------
        $crud->required_fields('name', 'image');


        //-- Relaciones 1-N --------
        $crud->set_relation("category_id", "category", "name");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "product_before_insert"));
        $crud->callback_before_update(array($this, "product_before_update"));
        $crud->callback_before_delete(array($this, "product_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "product_after_insert"));
        $crud->callback_after_update(array($this, "product_after_update"));
        $crud->callback_after_delete(array($this, "product_after_delete"));

        //-- Actions
        $crud->add_action($this->lang->line('b_menu_products_link_images', FALSE), '', 'backend/product/image', 'fa-photo');
        $crud->add_action($this->lang->line('b_menu_products_link_related_products', FALSE), '', 'backend/product/related_product', 'fa-link');

        $crudTabla = $crud->render(); // Render del Crud
        $this->crudShow($crudTabla, $this->lang->line('b_crud_products', FALSE), '', '', '', '', '', 0, '', '1_1'); //

    }

    //-- Antes de Insertar --------
    public function product_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }   
    
    //-- Antes de Actualizar --------
    public function product_before_update ($post, $id) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }


        return $post;
    }

    //-- Antes de Eliminar --------
    public function product_before_delete($id) {
        $error = false;
        if ($error) {
            return false;
        }


        return true;
    }

    //-- Despues de Insertar --------
    public function product_after_insert($post,$id) {


        return true;
    }

    //-- Despues de Actualizar --------
    public function product_after_update($post,$id) {


        return true;
    }

    //-- Despues de Eliminar --------
    public function product_after_delete($id) {


        return true;
    }


    //-- Metodo Principal --------
    public function image($id) {
        $this->product_id = $id;

        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("image"); // Tabla del Crud
        $crud->order_by('id','desc');
        $crud->where('product_id', $id); // Where

        //-- Lista --------
        $crud->columns("image","created_at");
        //-- Nuevo --------
        $crud->add_fields("product_id","image");
        //-- Editar --------
        $crud->edit_fields("image");
        //-- Etiquetas --------
        $crud->display_as("product_id","Product Id");
        $crud->display_as("image","Image");
        $crud->display_as("created_at","Created At");
        //-- Tipos de Campos --------
        $crud->field_type("id", "numeric");
        $crud->field_type("product_id", "hidden", $id);
        //$crud->field_type("image", "string");
        $crud->field_type("created_at", "datetime");

        //-- Upload File --------
        $crud->set_field_upload("image","assets/uploads/files/images");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "image_before_insert"));
        $crud->callback_before_update(array($this, "image_before_update"));
        $crud->callback_before_delete(array($this, "image_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "image_after_insert"));
        $crud->callback_after_update(array($this, "image_after_update"));
        $crud->callback_after_delete(array($this, "image_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        // $this->crudShow($crudTabla, "Image", '', '', '', '', '', 0, '', '2_1'); //

        // --------------------------------------------------------------
        $product_name = '';
        $data = $this->Model->getRow('product', $id);
        if ( count($data) ) {
            $product_name = $data->name;
        } else {
            $product_name = "Product not found";
        }
        // --------------------------------------------------------------

        $this->crudShow($crudTabla, $this->lang->line('b_crud_images', FALSE) . ' ("' . $product_name . '")', '
            <ol class="breadcrumb">
                <li><a href="'.base_url().'backend/product">'.$this->lang->line('b_crud_products', FALSE).'</a></li>
                <li class="active">'.$this->lang->line('b_crud_images', FALSE).'</li>
            </ol>', '', '', '', '', 0, '', '1_1'); // Show CRUD

    }

    //-- Antes de Insertar --------
    public function image_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }
        $post['product_id'] = $this->product_id;
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

    //-- Metodo Principal --------
    public function related_product($id) {
        $this->product_id = $id;

        $crud = new grocery_CRUD(); // Definicion del CRUD
        $crud->set_table("related_product"); // Tabla del Crud
        $crud->order_by('id','desc');
        $crud->where('product_id', $id); // Where
        
        //-- Lista --------
        $crud->columns("product_related","created_at");
        //-- Nuevo --------
        $crud->add_fields("product_id","product_related");
        //-- Editar --------
        $crud->edit_fields("product_related");

        //-- Etiquetas --------
        $crud->display_as("product_id","Product Id");
        $crud->display_as("product_related","Product Related");
        $crud->display_as("created_at","Created At");
        //-- Tipos de Campos --------
        $crud->field_type("product_id", "hidden", $id);
        // $crud->field_type("product_related", "numeric");
        $crud->field_type("created_at", "datetime");

        //-- Relaciones 1-N --------
        $crud->set_relation("product_related", "product", "name");

        //-- Metodos (Antes de...)
        $crud->callback_before_insert(array($this, "related_product_before_insert"));
        $crud->callback_before_update(array($this, "related_product_before_update"));
        $crud->callback_before_delete(array($this, "related_product_before_delete"));

        //-- Metodos (Despues de...) 
        $crud->callback_after_insert(array($this, "related_product_after_insert"));
        $crud->callback_after_update(array($this, "related_product_after_update"));
        $crud->callback_after_delete(array($this, "related_product_after_delete"));

        $crudTabla = $crud->render(); // Render del Crud
        // $this->crudShow($crudTabla, "Related Products", '', '', '', '', '', 0, '', '2_1'); //

        // --------------------------------------------------------------
        $product_name = '';
        $data = $this->Model->getRow('product', $id);
        if ( count($data) ) {
            $product_name = $data->name;
        } else {
            $product_name = "Product not found";
        }
        // --------------------------------------------------------------

        $this->crudShow($crudTabla, $this->lang->line('b_crud_related_products', FALSE) . ' ("' . $product_name . '")', '
            <ol class="breadcrumb">
                <li><a href="'.base_url().'backend/product">'.$this->lang->line('b_crud_products', FALSE).'</a></li>
                <li class="active">'.$this->lang->line('b_crud_related_products', FALSE).'</li>
            </ol>', '', '', '', '', 0, '', '1_1'); // Show CRUD

    }

    //-- Antes de Insertar --------
    public function related_product_before_insert ($post) {
        foreach ($post as $key => $value) {
            $post[$key] = $this->security->xss_clean($value);
        }
        $post['product_id'] = $this->product_id;

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

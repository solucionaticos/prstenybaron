<?php
defined('BASEPATH') OR exit('Přímý přístup k tomuto skriptu není povolen.');

class Home extends MY_Controller {
    public function __construct() {
        parent::__construct();
	}

	public function index() {
		echo 'Kilo!';
	}
}		
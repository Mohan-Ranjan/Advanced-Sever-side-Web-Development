// application/controllers/University.php

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class University extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    // Method to display the main view for modules
    public function modules() {
        $this->load->view('modules_view');
    }

    // Method to display the main view for students of a module
    public function module_students($module_id) {
        $data['module_id'] = $module_id;
        $this->load->view('module_students_view', $data);
    }

}


// application/controllers/api/UniversityApi.php

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class UniversityApi extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('University_model'); // Load the model for interacting with the database
    }

    // API endpoint to get all modules
    public function modules_get() {
        $modules = $this->University_model->get_modules();
        $this->response($modules, REST_Controller::HTTP_OK);
    }

    // API endpoint to get students for a specific module
    public function module_students_get($module_id) {
        $students = $this->University_model->get_students_by_module($module_id);
        $this->response($students, REST_Controller::HTTP_OK);
    }

}

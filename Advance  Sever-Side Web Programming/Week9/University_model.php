// application/models/University_model.php

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class University_model extends CI_Model {

    // Method to get all modules
    public function get_modules() {
        return $this->db->get('modules')->result_array();
    }

    // Method to get students for a specific module
    public function get_students_by_module($module_id) {
        $this->db->where('module_id', $module_id);
        return $this->db->get('students')->result_array();
    }

}

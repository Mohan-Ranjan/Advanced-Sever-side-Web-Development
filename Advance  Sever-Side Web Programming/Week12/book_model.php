<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {

    public function get_book($id)
    {
        $query = $this->db->get_where('books', array('id' => $id));
        return $query->row_array();
    }
}

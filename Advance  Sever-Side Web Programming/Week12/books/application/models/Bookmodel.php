<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bookmodel extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // return a list of identifiers of books in the database
    function getids()
    {
        $this->db->select(array('id'));
        $res = $this->db->get('books');
        $data = array();
        foreach ($res->result() as $row) {
            $data[] = $row->_id;
        }
        return $data;
    }

    function getbookdata($id) {
        $this->db->where(array('id' => $id));
        $res = $this->db->get('books');

        if ($res->num_rows() != 1) {
            // log_message('DEBUG','$$$$$ num rows is ' . $res->num_rows());
            return false;
        }
        else {
            return $res->row();
        } 
    }
}
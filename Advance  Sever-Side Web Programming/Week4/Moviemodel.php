<?php

class Moviemodel extends CI_Model {
    // I like putting the table name here and then using the attribute variable
    // in the calls to get() so that if I rename the table (for any reason), I only
    // have to change it once here.
    private $table = "movies";
    function __construct()
    {
        $this->load->database();
    }
    // In this example, I search by release year, rather than by genre, but the
    // code is the same (other than the column name)
    function getmovie($year)
    {
        $this->db->where(array('releaseyear' => $year));
        $res = $this->db->get($this->table);

        if ($res->num_rows() == 0) {
            return false;
        }
        else {
            $data = array();
            foreach ($res->result_array() as $row) {
                    $data[] = $row;
            }
            return $data;
        }
    }

    function getallmovies()
    {
        // the query we run is SELECT * FROM movies
        $res = $this->db->get($this->table);
        if ($res->num_rows() == 0) {
            return false;
        }
        else {
            $data = array();
            foreach ($res->row_array() as $row) {
                    $data[] = $row;
            }
            return $data;
        }
    }
}
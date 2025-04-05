<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

    public function index()
    {
        $this->load->view('books_view');
    }

    public function get_book($id)
    {
        $this->load->model('Book_model');
        $book = $this->Book_model->get_book($id);
        echo json_encode($book);
    }
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';
use chriskacerguis\RestServer\RestController;

class Books extends RestController {
    function __construct() {
        parent::__construct();
        $this->load->model('Bookmodel');
    }

    function book_get() {
        // URLs will be something like http://<YOURDOMAIN>/<YOURPATH>/index.php/books/book/1
        $id = $this->uri->segment(3);
        $bookdata = $this->Bookmodel->getbookdata($id);
        echo json_encode($bookdata);
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Moviemodel');
    }

    public function index() {
        $this->load->view('movieview');
    }

    public function movies()
    {
        $year = $this->input->get("year");
        $movies = $this->Moviemodel->getmovie($year);
        $this->load->view('yearview',array('movies' => $movies,'year' => $year));
    }

    public function allmovies()
    {
        $movies = $this->Moviemodel->getallmovies();
        $this->load->view('allview',array('movies' => $movies));
    }
}
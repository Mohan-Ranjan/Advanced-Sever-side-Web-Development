<?php

class Movies extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function index()
	{
		$this->load->view('movieview');
	}

	function getmovies_xml()
	{
		$y = $this->input->get('year');
		$this->load->model('Moviemodel');
		// get movie as DomDocument XML object
		$movie = $this->Moviemodel->getmovie_xml($y);
		// turn it into a string and print it - so it is
		// sent to browser in response
		print $movie->saveXML();
	}

	function getmovies_json()
	{
		$y = $this->input->get('year');
		$this->load->model('Moviemodel');
		// get movie as PHP data structure
		$movie = $this->Moviemodel->getmovie($y);
		print json_encode($movie);
		// print '{"title":"The Terminator","img":"terminator1.jpg"}';
	}
}











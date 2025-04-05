<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinosaurs extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function periods()
    {
        $this->load->view('geologyview');
    }

    public function getinfo()
    {
        // the URL used to execute this function will be something like
        // http://youruserid.users.ecs.westminster.ac.uk/ciapp/index.php/Dinosaurs/getinfo/Triassic
        // So, the segments after index.php will be:
        // 1 = "Dinosaurs"
        // 2 = "getinfo"
        // 3 = "Triassic"
        // So the name of the period we want to display information about will be segment 3

        $period = $this->uri->segment(3);
        $this->load->model('Geology');
        $info = $this->Geology->getPeriodData($period);
        // add the name of the period to the array so we can display it on the next page
        // we could also have put this into the array in the model, rather than here
        $info['periodName'] = $period;
        $this->load->view('periodview',$info);
    }
}
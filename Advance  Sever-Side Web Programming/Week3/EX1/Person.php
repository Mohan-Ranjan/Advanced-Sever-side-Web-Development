<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    // Define the index method.  Calling this method will display the form that asks
    // for a person's date of birth.
    public function index() {
        $this->load->view('dobform');
    }

    public function age() {
        // get the form data sent using GET request method.  'DOB' is the form field name.
        // For brevity's sake, we'll assume the format is DD-MM-YYYY.
        $dob = $this->input->get('DOB');

        // Load the model so we can use it to calculate age.  We are following
        // MVC principles which mean that any data processing must take place in a
        // model.
        $this->load->model('Personmodel');
        // When the model is loaded, CodeIgniter dynamically creates an attribute in the 
        // controller object whose name matches the model class name and which stores the
        // model object for us to use.  so $this->Personmodel is the name of the dynamically-created
        // model object (matching the model class name), and its value is the model object.
        // We now call the calculateAge() method function in the model object.
        // (Note we could not call the model 'Person' because this is already the name of the 
        // controller class - and you cannot have two classes with the same name in the same
        // application.)
        $age = $this->Personmodel->calculateAge($dob);
        $this->load->view('ageview',array('yourAge' => $age));
    }
}
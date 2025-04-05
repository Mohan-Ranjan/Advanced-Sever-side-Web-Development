// application/controllers/FormController.php

class FormController extends CI_Controller {

    public function index() {
        $this->load->view('form_view');
    }

}

// application/controllers/FormController.php

class FormController extends CI_Controller {

    public function index() {
        $this->load->view('form_view');
    }

    public function get_celebrity_info() {
        $name = $this->input->post('name');
        
        // Load the Celebrity_model
        $this->load->model('celebrity_model');
        
        // Get information about the celebrity
        $celebrity_info = $this->celebrity_model->get_celebrity_info($name);
        
        // Return the data as JSON
        echo json_encode($celebrity_info);
    }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function register() {
        $this->load->view('register');
    }

    public function create_user() {
        $this->load->model('User_model');
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        $this->User_model->create_user($username, $password);
        redirect('login');
    }

    public function login() {
        $this->load->view('login');
    }

    public function authenticate() {
        $this->load->model('User_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->User_model->get_user($username);
        if ($user && password_verify($password, $user->password)) {
            $this->session->set_userdata('user_id', $user->id);
            redirect('bookmarks');
        } else {
            redirect('login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('login');
    }
}
?>

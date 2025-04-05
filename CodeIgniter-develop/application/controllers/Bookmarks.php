<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookmarks extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Bookmark_model');
        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
    }

    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "bookmarks/index";
        $config["total_rows"] = $this->Bookmark_model->count_all();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["bookmarks"] = $this->Bookmark_model->get_bookmarks($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view('bookmarks/index', $data);
    }

    public function create() {
        $this->load->view('bookmarks/create');
    }

    public function store() {
        $data = array(
            'user_id' => $this->session->userdata('user_id'),
            'title' => $this->input->post('title'),
            'url' => $this->input->post('url'),
            'tags' => $this->input->post('tags')
        );
        $this->Bookmark_model->insert_bookmark($data);
        redirect('bookmarks');
    }

    public function edit($id) {
        $data['bookmark'] = $this->Bookmark_model->get_bookmark($id);
        $this->load->view('bookmarks/edit', $data);
    }

    public function update($id) {
        $data = array(
            'title' => $this->input->post('title'),
            'url' => $this->input->post('url'),
            'tags' => $this->input->post('tags')
        );
        $this->Bookmark_model->update_bookmark($id, $data);
        redirect('bookmarks');
    }

    public function delete($id) {
        $this->Bookmark_model->delete_bookmark($id);
        redirect('bookmarks');
    }

    public function search() {
        $tag = $this->input->get('tag');
        $data['bookmarks'] = $this->Bookmark_model->search_bookmarks_by_tag($tag);
        $this->load->view('bookmarks/index', $data);
    }
}
?>

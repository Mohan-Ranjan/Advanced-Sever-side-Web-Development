<?php
class Bookmark_model extends CI_Model {

    public function count_all() {
        return $this->db->count_all('bookmarks');
    }

    public function get_bookmarks($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->where('user_id', $this->session->userdata('user_id'));
        $query = $this->db->get("bookmarks");
        return $query->result();
    }

    public function insert_bookmark($data) {
        return $this->db->insert('bookmarks', $data);
    }
    
    public function get_bookmark($id) {
        return $this->db->get_where('bookmarks', array('id' => $id))->row();
    }

    public function update_bookmark($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('bookmarks', $data);
    }

    public function delete_bookmark($id) {
        $this->db->where('id', $id);
        return $this->db->delete('bookmarks');
    }

    public function search_bookmarks_by_tag($tag) {
        $this->db->like('tags', $tag);
        $this->db->where('user_id', $this->session->userdata('user_id'));
        $query = $this->db->get('bookmarks');
        return $query->result();
    }
}
?>

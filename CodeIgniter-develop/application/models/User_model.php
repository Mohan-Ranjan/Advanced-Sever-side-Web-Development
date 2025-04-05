<?php
class User_model extends CI_Model {

    public function create_user($username, $password) {
        $data = array(
            'username' => $username,
            'password' => $password
        );
        return $this->db->insert('users', $data);
    }

    public function get_user($username) {
        return $this->db->get_where('users', array('username' => $username))->row();
    }
}
?>

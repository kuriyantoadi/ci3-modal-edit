<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function get_users() {
        return $this->db->get('tb_user')->result();
    }

    public function get_user($id) {
        return $this->db->get_where('tb_user', array('id_user' => $id))->row();
    }

    public function update_user($id, $data) {
        $this->db->where('id_user', $id);
        $this->db->update('tb_user', $data);
    }
}

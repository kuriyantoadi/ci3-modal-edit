<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index() {
        $data['users'] = $this->UserModel->get_users();
        $this->load->view('user_list', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        $data = array(
            'nama_pengguna' => $this->input->post('nama_pengguna'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT), // hash password
            'status' => $this->input->post('status'),
            'status_user' => $this->input->post('status_user')
        );

        $this->UserModel->update_user($id, $data);
        redirect('user');
    }
}

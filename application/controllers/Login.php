<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {

        $this->load->view('login/index');
    }
    public function validasi()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->db->where('username', $username);
        $data = $this->db->get('user')->row_array();

        if (!empty($data)) {
            $p = md5($password);

            if ($data['password'] == $p) {
                $this->session->set_userdata('masuk', true);
                $this->session->set_userdata('nama', $data['nama']);
                $this->session->set_userdata('username', $data['username']);
                $this->session->set_userdata('password', $data['password']);
                redirect('Home');
            } else {
                $this->session->set_flashdata('error', '<div class="alert alert-warning"><b>Username dan password Salah!</b> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('Login');
            }
        } else {
            $this->session->set_flashdata('error', '<div class="alert alert-warning"><b>Username dan password Salah!</b> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('Login');
        }
    }

    public function profil()
    {
        $data['halaman'] = 'login/profil';
        $this->load->view('template/template', $data);
    }

    public function logout()
    {

        $this->session->sess_destroy();
        redirect('login');
    }
}

/* End of file Login.php */

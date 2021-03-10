<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            redirect('Login');
        }
    }


    public function index()
    {
        $data['halaman'] = 'index';
        $this->load->view('template/template', $data);
    }
}

/* End of file HomeControllername.php */

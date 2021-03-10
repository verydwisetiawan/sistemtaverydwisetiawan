<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{
    var $tbl_kuesioner = 'tb_kuesioner';
    var $tbl_responden = 'tbl_responden';
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            redirect('Login');
        }
    }
    public function index()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('tgl_awal', 'Text Field One', 'required');
        $this->form_validation->set_rules('tgl_akhir', 'Text Field One', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data['tgl_awal'] =  $this->input->post('tgl_awal', true);
            $data['tgl_akhir'] = $this->input->post('tgl_akhir', true);
        } else {
            $data['tgl_awal'] = date('2020-01-01');
            $data['tgl_akhir'] = date('Y-m-d');
        }

        // var_dump($data['tgl_akhir']);
        // die;
        $data['halaman'] = 'hasil/index';
        $data['tbl_kuesioner'] = $this->M_General->getAll($this->tbl_kuesioner, 'id', 'asc')->result();
        $data['jml_responden'] = $this->M_General->countAll($this->tbl_responden);
        $this->load->view('template/template', $data);
    }
}

/* End of file Hasil.php */

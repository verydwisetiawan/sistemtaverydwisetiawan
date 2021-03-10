<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Responden  extends CI_Controller
{

    var $tabel = 'tbl_responden';
    var $tbl_jawaban = 'tbl_jawaban';
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            redirect('Login');
        }
    }
    public function index()
    {
        $this->load->helper('system');
        $data['halaman'] = 'responden/index';
        $data['isi'] = $this->M_General->getAll($this->tabel, 'id', 'asc')->result();
        $this->load->view('template/template', $data);
    }

    public function detail($id)
    {
        $this->load->helper('system');
        $data['halaman'] = 'responden/detail';
        $data['isi'] = $this->M_General->getByID($this->tabel, 'id', $id, 'asc')->row_array();
        $this->db->order_by('id', 'acs');
        $this->db->where('id_responden', $id);
        $data['isi_tbl_jawaban'] = $this->db->get($this->tbl_jawaban)->result();

        $this->load->view('template/template', $data);
    }
}

/* End of file Responden Controllername.php */

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kuesioner extends CI_Controller
{
    var $tabel = 'tb_kuesioner';
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            redirect('Login');
        }
    }
    public function index()
    {
        $data['halaman'] = 'Kuesioner/index';
        $data['isi'] = $this->M_General->getAll($this->tabel, 'id', 'desc')->result();
        $this->load->view('template/template', $data);
    }

    public function insert()
    {
        $kuesioner = $this->input->post('kuesioner', true);
        $data = array(
            'isi_kuesioner' => $kuesioner
        );
        $this->M_General->insert($this->tabel, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success"><b>Data Berhasil di Simpan!</b> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Kuesioner');
    }

    public function update()
    {
        $kuesioner  = $this->input->post('kuesioner', true);
        $id         = $this->input->post('id', true);

        $data = array(
            'isi_kuesioner' => $kuesioner
        );
        $this->M_General->update($this->tabel, $data, 'id', $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success"><b>Data Berhasil di Update!</b> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Kuesioner');
    }
    public function hapus()
    {
        $id = $this->input->post('id', true);
        $this->M_General->delete($this->tabel, 'id', $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success"><b>Data Berhasil di Hapus!</b> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('Kuesioner');
    }
}

/* End of file Controllername.php */

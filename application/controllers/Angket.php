<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Angket extends CI_Controller
{
    var $t_kuesioner = 'tb_kuesioner';
    var $t_responden = 'tbl_responden';
    var $t_jawaban = 'tbl_jawaban';
    public function index()
    {

        $data['kuesioner'] = $this->M_General->getAll($this->t_kuesioner, 'id', 'asc')->result();
        $this->load->view('angket/index', $data);
    }
    public function insert()
    {
        $nama = $this->input->post('nama', true);
        $jk = $this->input->post('jk', true);
        $usia = $this->input->post('usia', true);
        $pendidikan = $this->input->post('pendidikan', true);
        $pekerjaan = $this->input->post('pekerjaan', true);
        $layanan = $this->input->post('layanan', true);

        $id_kuesioner = $this->input->post('id_kuesioner', true);
        // $input_kinerja = $this->input->post('kinerja', true);
        // $input_kepentingan = $this->input->post('kepentingan', true);

        $data_kuesioner = array(
            'nama'          => $nama,
            'jk'            => $jk,
            'usia'          => $usia,
            'pendidikan'    => $pendidikan,
            'pekerjaan'     => $pekerjaan,
            'layanan'       => $layanan,
        );
        $this->M_General->insert($this->t_responden, $data_kuesioner);
        $id = $this->db->insert_id();
        // var_dump($id_kuesioner);
        // die;
        $data = array();
        foreach ($id_kuesioner as $key => $value) {
            array_push($data, array(
                'id_kuesioner' => $value,
                'id_responden'   => $id,
                'jwb_kinerja'   => $this->input->post('kinerja' . $value),
                'jwb_kepentingan'   => $this->input->post('kepentingan' . $value),
                'tanggal' => date('Y-m-d')
            ));
        }

        $this->M_General->insert_bath($this->t_jawaban, $data);
        $this->load->view('angket/success');
        // $query = $this->db->last_query();
        // var_dump($query, $data, $data_kuesioner);
        // die;
    }

    public function success()
    {
        $this->load->view('angket/success');
    }
}

/* End of file Angket.php */

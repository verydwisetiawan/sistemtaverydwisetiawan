<?php

/**
 * @author P.S Nasution
 */
class M_General extends CI_Model
{

    //mengambil semua data
    public function getAll($tables, $sort, $type)
    {
        $this->db->order_by($sort, $type);
        return $this->db->get($tables);
    }

    //menghitung isi table keseluruhan
    public function countAll($tables)
    {
        return $this->db->get($tables)->num_rows();
    }

    //mengambik data berdasarkan kondisi
    public function getByID($tables, $pk, $id, $type)
    {
        $this->db->order_by($pk, $type);
        $this->db->where($pk, $id);
        return $this->db->get($tables);
    }

    //menghitung berdasarkan ID
    public function countByID($tables, $pk, $id)
    {
        $this->db->where($pk, $id);
        return $this->db->get($tables)->num_rows();
    }


    public function distinct($tables, $dis, $pk, $id)
    {
        $query = "SELECT DISTINCT
                    $tables.$dis
                    FROM
                    $tables
                    WHERE
                    $tables.$pk = '$id'";
        return $this->db->query($query);
    }

    public function insert($tables, $data)
    {
        $this->db->insert($tables, $data);
    }

    //insert tabel sekali banyak
    public function insert_bath($tables, $data)
    {
        $this->db->insert_batch($tables, $data);
    }

    public function update($tables, $data, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->update($tables, $data);
    }

    public function delete($tables, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->delete($tables);
    }

    public function truncate($tables)
    {
        $this->db->truncate($tables);
    }

    function login($tables, $username, $password)
    {
        return $this->db->get_where($tables, array('email' => $username, 'password' => $password));
    }

    public function save_log($param)
    {
        $sql = $this->db->insert_string('tb_log', $param);
        $ex  = $this->db->query($sql);
        return $this->db->affected_rows($sql);
    }
}

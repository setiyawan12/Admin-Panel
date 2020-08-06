<?php
class M_pengguna extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_pengguna');
    }
    public function input_data($data, $table)
    {
        return $this->db->insert($table, $data);
    }
}

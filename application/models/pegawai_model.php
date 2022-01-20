<?php
class Pegawai_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('pegawai');
    }
    public function input_data($data)
    {
        $this->db->insert('pegawai', $data);
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

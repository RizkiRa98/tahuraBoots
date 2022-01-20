<?php
class User_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('user');
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

<?php
class Etc_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('etc');
    }
    public function input_data($data)
    {
        $this->db->insert('etc', $data);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

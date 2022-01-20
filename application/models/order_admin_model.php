<?php
class Order_admin_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('order');
    }
    public function edit_order($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_order($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function detail_order($id_order)
    {
        $result = $this->db->where('id_order', $id_order)->get('order');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('order');
        $this->db->like('nama', $keyword);
        $this->db->or_like('address', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('phone_number', $keyword);
        $this->db->or_like('instagram', $keyword);
        $this->db->or_like('nama_model', $keyword);
        $this->db->or_like('size', $keyword);
        $this->db->or_like('order_date', $keyword);
        return $this->db->get()->result();
    }
}

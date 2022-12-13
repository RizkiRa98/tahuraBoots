<?php
class Order extends CI_Controller
{
    public function index()
    {
        $data['order'] = $this->order_admin_model->tampil_data()->result();
        $data['title'] = 'Data Order';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/order', $data);
        $this->load->view('templates_admin/footer');
    }

    public function delete($id_order)
    {
        $where = array('id_order' => $id_order);
        $this->order_admin_model->delete_data($where, 'order');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data order has been deleted </div>');
        redirect('admin/order');
    }

    public function edit($id)
    {
        $data['model'] = $this->order_model->tampil_data('model')->result();
        $data['upper'] = $this->order_model->tampil_data('upper')->result();
        $data['lining'] = $this->order_model->tampil_data('lining')->result();
        $data['construction'] = $this->order_model->tampil_data('construction')->result();
        $data['outsole'] = $this->order_model->tampil_data('outsole')->result();
        $data['weltcolour'] = $this->order_model->tampil_data('weltcolour')->result();
        $data['edgecolour'] = $this->order_model->tampil_data('edgecolour')->result();
        $data['weltstite'] = $this->order_model->tampil_data('weltstite')->result();
        $data['toebox'] = $this->order_model->tampil_data('toebox')->result();
        $data['heels'] = $this->order_model->tampil_data('heels')->result();
        $data['get_total'] = $this->pegawai_model->get_total();

        $where = array('id_order' => $id);
        $data['order'] = $this->order_admin_model->edit_order($where, 'order')->result();
        $data['title'] = 'Update Order';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/order_update', $data);
    }

    public function update()
    {
        $id           = $this->input->post('id_order');
        $address    = $this->input->post('address');
        $nama_model    = $this->input->post('nama_model');
        $nama_upper     = $this->input->post('nama_upper');
        $nama_lining     = $this->input->post('nama_lining');
        $nama_construction     = $this->input->post('nama_construction');
        $nama_outsole     = $this->input->post('nama_outsole');
        $nama_weltcolour     = $this->input->post('nama_weltcolour');
        $nama_edgecolour     = $this->input->post('nama_edgecolour');
        $nama_weltstite     = $this->input->post('nama_weltstite');
        $nama_toebox     = $this->input->post('nama_toebox');
        $nama_heels     = $this->input->post('nama_heels');
        $size     = $this->input->post('size');
        $harga  = $this->input->post('harga');
        $status = $this->input->post('status');
        $biaya_pegawai = $this->input->post('biaya_pegawai');

        $data = array(
            'address' => $address,
            'nama_model' => strtok($nama_model, '/'),
            'nama_upper' => strtok($nama_upper, '/'),
            'nama_lining' => strtok($nama_lining, '/'),
            'nama_construction' => strtok($nama_construction, '/'),
            'nama_outsole' => strtok($nama_outsole, '/'),
            'nama_weltcolour' => strtok($nama_weltcolour, '/'),
            'nama_edgecolour' => strtok($nama_edgecolour, '/'),
            'nama_weltstite' => strtok($nama_weltstite, '/'),
            'nama_toebox' => strtok($nama_toebox, '/'),
            'nama_heels' => strtok($nama_heels, '/'),
            'size' => $size,
            'harga' => $harga,
            'biaya_pegawai' => $biaya_pegawai,
            'status' => $status
        );
        $where = array(
            'id_order' => $id
        );
        $this->order_admin_model->update_order($where, $data, 'order');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data order has been updated! </div>');
        redirect('admin/order');
    }
    public function detail($id_order)
    {
        $data['order'] = $this->order_admin_model->detail_order($id_order);
        $data['title'] = 'Detail Order';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/order_detail', $data);
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['order'] = $this->order_admin_model->get_keyword($keyword);
        $data['title'] = 'Data Order';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/order', $data);
        $this->load->view('templates_admin/footer');
    }
}

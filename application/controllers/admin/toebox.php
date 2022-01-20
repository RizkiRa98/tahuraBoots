<?php
class Toebox extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('email')) {
        //     redirect('auth');
        // }
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['toebox'] = $this->toebox_model->tampil_data()->result();
        $data['title'] = 'Data Toebox';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/toebox', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_toebox' => set_value('id_toebox'),
            'nama_toebox' => set_value('nama_toebox'),
            'harga' => set_value('harga')
        );
        $data['title'] = 'Input Toebox';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/toebox_form');
        $this->load->view('templates_admin/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_toebox', 'ID Toebox', 'required|trim|is_unique[toebox.id_toebox]', [
            'is_unique' => 'This ID Toebox has already inputed!'
        ]);
        $this->form_validation->set_rules('nama_toebox', 'Toebox Name', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');
    }
    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $data = array(
                'id_toebox' => $this->input->post('id_toebox', true),
                'nama_toebox' => $this->input->post('nama_toebox', true),
                'harga' => $this->input->post('harga', true)
            );
            $this->toebox_model->input_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data toebox success! </div>');
            redirect('admin/toebox');
        }
    }
    public function update($id)
    {
        $where = array('id_toebox' => $id);
        $data['toebox'] = $this->toebox_model->edit_data($where, 'toebox')->result();
        $data['title'] = 'Update Toebox';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/toebox_update');
        $this->load->view('templates_admin/footer');
    }

    public function action_update()
    {
        $id = $this->input->post('id_toebox');
        $nama_toebox = $this->input->post('nama_toebox');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_toebox' => $nama_toebox,
            'harga' => $harga
        );
        $where = array(
            'id_toebox' => $id
        );

        $this->toebox_model->update_data($where, $data, 'toebox');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data toebox has been updated! </div>');
        redirect('admin/toebox');
    }

    public function delete($id_toebox)
    {
        $where = array('id_toebox' => $id_toebox);
        $this->toebox_model->delete_data($where, 'toebox');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data toebox has been deleted </div>');
        redirect('admin/toebox');
    }
}

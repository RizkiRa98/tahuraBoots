<?php
class Leather extends CI_Controller
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
        $data['leather'] = $this->leather_model->tampil_data()->result();
        $data['title'] = 'Data Leather Sole';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/leather', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_leather' => set_value('id_leather'),
            'nama_leather' => set_value('nama_leather'),
            'harga' => set_value('harga')
        );
        $data['title'] = 'Input Leather Sole';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/leather_form');
        $this->load->view('templates_admin/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_leather', 'ID Leather', 'required|trim|is_unique[leather.id_leather]', [
            'is_unique' => 'This ID leather sole has already inputed!'
        ]);
        $this->form_validation->set_rules('nama_leather', 'Leather Name', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');
    }
    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $data = array(
                'id_leather' => $this->input->post('id_leather', true),
                'nama_leather' => $this->input->post('nama_leather', true),
                'harga' => $this->input->post('harga', true)
            );
            $this->leather_model->input_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data leather sole success! </div>');
            redirect('admin/leather');
        }
    }
    public function update($id)
    {
        $where = array('id_leather' => $id);
        $data['leather'] = $this->leather_model->edit_data($where, 'leather')->result();
        $data['title'] = 'Update Model';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/leather_update');
        $this->load->view('templates_admin/footer');
    }
    public function action_update()
    {
        $id = $this->input->post('id_leather');
        $nama_leather = $this->input->post('nama_leather');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_leather' => $nama_leather,
            'harga' => $harga
        );
        $where = array(
            'id_leather' => $id
        );

        $this->leather_model->update_data($where, $data, 'leather');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data leather sole has been updated! </div>');
        redirect('admin/leather');
    }
    public function delete($id_leather)
    {
        $where = array('id_leather' => $id_leather);
        $this->leather_model->delete_data($where, 'leather');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data leather sole has been deleted </div>');
        redirect('admin/leather');
    }
}

<?php
class Outsole extends CI_Controller
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
        $data['outsole'] = $this->outsole_model->tampil_data()->result();
        $data['title'] = 'Data Outsole';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/outsole', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_outsole' => set_value('id_outsole'),
            'nama_outsole' => set_value('nama_outsole'),
            'harga' => set_value('harga')
        );
        $data['title'] = 'Input Outsole';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/outsole_form');
        $this->load->view('templates_admin/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_outsole', 'ID Outsole', 'required|trim|is_unique[outsole.id_outsole]', [
            'is_unique' => 'This ID outsole has already inputed!'
        ]);
        $this->form_validation->set_rules('nama_outsole', 'Outsole Name', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');
    }
    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $data = array(
                'id_outsole' => $this->input->post('id_outsole', true),
                'nama_outsole' => $this->input->post('nama_outsole', true),
                'harga' => $this->input->post('harga', true)
            );
            $this->outsole_model->input_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data outsole success! </div>');
            redirect('admin/outsole');
        }
    }
    public function update($id)
    {
        $where = array('id_outsole' => $id);
        $data['outsole'] = $this->outsole_model->edit_data($where, 'outsole')->result();
        $data['title'] = 'Update Outsole';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/outsole_update');
        $this->load->view('templates_admin/footer');
    }

    public function action_update()
    {
        $id = $this->input->post('id_outsole');
        $nama_outsole = $this->input->post('nama_outsole');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_outsole' => $nama_outsole,
            'harga' => $harga
        );
        $where = array(
            'id_outsole' => $id
        );

        $this->outsole_model->update_data($where, $data, 'outsole');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data outsole has been updated! </div>');
        redirect('admin/outsole');
    }

    public function delete($id_outsole)
    {
        $where = array('id_outsole' => $id_outsole);
        $this->upper_model->delete_data($where, 'outsole');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data model has been deleted </div>');
        redirect('admin/outsole');
    }
}

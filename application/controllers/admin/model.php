<?php
class Model extends CI_Controller
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
        $data['model'] = $this->model_model->tampil_data()->result();
        $data['title'] = 'Data Model';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/model', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_model' => set_value('id_model'),
            'nama_model' => set_value('nama_model'),
            'size_model' => set_value('size_model'),
            'harga' => set_value('harga')
        );
        $data['title'] = 'Input Model';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/model_form');
        $this->load->view('templates_admin/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_model', 'ID Model', 'required|trim|is_unique[model.id_model]', [
            'is_unique' => 'This ID model has already inputed!'
        ]);
        $this->form_validation->set_rules('nama_model', 'Model Name', 'required');
        $this->form_validation->set_rules('size_model', 'Feet', 'required');
        $this->form_validation->set_rules('harga', 'Isi dengan 0', 'required');
    }
    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $data = array(
                'id_model' => $this->input->post('id_model', true),
                'nama_model' => $this->input->post('nama_model', true),
                'size_model' => $this->input->post('size_model', true),
                'harga' => $this->input->post('harga', true)
            );
            $this->model_model->input_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data model success! </div>');
            redirect('admin/model');
        }
    }
    public function update($id)
    {
        $where = array('id_model' => $id);
        $data['model'] = $this->model_model->edit_data($where, 'model')->result();
        $data['title'] = 'Update Model';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/model_update');
        $this->load->view('templates_admin/footer');
    }

    public function action_update()
    {
        $id = $this->input->post('id_model');
        $nama_model = $this->input->post('nama_model');
        $size_model = $this->input->post('size_model');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_model' => $nama_model,
            'size_model' => $size_model,
            'harga' => $harga
        );
        $where = array(
            'id_model' => $id
        );

        $this->model_model->update_data($where, $data, 'model');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data model has been updated! </div>');
        redirect('admin/model');
    }

    public function delete($id_model)
    {
        $where = array('id_model' => $id_model);
        $this->model_model->delete_data($where, 'model');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data model has been deleted </div>');
        redirect('admin/model');
    }
}

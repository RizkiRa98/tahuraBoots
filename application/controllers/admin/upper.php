<?php
class Upper extends CI_Controller
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
        $data['upper'] = $this->upper_model->tampil_data()->result();
        $data['title'] = 'Data Upper';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/upper', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_upper' => set_value('id_upper'),
            'nama_upper' => set_value('nama_upper'),
            'harga' => set_value('harga')
        );
        $data['title'] = 'Input Uppper';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/upper_form');
        $this->load->view('templates_admin/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_upper', 'ID Upper', 'required|trim|is_unique[upper.id_upper]', [
            'is_unique' => 'This ID upper has already inputed!'
        ]);
        $this->form_validation->set_rules('nama_upper', 'Upper Name', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');
    }
    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $data = array(
                'id_upper' => $this->input->post('id_upper', true),
                'nama_upper' => $this->input->post('nama_upper', true),
                'harga' => $this->input->post('harga', true)
            );
            $this->upper_model->input_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data upper success! </div>');
            redirect('admin/upper');
        }
    }
    public function update($id)
    {
        $where = array('id_upper' => $id);
        $data['upper'] = $this->upper_model->edit_data($where, 'upper')->result();
        $data['title'] = 'Update Upper';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/upper_update');
        $this->load->view('templates_admin/footer');
    }

    public function action_update()
    {
        $id = $this->input->post('id_upper');
        $nama_upper = $this->input->post('nama_upper');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_upper' => $nama_upper,
            'harga' => $harga
        );
        $where = array(
            'id_upper' => $id
        );

        $this->upper_model->update_data($where, $data, 'upper');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data upper has been updated! </div>');
        redirect('admin/upper');
    }
    public function delete($id_upper)
    {
        $where = array('id_upper' => $id_upper);
        $this->upper_model->delete_data($where, 'upper');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data upper has been deleted </div>');
        redirect('admin/upper');
    }
}

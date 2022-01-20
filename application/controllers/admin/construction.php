<?php
class Construction extends CI_Controller
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
        $data['construction'] = $this->construction_model->tampil_data()->result();
        $data['title'] = 'Data Construction';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/construction', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_construction' => set_value('id_construction'),
            'nama_construction' => set_value('nama_construction'),
            'harga' => set_value('harga')
        );
        $data['title'] = 'Input Construction';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/construction_form');
        $this->load->view('templates_admin/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_construction', 'ID Construction', 'required|trim|is_unique[construction.id_construction]', [
            'is_unique' => 'This ID construction has already inputed!'
        ]);
        $this->form_validation->set_rules('nama_construction', 'Construction Name', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');
    }
    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $data = array(
                'id_construction' => $this->input->post('id_construction', true),
                'nama_construction' => $this->input->post('nama_construction', true),
                'harga' => $this->input->post('harga', true)
            );
            $this->construction_model->input_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data construction success! </div>');
            redirect('admin/construction');
        }
    }
    public function update($id)
    {
        $where = array('id_construction' => $id);
        $data['construction'] = $this->construction_model->edit_data($where, 'construction')->result();
        $data['title'] = 'Update Construction';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/construction_update');
        $this->load->view('templates_admin/footer');
    }

    public function action_update()
    {
        $id = $this->input->post('id_construction');
        $nama_construction = $this->input->post('nama_construction');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_construction' => $nama_construction,
            'harga' => $harga
        );
        $where = array(
            'id_construction' => $id
        );

        $this->construction_model->update_data($where, $data, 'construction');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data construction has been updated! </div>');
        redirect('admin/construction');
    }

    public function delete($id_construction)
    {
        $where = array('id_construction' => $id_construction);
        $this->construction_model->delete_data($where, 'construction');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data construction has been deleted </div>');
        redirect('admin/construction');
    }
}

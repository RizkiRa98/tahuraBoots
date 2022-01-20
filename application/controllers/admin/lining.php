<?php
class Lining extends CI_Controller
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
        $data['lining'] = $this->lining_model->tampil_data()->result();
        $data['title'] = 'Data Lining';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/lining', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_lining' => set_value('id_lining'),
            'nama_lining' => set_value('nama_lining'),
            'harga' => set_value('harga')
        );
        $data['title'] = 'Input Lining';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/lining_form');
        $this->load->view('templates_admin/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_lining', 'ID Lining', 'required|trim|is_unique[lining.id_lining]', [
            'is_unique' => 'This ID lining has already inputed!'
        ]);
        $this->form_validation->set_rules('nama_lining', 'Lining Name', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');
    }
    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $data = array(
                'id_lining' => $this->input->post('id_lining', true),
                'nama_lining' => $this->input->post('nama_lining', true),
                'harga' => $this->input->post('harga', true)
            );
            $this->lining_model->input_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data lining success! </div>');
            redirect('admin/lining');
        }
    }
    public function update($id)
    {
        $where = array('id_lining' => $id);
        $data['lining'] = $this->lining_model->edit_data($where, 'lining')->result();
        $data['title'] = 'Update Lining';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/lining_update');
        $this->load->view('templates_admin/footer');
    }
    public function action_update()
    {
        $id = $this->input->post('id_lining');
        $nama_lining = $this->input->post('nama_lining');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_lining' => $nama_lining,
            'harga' => $harga
        );
        $where = array(
            'id_lining' => $id
        );

        $this->model_model->update_data($where, $data, 'lining');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data lining has been updated! </div>');
        redirect('admin/lining');
    }
    public function delete($id_lining)
    {
        $where = array('id_lining' => $id_lining);
        $this->lining_model->delete_data($where, 'lining');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data lining has been deleted </div>');
        redirect('admin/lining');
    }
}

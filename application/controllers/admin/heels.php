<?php
class Heels extends CI_Controller
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
        $data['heels'] = $this->heels_model->tampil_data()->result();
        $data['title'] = 'Data Heels';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/heels', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_heels' => set_value('id_heels'),
            'nama_heels' => set_value('nama_heels'),
            'harga' => set_value('harga')
        );
        $data['title'] = 'Input heels';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/heels_form');
        $this->load->view('templates_admin/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_heels', 'ID Heels', 'required|trim|is_unique[heels.id_heels]', [
            'is_unique' => 'This ID heels has already inputed!'
        ]);
        $this->form_validation->set_rules('nama_heels', 'Heels Name', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');
    }
    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $data = array(
                'id_heels' => $this->input->post('id_heels', true),
                'nama_heels' => $this->input->post('nama_heels', true),
                'harga' => $this->input->post('harga', true)
            );
            $this->heels_model->input_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data heels success! </div>');
            redirect('admin/heels');
        }
    }
    public function update($id)
    {
        $where = array('id_heels' => $id);
        $data['heels'] = $this->heels_model->edit_data($where, 'heels')->result();
        $data['title'] = 'Update Heels';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/heels_update');
        $this->load->view('templates_admin/footer');
    }

    public function action_update()
    {
        $id = $this->input->post('id_heels');
        $nama_heels = $this->input->post('nama_heels');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_heels' => $nama_heels,
            'harga' => $harga
        );
        $where = array(
            'id_heels' => $id
        );

        $this->heels_model->update_data($where, $data, 'heels');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data heels has been updated! </div>');
        redirect('admin/heels');
    }
    public function delete($id_heels)
    {
        $where = array('id_heels' => $id_heels);
        $this->heels_model->delete_data($where, 'heels');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data heels has been deleted </div>');
        redirect('admin/heels');
    }
}

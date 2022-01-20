<?php
class Weltcolour extends CI_Controller
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
        $data['weltcolour'] = $this->weltcolour_model->tampil_data()->result();
        $data['title'] = 'Data Welt Colour';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/weltcolour', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_weltcolour' => set_value('id_weltcolour'),
            'nama_weltcolour' => set_value('nama_weltcolour'),
            'harga' => set_value('harga')
        );
        $data['title'] = 'Input Weltcolour';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/weltcolour_form');
        $this->load->view('templates_admin/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_weltcolour', 'ID welt colour', 'required|trim|is_unique[weltcolour.id_weltcolour]', [
            'is_unique' => 'This ID welt colour has already inputed!'
        ]);
        $this->form_validation->set_rules('nama_weltcolour', 'Welt Colour Name', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');
    }
    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $data = array(
                'id_weltcolour' => $this->input->post('id_weltcolour', true),
                'nama_weltcolour' => $this->input->post('nama_weltcolour', true),
                'harga' => $this->input->post('harga', true)
            );
            $this->weltcolour_model->input_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data welt colour success! </div>');
            redirect('admin/weltcolour');
        }
    }
    public function update($id)
    {
        $where = array('id_weltcolour' => $id);
        $data['weltcolour'] = $this->weltcolour_model->edit_data($where, 'weltcolour')->result();
        $data['title'] = 'Update Welt Colour';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/weltcolour_update');
        $this->load->view('templates_admin/footer');
    }

    public function action_update()
    {
        $id = $this->input->post('id_weltcolour');
        $nama_weltcolour = $this->input->post('nama_weltcolour');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_weltcolour' => $nama_weltcolour,
            'harga' => $harga
        );
        $where = array(
            'id_weltcolour' => $id
        );

        $this->weltcolour_model->update_data($where, $data, 'weltcolour');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data welt colour has been updated! </div>');
        redirect('admin/weltcolour');
    }

    public function delete($id_weltcolour)
    {
        $where = array('id_weltcolour' => $id_weltcolour);
        $this->weltcolour_model->delete_data($where, 'weltcolour');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data welt colour has been deleted </div>');
        redirect('admin/weltcolour');
    }
}

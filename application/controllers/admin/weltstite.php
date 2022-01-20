<?php
class Weltstite extends CI_Controller
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
        $data['weltstite'] = $this->weltstite_model->tampil_data()->result();
        $data['title'] = 'Data weltstite';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/weltstite', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_weltstite' => set_value('id_weltstite'),
            'nama_weltstite' => set_value('nama_weltstite'),
            'harga' => set_value('harga')
        );
        $data['title'] = 'Input Welt Stite';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/weltstite_form');
        $this->load->view('templates_admin/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_weltstite', 'ID Welt Stite', 'required|trim|is_unique[weltstite.id_weltstite]', [
            'is_unique' => 'This ID Welt Stite has already inputed!'
        ]);
        $this->form_validation->set_rules('nama_weltstite', 'Welt Stite Name', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');
    }
    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $data = array(
                'id_weltstite' => $this->input->post('id_weltstite', true),
                'nama_weltstite' => $this->input->post('nama_weltstite', true),
                'harga' => $this->input->post('harga', true)
            );
            $this->weltstite_model->input_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data weltstite success! </div>');
            redirect('admin/weltstite');
        }
    }
    public function update($id)
    {
        $where = array('id_weltstite' => $id);
        $data['weltstite'] = $this->weltstite_model->edit_data($where, 'weltstite')->result();
        $data['title'] = 'Update Welt Stite';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/weltstite_update');
        $this->load->view('templates_admin/footer');
    }

    public function action_update()
    {
        $id = $this->input->post('id_weltstite');
        $nama_weltstite = $this->input->post('nama_weltstite');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_weltstite' => $nama_weltstite,
            'harga' => $harga
        );
        $where = array(
            'id_weltstite' => $id
        );

        $this->weltstite_model->update_data($where, $data, 'weltstite');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Welt Stite has been updated! </div>');
        redirect('admin/weltstite');
    }

    public function delete($id_weltstite)
    {
        $where = array('id_weltstite' => $id_weltstite);
        $this->weltstite_model->delete_data($where, 'weltstite');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data Welt Stite has been deleted </div>');
        redirect('admin/weltstite');
    }
}

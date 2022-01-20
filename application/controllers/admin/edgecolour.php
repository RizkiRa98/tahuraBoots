<?php
class Edgecolour extends CI_Controller
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
        $data['edgecolour'] = $this->edgecolour_model->tampil_data()->result();
        $data['title'] = 'Data Edge Colour';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/edgecolour', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_edgecolour' => set_value('id_edgecolour'),
            'nama_edgecolour' => set_value('nama_edgecolour'),
            'harga' => set_value('harga')
        );
        $data['title'] = 'Input Edge Colour';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/edgecolour_form');
        $this->load->view('templates_admin/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_edgecolour', 'ID Edge Colour', 'required|trim|is_unique[edgecolour.id_edgecolour]', [
            'is_unique' => 'This ID Edge Colour has already inputed!'
        ]);
        $this->form_validation->set_rules('nama_edgecolour', 'Edge Colour Name', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');
    }
    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $data = array(
                'id_edgecolour' => $this->input->post('id_edgecolour', true),
                'nama_edgecolour' => $this->input->post('nama_edgecolour', true),
                'harga' => $this->input->post('harga', true)
            );
            $this->edgecolour_model->input_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data Edge Colour success! </div>');
            redirect('admin/edgecolour');
        }
    }
    public function update($id)
    {
        $where = array('id_edgecolour' => $id);
        $data['edgecolour'] = $this->edgecolour_model->edit_data($where, 'edgecolour')->result();
        $data['title'] = 'Update Edge Colour';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/edgecolour_update');
        $this->load->view('templates_admin/footer');
    }

    public function action_update()
    {
        $id = $this->input->post('id_edgecolour');
        $nama_edgecolour = $this->input->post('nama_edgecolour');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_edgecolour' => $nama_edgecolour,
            'harga' => $harga
        );
        $where = array(
            'id_edgecolour' => $id
        );

        $this->edgecolour_model->update_data($where, $data, 'edgecolour');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Edge Colour has been updated! </div>');
        redirect('admin/edgecolour');
    }

    public function delete($id_edgecolour)
    {
        $where = array('id_edgecolour' => $id_edgecolour);
        $this->edgecolour_model->delete_data($where, 'edgecolour');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data Edge Colour has been deleted </div>');
        redirect('admin/edgecolour');
    }
}

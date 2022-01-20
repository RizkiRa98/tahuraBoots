<?php
class Etc extends CI_Controller
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
        $data['etc'] = $this->etc_model->tampil_data()->result();
        $data['title'] = 'Data Etc';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/etc', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_etc' => set_value('id_etc'),
            'nama_etc' => set_value('nama_etc'),
            'harga' => set_value('harga')
        );
        $data['title'] = 'Input Etc';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/etc_form');
        $this->load->view('templates_admin/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('id_etc', 'ID Etc', 'required|trim|is_unique[etc.id_etc]', [
            'is_unique' => 'This ID Etc has already inputed!'
        ]);
        $this->form_validation->set_rules('nama_etc', 'Etc Name', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');
    }
    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $data = array(
                'id_etc' => $this->input->post('id_etc', true),
                'nama_etc' => $this->input->post('nama_etc', true),
                'harga' => $this->input->post('harga', true)
            );
            $this->etc_model->input_data($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data etc success! </div>');
            redirect('admin/etc');
        }
    }
    public function update($id)
    {
        $where = array('id_etc' => $id);
        $data['etc'] = $this->etc_model->edit_data($where, 'etc')->result();
        $data['title'] = 'Update Etc';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/etc_update');
        $this->load->view('templates_admin/footer');
    }

    public function action_update()
    {
        $id = $this->input->post('id_etc');
        $nama_etc = $this->input->post('nama_etc');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_etc' => $nama_etc,
            'harga' => $harga
        );
        $where = array(
            'id_etc' => $id
        );

        $this->etc_model->update_data($where, $data, 'etc');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data etc has been updated! </div>');
        redirect('admin/etc');
    }

    public function delete($id_etc)
    {
        $where = array('id_etc' => $id_etc);
        $this->etc_model->delete_data($where, 'etc');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data etc has been deleted </div>');
        redirect('admin/etc');
    }
}

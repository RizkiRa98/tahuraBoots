<?php
class Pegawai extends CI_Controller
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
        $data['pegawai'] = $this->pegawai_model->tampil_data()->result();
        $data['title'] = 'Data Pegawai';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/pegawai', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_pegawai' => set_value('id_pegawai'),
            'nama_pegawai' => set_value('nama_pegawai'),
            'nama_pekerjaan' => set_value('nama_pekerjaan'),
            'upah' => set_value('upah'),
        );
        $data['title'] = 'Input Pegawai';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/pegawai_form', $data);
        $this->load->view('templates_admin/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama_pegawai', 'Pegawai Name', 'required');
        $this->form_validation->set_rules('nama_pekerjaan', 'Nama Pekerjaan', 'required');
        $this->form_validation->set_rules('upah', 'Upah Pekerjaan', 'required');
    }
    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $id_pegawai = $this->input->post('id_pegawai');
            $nama_pegawai = $this->input->post('nama_pegawai');
            $nama_pekerjaan = $this->input->post('nama_pekerjaan');
            $upah = $this->input->post('upah');

            $data = array(
                'id_pegawai' => $id_pegawai,
                'nama_pegawai' => $nama_pegawai,
                'nama_pekerjaan' => $nama_pekerjaan,
                'upah' => $upah
            );
            $this->pegawai_model->input_data($data, 'pegawai');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data pegawai success! </div>');
            redirect('admin/pegawai');
        }
    }

    public function detail($id)
    {
        $data['detail'] = $this->pegawai_model->detail_pegawai($id);
    }
    public function update($id)
    {
        $where = array('id_pegawai' => $id);
        $data['pegawai'] = $this->pegawai_model->edit_data($where, 'pegawai')->result();
        $data['title'] = 'Update Pegawai';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/pegawai_update');
        $this->load->view('templates_admin/footer');
    }
    public function action_update()
    {
        $id = $this->input->post('id_pegawai');
        $nama_pegawai = $this->input->post('nama_pegawai');
        $nama_pekerjaan = $this->input->post('nama_pekerjaan');
        $upah = $this->input->post('upah');

        $data = array(
            'nama_pegawai' => $nama_pegawai,
            'nama_pekerjaan' => $nama_pekerjaan,
            'upah' => $upah
        );
        $where = array(
            'id_pegawai' => $id
        );
        $this->model_model->update_data($where, $data, 'pegawai');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Pegawai has been updated! </div>');
        redirect('admin/pegawai');
    }
    public function delete($id_pegawai)
    {
        $where = array('id_pegawai' => $id_pegawai);
        $this->pegawai_model->delete_data($where, 'pegawai');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data pegawai has been deleted </div>');
        redirect('admin/pegawai');
    }
}

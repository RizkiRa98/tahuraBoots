<?php
class Produk extends CI_Controller
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
        $data['produk'] = $this->produk_model->tampil_data()->result();
        $data['title'] = 'Data Product';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/produk', $data);
        $this->load->view('templates_admin/footer');
    }
    public function input()
    {
        $data = array(
            'id_produk' => set_value('id_produk'),
            'nama_produk' => set_value('nama_produk'),
            'detail' => set_value('detail'),
            'harga' => set_value('harga')
        );
        $data['title'] = 'Input Produk';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/produk_form');
        $this->load->view('templates_admin/footer');
    }
    public function input_action()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $id_produk = $this->input->post('id_produk');
            $nama_produk = $this->input->post('nama_produk');
            $detail = $this->input->post('detail');
            $harga = $this->input->post('harga');
            $foto = $_FILES['foto']['name'];
            if ($foto = '') {
            } else {
                $config['upload_path'] = './assets/pict';
                $config['allowed_types'] = 'jpg|jpeg|png';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "Upload Fail!";
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
            $data = array(
                'id_produk' => $id_produk,
                'nama_produk' => $nama_produk,
                'detail' => $detail,
                'harga' => $harga,
                'foto' => $foto
            );
            $this->produk_model->tambah_produk($data, 'produk');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Input data product success! </div>');
            redirect('admin/produk/index');
        }
    }
    public function detail($id)
    {
        $data['detail'] = $this->produk_model->detail_produk($id);
        $data['title'] = 'Detail Produk';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/produk_detail');
        $this->load->view('templates_admin/footer');
    }
    public function update($id)
    {
        $where = array('id_produk' => $id);
        $data['produk'] = $this->produk_model->edit_produk($where, 'produk')->result();
        $data['title'] = 'Edit Produk';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/produk_update');
        $this->load->view('templates_admin/footer');
    }
    public function action_update()
    {
        $id = $this->input->post('id_produk');
        $nama_produk = $this->input->post('nama_produk');
        $detail = $this->input->post('detail');
        $harga = $this->input->post('harga');

        $data = array(
            'nama_produk' => $nama_produk,
            'detail' => $detail,
            'harga' => $harga
        );
        $where = array(
            'id_produk' => $id
        );
        $this->produk_model->update_produk($where, $data, 'produk');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data produk has been updated! </div>');
        redirect('admin/produk');
    }
    public function delete($id_produk)
    {
        $where = array('id_produk' => $id_produk);
        $this->produk_model->delete_data($where, 'produk');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data produk has been deleted </div>');
        redirect('admin/produk/index');
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_produk', 'ID Produk', 'required|trim|is_unique[produk.id_produk]', [
            'is_unique' => 'This ID produk has already inputed!'
        ]);
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('detail', 'Detail Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required');
    }
}

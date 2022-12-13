<?php
class Order extends CI_Controller
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
        $data['model'] = $this->order_model->tampil_data('model')->result();
        $data['upper'] = $this->order_model->tampil_data('upper')->result();
        $data['lining'] = $this->order_model->tampil_data('lining')->result();
        $data['construction'] = $this->order_model->tampil_data('construction')->result();
        $data['outsole'] = $this->order_model->tampil_data('outsole')->result();
        $data['weltcolour'] = $this->order_model->tampil_data('weltcolour')->result();
        $data['edgecolour'] = $this->order_model->tampil_data('edgecolour')->result();
        $data['weltstite'] = $this->order_model->tampil_data('weltstite')->result();
        $data['toebox'] = $this->order_model->tampil_data('toebox')->result();
        $data['heels'] = $this->order_model->tampil_data('heels')->result();
        $data['get_total'] = $this->pegawai_model->get_total();
        //$data["get_total"] = "Hello";
        $this->load->view('templates_dashboard/header',);
        $this->load->view('dashboard/order', $data);
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates_dashboard/footer');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Name must be filled!'
        ]);
        $this->form_validation->set_rules('address', 'Address', 'required', [
            'required' => 'Address must be filled!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email must be filled!'
        ]);
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required', [
            'required' => 'Phone number must be filled!'
        ]);
        $this->form_validation->set_rules('instagram', 'Instagram', 'required', [
            'required' => 'Instagram must be filled!'
        ]);
        $this->form_validation->set_rules('nama_model', 'Model', 'required', [
            'required' => 'Model must be selected!'
        ]);
        $this->form_validation->set_rules('nama_upper', 'Upper', 'required', [
            'required' => 'Upper must be selected!'
        ]);
        $this->form_validation->set_rules('nama_lining', 'Lining', 'required', [
            'required' => 'Lining must be selected!'
        ]);
        $this->form_validation->set_rules('nama_construction', 'Construction', 'required', [
            'required' => 'Construction must be selected!'
        ]);
        $this->form_validation->set_rules('nama_outsole', 'Outsole', 'required', [
            'required' => 'Outsole must be selected!'
        ]);
        $this->form_validation->set_rules('nama_weltcolour', 'Welt Colour', 'required', [
            'required' => 'Welt Colout must be selected!'
        ]);
        $this->form_validation->set_rules('nama_edgecolour', 'Edge Colour', 'required', [
            'required' => 'Edge Colour must be selected!'
        ]);
        $this->form_validation->set_rules('nama_weltstite', 'Welt Stite', 'required', [
            'required' => 'Welt style must be selected!'
        ]);
        $this->form_validation->set_rules('nama_toebox', 'Toebox', 'required', [
            'required' => 'toebox must be selected!'
        ]);
        $this->form_validation->set_rules('nama_heels', 'Heels', 'required', [
            'required' => 'Heels must be selected!'
        ]);
        $this->form_validation->set_rules('size', 'Size', 'required', [
            'required' => 'Size must be selected!'
        ]);
    }

    public function action_input()
    {
        $this->_rules();
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $nama           = $this->input->post('nama');
            $address        = $this->input->post('address');
            $email          = $this->input->post('email');
            $phone_number   = $this->input->post('phone_number');
            $instagram      = $this->input->post('instagram');
            $nama_model    = $this->input->post('nama_model');
            $nama_upper     = $this->input->post('nama_upper');
            $nama_lining     = $this->input->post('nama_lining');
            $nama_construction     = $this->input->post('nama_construction');
            $nama_outsole     = $this->input->post('nama_outsole');
            $nama_weltcolour     = $this->input->post('nama_weltcolour');
            $nama_edgecolour     = $this->input->post('nama_edgecolour');
            $nama_weltstite     = $this->input->post('nama_weltstite');
            $nama_toebox     = $this->input->post('nama_toebox');
            $nama_heels     = $this->input->post('nama_heels');
            $size     = $this->input->post('size');
            $order_date =  date("Y/m/d");
            $harga  = $this->input->post('harga');
            $status = $this->input->post('status');
            $biaya_pegawai = $this->input->post('biaya_pegawai');
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
                'nama' => $nama,
                'address' => $address,
                'email' => $email,
                'phone_number' => $phone_number,
                'instagram' => $instagram,
                'nama_model' => strtok($nama_model, '/'),
                'nama_upper' => strtok($nama_upper, '/'),
                'nama_lining' => strtok($nama_lining, '/'),
                'nama_construction' => strtok($nama_construction, '/'),
                'nama_outsole' => strtok($nama_outsole, '/'),
                'nama_weltcolour' => strtok($nama_weltcolour, '/'),
                'nama_edgecolour' => strtok($nama_edgecolour, '/'),
                'nama_weltstite' => strtok($nama_weltstite, '/'),
                'nama_toebox' => strtok($nama_toebox, '/'),
                'nama_heels' => strtok($nama_heels, '/'),
                'biaya_pegawai' => $biaya_pegawai,
                'size' => $size,
                'harga' => $harga,
                'status' => "UNCONFIRMED",
                'order_date' => $order_date,
                'foto' => $foto
            );


            $this->order_model->input_data($data, 'order');
            $this->session->set_flashdata('message', '<div class="alert alert-success" style="width:50%; margin-left:36vh; margin-top:20px"role="alert">
            Submit Successfully<br>For Futher Information We Will Contact You Between Monday-Friday<br>Thank you! </div>');
            redirect('dashboard');
        }
    }
}

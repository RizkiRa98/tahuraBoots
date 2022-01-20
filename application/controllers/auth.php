<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Admin';
            $this->load->view('templates_auth/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates_auth/auth_footer');
        } else {
            //validasi sukses
            $this->_login();
        }
    }
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //Jika user ada
        if ($user) {
            // Jika user aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin/dashboard_admin');
                    } else {
                        redirect('registration');
                    }
                } else {
                    $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">
                Wrong password! </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">
                This email has not been activated! </div>');
                redirect('auth');
            }
        } else {
            //tidak ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email is not registered! </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logout! </div>');
        redirect('auth');
    }
}

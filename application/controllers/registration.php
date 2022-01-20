<?php
class Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();

        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->user_model->tampil_data()->result();
        $data['title'] = 'Data User';

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/user');
        $this->load->view('admin/user', $data);
        $this->load->view('templates_admin/footer');
    }

    public function create_user()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('role_id', 'Role', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tahura User Registration';
            $this->load->view('templates_admin/header', $data);
            $this->load->view('templates_admin/user', $data);
            $this->load->view('admin/create_user');
            $this->load->view('templates_admin/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role_id'),
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Your account has been created! </div>');
            redirect('registration');
        }
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->user_model->delete_data($where, 'user');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Your data has been deleted </div>');
        redirect('registration');
    }
}

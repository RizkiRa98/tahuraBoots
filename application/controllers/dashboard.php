<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates_dashboard/header',);
        $this->load->view('templates_dashboard/sidebar');
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates_dashboard/footer');
    }
    public function produk()
    {
        $data1['produk'] = $this->produk_model->tampil_data()->result();
        $this->load->view('templates_dashboard/header',);
        $this->load->view('dashboard/produk', $data1);
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates_dashboard/footer');
    }
    public function howto_order_en()
    {
        $this->load->view('templates_dashboard/header',);
        $this->load->view('dashboard/howto_order_en');
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates_dashboard/footer');
    }
    public function howto_order_id()
    {
        $this->load->view('templates_dashboard/header',);
        $this->load->view('dashboard/howto_order_id');
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates_dashboard/footer');
    }
    public function howto_foot_en()
    {
        $this->load->view('templates_dashboard/header',);
        $this->load->view('dashboard/howto_foot_en');
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates_dashboard/footer');
    }
    public function howto_foot_id()
    {
        $this->load->view('templates_dashboard/header',);
        $this->load->view('dashboard/howto_foot_id');
        $this->load->view('dashboard/dashboard');
        $this->load->view('templates_dashboard/footer');
    }
}

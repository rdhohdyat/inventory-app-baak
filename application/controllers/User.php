<?php


class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['icon'] = 'bx bx-home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("User/index");
        $this->load->view("layout/footer");
    }
    public function barang()
    {
        $data['title'] = 'Barang';
        $data['icon'] = 'bx bx-store';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("User/barang");
        $this->load->view("layout/footer");
    }
    public function request()
    {
        $data['title'] = 'Pengajuan';
        $data['icon'] = 'bx bx-chat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("User/request");
        $this->load->view("layout/footer");
    }
    public function history()
    {
        $data['title'] = 'History';
        $data['icon'] = 'bx bx-history';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("user/history");
        $this->load->view("layout/footer");
    }
}

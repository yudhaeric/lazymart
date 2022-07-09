<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard | Admin';
        $data['breadcrumb'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates_dashboard/header', $data);
        $this->load->view('templates_dashboard/topbar', $data);
        $this->load->view('templates_dashboard/sidebar', $data);
        $this->load->view('dashboard/admin');
        $this->load->view('templates_dashboard/footer_admin');
    }

    public function profile()
    {
        $data['title'] = 'My Profile | Admin';
        $data['breadcrumb'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['pengguna'] = $this->db->get('user')->result_array();

        $this->load->view('templates_dashboard/header', $data);
        $this->load->view('templates_dashboard/topbar', $data);
        $this->load->view('templates_dashboard/sidebar', $data);
        $this->load->view('dashboard/profile');
        $this->load->view('templates_dashboard/footer_admin');
    }

    public function pengguna()
    {
        $data['title'] = 'Data Pengguna | Admin';
        $data['breadcrumb'] = 'Pengguna';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['pengguna'] = $this->db->get('user')->result_array();

        $this->load->view('templates_dashboard/header', $data);
        $this->load->view('templates_dashboard/topbar', $data);
        $this->load->view('templates_dashboard/sidebar', $data);
        $this->load->view('dashboard/pengguna');
        $this->load->view('templates_dashboard/footer');
    }

    public function produk()
    {
        $data['title'] = 'Data Produk | Admin';
        $data['breadcrumb'] = 'Produk';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['produk'] = $this->db->get('produk')->result_array();

        $this->load->view('templates_dashboard/header', $data);
        $this->load->view('templates_dashboard/topbar', $data);
        $this->load->view('templates_dashboard/sidebar', $data);
        $this->load->view('dashboard/produk');
        $this->load->view('templates_dashboard/footer');
    }

    public function transaksi()
    {
        $data['title'] = 'Data Transaksi | Admin';
        $data['breadcrumb'] = 'Transaksi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates_dashboard/header', $data);
        $this->load->view('templates_dashboard/topbar', $data);
        $this->load->view('templates_dashboard/sidebar', $data);
        $this->load->view('dashboard/transaksi');
        $this->load->view('templates_dashboard/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kamu berhasil keluar!</div>');
        redirect('login/session');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{
    public function index()
    {
        $this->M_dashboard->create_product();
        redirect('admin/produk');
    }

    public function edit()
    {
        $this->M_dashboard->edit_product();
        redirect('admin/produk');
    }

    public function delete($id)
    {
        $this->M_dashboard->delete_product($id);
        redirect('admin/produk');
    }

    // Controller CRUD Pengguna

    public function create_user()
    {
        $this->M_dashboard->create_user();
        redirect('admin/pengguna');
    }

    public function edit_user()
    {
        $this->M_dashboard->edit_user();
        redirect('admin/pengguna');
    }

    public function delete_user($id)
    {
        $this->M_dashboard->delete_user($id);
        redirect('admin/pengguna');
    }

    // Controller CRUD Profile
    public function edit_profile()
    {
        $this->M_dashboard->edit_profile();
        redirect('admin/profile');
    }
}

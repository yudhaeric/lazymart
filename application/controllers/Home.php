<!-- CONTROLLER HOME SESUDAH LOGIN -->

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
    }

    public function index()
    {
        $data['title'] = 'Lazymart Belanja Bulanan Jadi Mudah';
        $data['produk'] = $this->Produk_model->all();
        $this->load->view('templates_page/header_home', $data);
        $this->load->view('auth/home', $data);
        $this->load->view('templates_page/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kamu berhasil keluar!</div>');
        redirect('login/session');
    }
}

<!-- CONTROLLER HOME SESUDAH LOGIN -->

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
    }

    public function index()
    {
        $data['title'] = 'Keranjang | Lazymart';
        $data['produk'] = $this->Produk_model->all();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates_page/header', $data);
        $this->load->view('page/keranjang', $data);
        $this->load->view('templates_page/footer_checkout');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Kamu berhasil keluar!</div>');
        redirect('login/session');
    }
}

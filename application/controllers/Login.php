<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Masukan email kamu!',
            'valid_email' => 'Email yang kamu masukan salah!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Masukan password kamu!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Masuk | Lazymart';
            $this->load->view('templates_auth/header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates_auth/footer');
        } else {
            // validasi success jalankan method login
            $this->_login();
        }
    }

    private function _login()
    {
        // kita ambil input email & password yang sudah lolos validasinya
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Query ke database untuk mencari email user yang sesuai
        // Dibacanya select bintang dari tabel user dimana email sama dengan email
        // Agar dapat satu baris dari database pake row_array()
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // Jika usernya ada
        if ($user) {
            // Akun nya sudah ada tapi aktif apa tidak
            // dibaca nya jika array user di dalam nya ada is_active == 1
            if ($user['is_active'] == 1) {
                // Kalau aktif cek passwordnya sama ngga
                // password_verify fungsi untuk mengecek password dari login form dengan password yang di hash dari database
                if (password_verify($password, $user['password'])) {
                    // jika benar kita ambil data
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    // lalu kita simpan ke dalam session
                    $this->session->set_userdata($data);
                    // membuat kondisi untuk membedakan role_id sebagai admin atau user
                    if ($user['role_id'] == 'Admin') {
                        // arahkan ke view yang kita mau
                        redirect('admin');
                    } else {
                        // arahkan ke view yang kita mau
                        redirect(base_url('beranda'));
                    }
                } else {
                    // Kalau tidak sama password nya salah
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password kamu salah!</div>');
                    redirect('login/session');
                }
            } else {
                // Kalau is_active == 0
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email kamu belum aktif!</div>');
                redirect('login/session');
            }
        } else {
            // Jika user tidak aktif
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email kamu belum terdaftar!</div>');
            redirect('login/session');
        }
    }

    public function session()
    {
        $data['title'] = 'Masuk | Lazymart';
        $this->load->view('templates_auth/header', $data);
        $this->load->view('auth/session');
        $this->load->view('templates_auth/footer');
    }
}

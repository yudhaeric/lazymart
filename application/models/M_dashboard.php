<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    public function get_product()
    {
        $this->db->get('produk')->result_array();
    }

    public function create_product()
    {
        $data = [
            'name' => $this->input->post('nama'),
            'image' => $this->input->post('image'),
            'price' => $this->input->post('harga'),
            'disc' => $this->input->post('diskon'),
            'disc2' => $this->input->post('harga_diskon'),
            'rating' => $this->input->post('rating'),
        ];

        $this->db->insert('produk', $data);
    }

    public function edit_product()
    {

        $id = $this->input->post('id');
        $name = $this->input->post('nama');
        $image = $this->input->post('image');
        $price = $this->input->post('harga');
        $disc = $this->input->post('diskon');
        $disc2 = $this->input->post('harga_diskon');
        $rating = $this->input->post('rating');

        $data = [
            'id' => $id,
            'name' => $name,
            'image' => $image,
            'price' => $price,
            'disc' => $disc,
            'disc2' => $disc2,
            'rating' => $rating
        ];

        $this->db->where('id', $id);
        $this->db->update('produk', $data);
    }

    public function delete_product($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('produk');
    }

    // Models Table User

    public function get_user()
    {
        $this->db->get('user')->result_array();
    }

    public function create_user()
    {
        $data = [
            'name' => $this->input->post('namaPengguna'),
            'email' => $this->input->post('email'),
            'image' => 'gambar-1.jpg',
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'role_id' => $this->input->post('status'),
            'is_active' => 1,
            'date_created' => time()
        ];

        $this->db->insert('user', $data);
    }

    public function edit_user()
    {

        $id = $this->input->post('id');
        $name = $this->input->post('namaPengguna');
        $email = $this->input->post('email');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $role_id = $this->input->post('status');

        $data = [
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role_id' => $role_id
        ];

        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function delete_user($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    // Models Table User
    public function edit_profile()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('namaProfile');
        $email = $this->input->post('emailProfile');
        $password = password_hash($this->input->post('passwordProfile'), PASSWORD_DEFAULT);
        $image = $this->input->post('image');

        $data = [
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'image' => $image
        ];

        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['pelamar'] = $this->db->get_where('pelamar', ['email' => $this->session->userdata['email']])->row_array();
        echo 'Selamat Datang ' . $data['pelamar']['nama'];
    }
}

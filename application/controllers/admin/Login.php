<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => '*masukkan email!',
            'valid_email' => '*masukkan email yang valid!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => '*masukkan password!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login Admin | Recruitment PPSU Cipinang';

            $this->load->view('admin/login', $data);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $admin = $this->db->get_where('admin', ['email' => $email])->row_array();

            if ($admin) {
                if (password_verify($password, $admin['password'])) {
                    $data = [
                        'email' => $admin['email'],
                        'status' => 'login admin'
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Anda salah!</div>');
                    redirect('admin/login');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Email Anda tidak terdaftar!</div>');
                redirect('admin/login');
            }
        }
    }
}

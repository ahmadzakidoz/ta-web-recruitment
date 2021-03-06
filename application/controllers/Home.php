<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $ip = $this->input->server('REMOTE_ADDR');
        $cek_ip = $this->db->query("SELECT * FROM visitor WHERE ip='$ip' AND DATE(tanggal)=CURDATE()");
        if ($cek_ip->num_rows() <= 0) {
            $this->db->set('ip', $ip);
            $this->db->insert('visitor');
        }
    }

    public function index()
    {
        $data['judul'] = 'Halaman Awal';
        $this->load->view('templates/header', $data);
        $this->load->view('home/home');
        $this->load->view('templates/footer');
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => '*nama tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pelamar.email]', [
            'required' => '*email tidak boleh kosong!',
            'valid_email' => '*email tidak valid!',
            'is_unique' => '*email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'required' => 'password tidak boleh kosong!',
            'min_length' => 'password minimal 6 karater!',
            'matches' => 'password harus sama!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi';
            $this->load->view('templates/header', $data);
            $this->load->view('home/registrasi');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'tgl_daftar' => time(),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'aktivasi' => 1,
                'email' => htmlspecialchars($this->input->post('email', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'provinsi' => 'DKI Jakarta',
                'pasfoto' => 'user.png'
            ];

            $this->db->insert('pelamar', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Akun Anda berhasil dibuat. Silahkan Login!</div>');
            redirect('home/login');
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => '*masukkan email!',
            'valid_email' => '*masukkan email yang valid!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => '*masukan password!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $this->load->view('templates/header', $data);
            $this->load->view('home/login');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $pelamar = $this->db->get_where('pelamar', ['email' => $email])->row_array();

        if ($pelamar) {
            if ($pelamar['aktivasi'] == 1) {
                if (password_verify($password, $pelamar['password'])) {
                    $data = [
                        'email' => $pelamar['email'],
                        'status' => login
                    ];
                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Anda salah!</div>');
                    redirect('home/login');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Silahkan aktivasikan email Anda terlebih dahulu!</div>');
                redirect('home/login');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email Anda belum terdaftar!</div>');
            redirect('home/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('status');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Anda telah logout!</div>');
        redirect('home/login');
    }
}

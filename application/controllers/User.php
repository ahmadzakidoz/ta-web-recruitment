<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');

        if ($this->session->userdata('status') != "login") {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('home/login');
        }
    }

    public function index()
    {
        $data['judul'] = 'Halaman Awal';
        $data['pelamar'] = $this->db->get_where('pelamar', ['email' => $this->session->userdata['email']])->row_array();

        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/user');
        $this->load->view('templates/user_footer');
    }

    public function biodata()
    {
        $data['judul'] = 'Biodata';
        $data['pelamar'] = $this->db->get_where('pelamar', ['email' => $this->session->userdata['email']])->row_array();

        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/biodata', $data);
        $this->load->view('templates/user_footer');
    }

    public function biodata_simpan()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'alamat' => $this->input->post('alamat'),
            'kota' => $this->input->post('kota'),
            'provinsi' => $this->input->post('provinsi'),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jns_kelamin' => $this->input->post('jns_kelamin'),
            'pasfoto' => 'user.png'
        ];

        $this->db->where('email', $this->input->post('email'));
        $this->db->update('pelamar', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('user/biodata');
    }

    public function pendidikan()
    {
        $data['judul'] = 'Pendidikan';
        $data['pelamar'] = $this->db->get_where('pelamar', ['email' => $this->session->userdata['email']])->row_array();

        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/pendidikan', $data);
        $this->load->view('templates/user_footer');
    }

    public function pendidikan_simpan()
    {
        $data = [
            'jenjang' => $this->input->post('jenjang'),
            'sekolah' => $this->input->post('sekolah'),
            'jurusan' => $this->input->post('jurusan'),
            'keterangan' => $this->input->post('keterangan'),
            'thn_lulus' => $this->input->post('thn_lulus'),
            'nilai' => $this->input->post('nilai'),
            'akreditasi' => $this->input->post('akreditasi')
        ];

        $this->db->where('email', $this->session->userdata['email']);
        $this->db->update('pelamar', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('user/pendidikan');
    }
}

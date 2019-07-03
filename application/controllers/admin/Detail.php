<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != 'login admin') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('admin/login');
        }
    }


    public function index()
    {
        $data['judul'] = 'Detail Pelamar | Recruitment PPSU Cipinang';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata['email']])->row_array();
        $data['pelamar'] = $this->db->get('pelamar')->result();

        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/admin_footer');
    }

    public function edit()
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
            'jenjang' => $this->input->post('jenjang'),
            'sekolah' => $this->input->post('sekolah'),
            'jurusan' => $this->input->post('jurusan'),
            'keterangan' => $this->input->post('keterangan'),
            'thn_lulus' => $this->input->post('thn_lulus'),
            'nilai' => $this->input->post('nilai'),
            'akreditasi' => $this->input->post('akreditasi')
        ];

        $this->db->where('email', $this->input->post('email'));
        $this->db->update('pelamar', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('admin/detail');
    }

    public function hapus()
    {
        $id = $this->uri->segment(4);
        $data['pelamar'] = $this->db->get_where('pelamar', ['id' => $id])->row_array();
        $old_pasfoto = $data['pelamar']['pasfoto'];
        if ($old_pasfoto != 'user.png') {
            unlink(FCPATH . 'assets/img/pasfoto/' . $data['pelamar']['pasfoto']);
        }
        $this->db->where('id', $id);
        $this->db->delete('pelamar');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data berhasil dihapus!</div>');
        redirect('admin/detail');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanda_terima extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('home/login');
        }
    }

    public function index()
    {
        $data['pelamar'] = $this->db->get_where('pelamar', ['email' => $this->session->userdata['email']])->row_array();

        if (empty($data['pelamar']['nkk']) || empty($data['pelamar']['nik']) || empty($data['pelamar']['nama']) || empty($data['pelamar']['alamat']) || empty($data['pelamar']['kota']) || empty($data['pelamar']['provinsi']) || empty($data['pelamar']['kecamatan']) || empty($data['pelamar']['kelurahan']) || empty($data['pelamar']['tmp_lahir']) || empty($data['pelamar']['tgl_lahir']) || empty($data['pelamar']['jns_kelamin']) || empty($data['pelamar']['agama']) || empty($data['pelamar']['status']) || empty($data['pelamar']['telp']) || empty($data['pelamar']['pasfoto']) || empty($data['pelamar']['jenjang']) || empty($data['pelamar']['sekolah']) || empty($data['pelamar']['jurusan']) || empty($data['pelamar']['thn_lulus']) || empty($data['pelamar']['nilai']) || empty($data['pelamar']['akreditasi']) || empty($data['pelamar']['lamaran']) || empty($data['pelamar']['cv']) || empty($data['pelamar']['ktp']) || empty($data['pelamar']['ijazah']) || empty($data['pelamar']['kk']) || empty($data['pelamar']['npwp']) || empty($data['pelamar']['kesehatan']) || empty($data['pelamar']['spk']) || empty($data['pelamar']['dok_pendukung1']) || empty($data['pelamar']['dok_pendukung2']) || empty($data['pelamar']['dok_pendukung3']) || empty($data['pelamar']['dok_pendukung4'])) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Untuk mendapatkan <b>Tanda Terima</b> silahkan <b>lengkapi data dan dokumen Anda</b>!</div>');
            redirect('user');
        } else {
            $query = $this->db->get_where('seleksi_1', ['np' => $data['pelamar']['id']]);
            if ($query->num_rows() == 0) {
                $data = [
                    'np' => $data['pelamar']['id'],
                    'status_lamaran' => 'PROSES'
                ];
                $this->db->insert('seleksi_1', $data);
                redirect('assets/dok/tanda_terima.pdf');
            } else {
                redirect('assets/dok/tanda_terima.pdf');
            }
        }
    }
}

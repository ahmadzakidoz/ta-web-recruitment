<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seleksi_5 extends CI_Controller
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
        $data['judul'] = 'Hasil Wawancara | Recruitment PPSU Cipinang';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata['email']])->row_array();
        $query = "SELECT `pelamar`.*, `seleksi_5`.`status_lamaran`, `seleksi_5`.`nilai5`
                    FROM `pelamar` JOIN `seleksi_5`
                      ON `pelamar`.`id` = `seleksi_5`.`np`";
        $data['pelamar'] = $this->db->query($query)->result();

        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/seleksi_5', $data);
        $this->load->view('templates/admin_footer');
    }

    public function input()
    {
        $np1 = $this->input->post('np1');
        $nilai1 = $this->input->post('nilai1');
        if (!empty($np1)) {
            $data1 = [
                'nilai5' => $nilai1,
                'status_lamaran' => 'LANJUT',
                'alert' => 'success'
            ];
            $this->db->where('np', $np1);
            $this->db->update('seleksi_5', $data1);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Nilai Dimasukkan!</div>');
        }

        $np2 = $this->input->post('np2');
        $nilai2 = $this->input->post('nilai2');
        if (!empty($np2)) {
            $data2 = [
                'nilai5' => $nilai2,
                'status_lamaran' => 'LANJUT',
                'alert' => 'success'
            ];
            $this->db->where('np', $np2);
            $this->db->update('seleksi_5', $data2);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Nilai Dimasukkan!</div>');
        }

        $np3 = $this->input->post('np3');
        $nilai3 = $this->input->post('nilai3');
        if (!empty($np3)) {
            $data3 = [
                'nilai5' => $nilai3,
                'status_lamaran' => 'LANJUT',
                'alert' => 'success'
            ];
            $this->db->where('np', $np3);
            $this->db->update('seleksi_5', $data3);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Nilai Dimasukkan!</div>');
        }

        $np4 = $this->input->post('np4');
        $nilai4 = $this->input->post('nilai4');
        if (!empty($np4)) {
            $data4 = [
                'nilai5' => $nilai4,
                'status_lamaran' => 'LANJUT',
                'alert' => 'success'
            ];
            $this->db->where('np', $np4);
            $this->db->update('seleksi_5', $data4);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Nilai Dimasukkan!</div>');
        }

        $np5 = $this->input->post('np5');
        $nilai5 = $this->input->post('nilai5');
        if (!empty($np5)) {
            $data5 = [
                'nilai5' => $nilai5,
                'status_lamaran' => 'LANJUT',
                'alert' => 'success'
            ];
            $this->db->where('np', $np5);
            $this->db->update('seleksi_5', $data5);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Nilai Dimasukkan!</div>');
        }
        redirect('admin/seleksi_5');
    }

    public function remove()
    {
        $np = $this->uri->segment('4');
        $this->db->set('status_lamaran', 'GUGUR');
        $this->db->set('alert', 'danger');
        $this->db->where('np', $np);
        $this->db->update('seleksi_5');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data dinyatakan tidak lolos!</div>');
        redirect('admin/seleksi_5');
    }

    public function umumkan()
    {
        $this->db->set('keterangan', 'Anda Telah Mengikuti Semua Tahap Seleksi, Silahkan Menunggu Hasil Pengumuman.');
        $this->db->where('status_lamaran', 'LANJUT');
        $this->db->update('seleksi_5');

        $this->db->set('keterangan', 'Maaf, Anda Tidak Lolos Tahap 5: Wawancara.');
        $this->db->where('status_lamaran', 'GUGUR');
        $this->db->update('seleksi_5');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil diumumkan!</div>');
        redirect('admin/seleksi_5');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seleksi_4 extends CI_Controller
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
        $data['judul'] = 'Hasil Tes Tertulis | Recruitment PPSU Cipinang';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata['email']])->row_array();
        $query = "SELECT `pelamar`.*, `seleksi_4`.`status_lamaran`, `seleksi_4`.`nilai4`
                    FROM `pelamar` JOIN `seleksi_4`
                      ON `pelamar`.`id` = `seleksi_4`.`np`";
        $data['pelamar'] = $this->db->query($query)->result();

        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/seleksi_4', $data);
        $this->load->view('templates/admin_footer');
    }

    public function input()
    {
        $np1 = $this->input->post('np1');
        $nilai1 = $this->input->post('nilai1');
        $cek_np1 = $this->db->get_where('seleksi_5', ['np' => $np1]);
        if (!empty($np1)) {
            $data1 = [
                'nilai4' => $nilai1,
                'status_lamaran' => 'LANJUT',
                'alert' => 'success'
            ];
            $this->db->where('np', $np1);
            $this->db->update('seleksi_4', $data1);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Nilai Dimasukkan!</div>');

            if ($cek_np1->num_rows() == 0) {
                $this->db->set('np', $np1);
                $this->db->insert('seleksi_5');
            }
        }

        $np2 = $this->input->post('np2');
        $nilai2 = $this->input->post('nilai2');
        $cek_np2 = $this->db->get_where('seleksi_5', ['np' => $np2]);
        if (!empty($np2)) {
            $data2 = [
                'nilai4' => $nilai2,
                'status_lamaran' => 'LANJUT',
                'alert' => 'success'
            ];
            $this->db->where('np', $np2);
            $this->db->update('seleksi_4', $data2);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Nilai Dimasukkan!</div>');

            if ($cek_np2->num_rows() == 0) {
                $this->db->set('np', $np2);
                $this->db->insert('seleksi_5');
            }
        }

        $np3 = $this->input->post('np3');
        $nilai3 = $this->input->post('nilai3');
        $cek_np3 = $this->db->get_where('seleksi_5', ['np' => $np3]);
        if (!empty($np3)) {
            $data3 = [
                'nilai4' => $nilai3,
                'status_lamaran' => 'LANJUT',
                'alert' => 'success'
            ];
            $this->db->where('np', $np3);
            $this->db->update('seleksi_4', $data3);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Nilai Dimasukkan!</div>');

            if ($cek_np3->num_rows() == 0) {
                $this->db->set('np', $np3);
                $this->db->insert('seleksi_5');
            }
        }

        $np4 = $this->input->post('np4');
        $nilai4 = $this->input->post('nilai4');
        $cek_np4 = $this->db->get_where('seleksi_5', ['np' => $np4]);
        if (!empty($np4)) {
            $data4 = [
                'nilai4' => $nilai4,
                'status_lamaran' => 'LANJUT',
                'alert' => 'success'
            ];
            $this->db->where('np', $np4);
            $this->db->update('seleksi_4', $data4);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Nilai Dimasukkan!</div>');

            if ($cek_np4->num_rows() == 0) {
                $this->db->set('np', $np4);
                $this->db->insert('seleksi_5');
            }
        }

        $np5 = $this->input->post('np5');
        $nilai5 = $this->input->post('nilai5');
        $cek_np5 = $this->db->get_where('seleksi_5', ['np' => $np5]);
        if (!empty($np5)) {
            $data5 = [
                'nilai4' => $nilai5,
                'status_lamaran' => 'LANJUT',
                'alert' => 'success'
            ];
            $this->db->where('np', $np5);
            $this->db->update('seleksi_4', $data5);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Nilai Dimasukkan!</div>');

            if ($cek_np5->num_rows() == 0) {
                $this->db->set('np', $np5);
                $this->db->insert('seleksi_5');
            }
        }
        redirect('admin/seleksi_4');
    }

    public function remove()
    {
        $np = $this->uri->segment('4');
        $this->db->where('np', $np);
        $this->db->delete('seleksi_5');
        $this->db->set('status_lamaran', 'GUGUR');
        $this->db->set('alert', 'danger');
        $this->db->where('np', $np);
        $this->db->update('seleksi_4');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data dinyatakan tidak lolos!</div>');
        redirect('admin/seleksi_4');
    }

    public function umumkan()
    {
        $this->db->set('keterangan', 'Anda Lolos Tahap 4: Tes Tertulis');
        $this->db->where('status_lamaran', 'LANJUT');
        $this->db->update('seleksi_4');

        $this->db->set('keterangan', 'Maaf, Anda Tidak Lolos Tahap 4: Tes Tertulis.');
        $this->db->where('status_lamaran', 'GUGUR');
        $this->db->update('seleksi_4');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil diumumkan!</div>');
        redirect('admin/seleksi_4');
    }
}

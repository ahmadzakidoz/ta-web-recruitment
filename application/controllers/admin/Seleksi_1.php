<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seleksi_1 extends CI_Controller
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
        $data['judul'] = 'Hasil Seleksi Administrasi | Recruitment PPSU Cipinang';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata['email']])->row_array();
        $query = "SELECT `pelamar`.*, `seleksi_1`.`status_lamaran`
                    FROM `pelamar` JOIN `seleksi_1`
                      ON `pelamar`.`id` = `seleksi_1`.`np`";
        $data['pelamar'] = $this->db->query($query)->result();

        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/seleksi_1', $data);
        $this->load->view('templates/admin_footer');
    }

    public function lolos()
    {
        $np = $this->uri->segment('4');
        $this->db->set('np', $np);
        $this->db->insert('seleksi_2');
        $this->db->set('status_lamaran', 'LOLOS');
        $this->db->set('alert', 'success');
        $this->db->where('np', $np);
        $this->db->update('seleksi_1');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data dinyatakan lolos!</div>');
        redirect('admin/seleksi_1');
    }

    public function remove()
    {
        $np = $this->uri->segment('4');
        $tables = array('seleksi_2', 'seleksi_3', 'seleksi_4', 'seleksi_5');
        $this->db->where('np', $np);
        $this->db->delete($tables);
        $this->db->set('status_lamaran', 'TIDAK');
        $this->db->set('alert', 'danger');
        $this->db->where('np', $np);
        $this->db->update('seleksi_1');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data dinyatakan tidak lolos!</div>');
        redirect('admin/seleksi_1');
    }

    public function umumkan()
    {
        $this->db->set('keterangan', 'Selamat Anda Lolos Seleksi Administrasi.');
        $this->db->where('status_lamaran', 'LOLOS');
        $this->db->update('seleksi_1');

        $this->db->set('keterangan', 'Maaf, Anda Tidak Lolos Seleksi Administrasi.');
        $this->db->where('status_lamaran', 'TIDAK');
        $this->db->update('seleksi_1');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Hasil Seleksi Administrasi berhasil diumumkan!</div>');
        redirect('admin/seleksi_1');
    }

    public function view()
    {
        $data['nama_doc'] = $this->uri->segment(4);
        $this->load->view('admin/view_doc', $data);
    }
}

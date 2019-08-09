<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seleksi_total extends CI_Controller
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
        $query = "SELECT `pelamar`.*, `seleksi_2`.`nilai2`, `seleksi_3`.`nilai3`, `seleksi_4`.`nilai4`, `seleksi_5`.`nilai5`
                    FROM `pelamar` 
                    JOIN `seleksi_2` ON `pelamar`.`id` = `seleksi_2`.`np`
                    JOIN `seleksi_3` ON `pelamar`.`id` = `seleksi_3`.`np`
                    JOIN `seleksi_4` ON `pelamar`.`id` = `seleksi_4`.`np`
                    JOIN `seleksi_5` ON `pelamar`.`id` = `seleksi_5`.`np`";
        $data['pelamar'] = $this->db->query($query)->result();

        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/seleksi_total', $data);
        $this->load->view('templates/admin_footer');
    }
}

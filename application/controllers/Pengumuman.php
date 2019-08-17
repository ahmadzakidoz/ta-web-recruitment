<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
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
        $data['judul'] = 'Pengumuman | Recruitment PPSU Cipinang';
        $this->db->order_by('id', 'DESC');
        $data['pengumuman'] = $this->db->get('pengumuman')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('home/pengumuman', $data);
        $this->load->view('templates/footer');
    }

    public function view()
    {
        $id = $this->uri->segment(3);
        $data['view_pengumuman'] = $this->db->get_where('pengumuman', ['id' => $id])->row_array();
        $data['judul'] = $data['view_pengumuman']['judul'];
        $data['date'] = date_create($data['view_pengumuman']['tanggal']);
        $this->load->view('templates/header', $data);
        $this->load->view('home/view_pengumuman', $data);
        $this->load->view('templates/footer');
    }
}

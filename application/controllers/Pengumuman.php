<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{

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

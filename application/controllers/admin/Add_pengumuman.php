<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add_pengumuman extends CI_Controller
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
        $data['judul'] = 'Add Pengumuman | Recruitment PPSU Cipinang';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata['email']])->row_array();

        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/add_pengumuman');
        $this->load->view('templates/admin_footer');
    }

    public function add()
    {
        if (!empty($_FILES['gambar']['name'])) {
            $config['upload_path'] = './assets/img/pengumuman/';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $data = [
                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('isi'),
                    'gambar' => $this->upload->data('file_name')
                ];

                $this->db->insert('pengumuman', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Pengumuman berhasil ditambahkan!</div>');
                redirect('admin/pengumuman');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai!</div>');
                redirect('admin/add_pengumuman');
            }
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi')
            ];

            $this->db->insert('pengumuman', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Pengumuman berhasil ditambahkan!</div>');
            redirect('admin/pengumuman');
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
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
        $data['judul'] = 'Pengumuman | Recruitment PPSU Cipinang';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata['email']])->row_array();
        $data['pengumuman'] = $this->db->get('pengumuman')->result();

        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/pengumuman', $data);
        $this->load->view('templates/admin_footer');
    }

    public function edit()
    {
        $id = $this->uri->segment(4);
        $data['judul'] = 'Edit Pengumuman | Recruitment PPSU Cipinang';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata['email']])->row_array();
        $data['edit_pm'] = $this->db->get_where('pengumuman', ['id' => $id])->row_array();
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/edit_pengumuman', $data);
        $this->load->view('templates/admin_footer');
    }

    public function simpan_edit()
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

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('pengumuman', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Pengumuman berhasil diedit!</div>');
                redirect('admin/pengumuman');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai!</div>');
                redirect('admin/edit_pengumuman');
            }
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi')
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('pengumuman', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Pengumuman berhasil diedit!</div>');
            redirect('admin/pengumuman');
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(4);
        $this->db->where('id', $id);
        $this->db->delete('pengumuman');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data berhasil dihapus!</div>');
        redirect('admin/pengumuman');
    }
}

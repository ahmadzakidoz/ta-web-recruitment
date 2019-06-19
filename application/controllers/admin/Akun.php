<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != 'login') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('admin/login');
        }
    }


    public function index()
    {
        $data['judul'] = 'Akun Pelamar | Recruitment PPSU Cipinang';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata['email']])->row_array();
        $data['pelamar'] = $this->db->get('pelamar')->result();

        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/akun', $data);
        $this->load->view('templates/admin_footer');
    }

    public function edit()
    {
        $data['pelamar_edit'] = $this->db->get_where('pelamar', ['id' => $this->input->post('id')])->row_array();
        $old_password = $this->input->post('password');
        $upload_pasfoto = $_FILES['pasfoto']['name'];

        if ($old_password != $data['pelamar_edit']['password']) {
            $new_password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $this->db->set('password', $new_password);
        }

        $this->db->set('nama', $this->input->post('nama'));

        if ($upload_pasfoto) {
            $config['upload_path'] = './assets/img/pasfoto/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('pasfoto')) {
                $old_pasfoto = $data['pelamar_edit']['pasfoto'];
                if ($old_pasfoto != 'user.png') {
                    unlink(FCPATH . 'assets/img/pasfoto/' . $old_pasfoto);
                }

                $new_pasfoto = $this->upload->data('file_name');
                $this->db->set('pasfoto', $new_pasfoto);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai!</div>');
                redirect('admin/akun');
            }
        }

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pelamar');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('admin/akun');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[admin.email]|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Akun Admin | Recruitment PPSU Cipinang';
            $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata['email']])->row_array();
            $data['all_admin'] = $this->db->get('admin')->result();
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('admin/admin', $data);
            $this->load->view('templates/admin_footer');
        } else {
            if (!empty($_FILES['foto']['name'])) {
                $config['upload_path'] = './assets/img/pasfoto/';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai!</div>');
                    redirect('admin/admin');
                }
            } else {
                $foto = 'user.png';
            }

            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'foto' => $foto
            ];

            $this->db->insert('admin', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Admin berhasil ditambah!</div>');
            redirect('admin/admin');
        }
    }

    public function edit()
    {
        $data['admin_edit'] = $this->db->get_where('admin', ['id' => $this->input->post('id')])->row_array();
        $old_password = $this->input->post('password');
        $upload_foto = $_FILES['foto']['name'];

        if ($old_password != $data['admin_edit']['password']) {
            $new_password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $this->db->set('password', $new_password);
        }

        $this->db->set('nama', $this->input->post('nama'));

        if ($upload_foto) {
            $config['upload_path'] = './assets/img/pasfoto/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $old_foto = $data['admin_edit']['foto'];
                if ($old_foto != 'user.png') {
                    unlink(FCPATH . 'assets/img/pasfoto/' . $old_foto);
                }

                $new_foto = $this->upload->data('file_name');
                $this->db->set('foto', $new_foto);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar tidak sesuai!</div>');
                redirect('admin/admin');
            }
        }

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('admin');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('admin/admin');
    }

    public function hapus()
    {
        $id = $this->uri->segment(4);
        $data['admin'] = $this->db->get_where('admin', ['id' => $id])->row_array();
        $old_foto = $data['admin']['foto'];
        if ($old_foto != 'user.png') {
            unlink(FCPATH . 'assets/img/pasfoto/' . $data['admin']['foto']);
        }
        $this->db->where('id', $id);
        $this->db->delete('admin');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data berhasil dihapus!</div>');
        redirect('admin/admin');
    }
}

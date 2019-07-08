<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('home/login');
        }
    }

    public function index()
    {
        $data['judul'] = 'Halaman Awal';
        $data['pelamar'] = $this->db->get_where('pelamar', ['email' => $this->session->userdata['email']])->row_array();
        $this->db->order_by('id', 'DESC');
        $data['pengumuman'] = $this->db->get('pengumuman', 5)->result();

        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/user', $data);
        $this->load->view('templates/user_footer');
    }

    public function biodata()
    {
        $data['judul'] = 'Biodata';
        $data['pelamar'] = $this->db->get_where('pelamar', ['email' => $this->session->userdata['email']])->row_array();
        $data['kota'] = $this->db->get('kota')->result();

        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/biodata', $data);
        $this->load->view('templates/user_footer');
    }

    public function biodata_simpan()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'alamat' => $this->input->post('alamat'),
            'kota' => str_replace('-', ' ', $this->input->post('kota')),
            'kecamatan' => str_replace('-', ' ', $this->input->post('kecamatan')),
            'kelurahan' => str_replace('-', ' ', $this->input->post('kelurahan')),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jns_kelamin' => $this->input->post('jns_kelamin'),
            'agama' => $this->input->post('agama'),
            'status' => $this->input->post('status'),
            'telp' => $this->input->post('telp'),
            'pasfoto' => 'user.png'
        ];

        $this->db->where('email', $this->input->post('email'));
        $this->db->update('pelamar', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('user/biodata');
    }

    public function pendidikan()
    {
        $data['judul'] = 'Pendidikan';
        $data['pelamar'] = $this->db->get_where('pelamar', ['email' => $this->session->userdata['email']])->row_array();

        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/pendidikan', $data);
        $this->load->view('templates/user_footer');
    }

    public function pendidikan_simpan()
    {
        $data = [
            'jenjang' => $this->input->post('jenjang'),
            'sekolah' => $this->input->post('sekolah'),
            'jurusan' => $this->input->post('jurusan'),
            'keterangan' => $this->input->post('keterangan'),
            'thn_lulus' => $this->input->post('thn_lulus'),
            'nilai' => $this->input->post('nilai'),
            'akreditasi' => $this->input->post('akreditasi')
        ];

        $this->db->where('email', $this->session->userdata['email']);
        $this->db->update('pelamar', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('user/pendidikan');
    }

    public function upload()
    {
        $data['judul'] = 'Upload Dokumen';
        $data['pelamar'] = $this->db->get_where('pelamar', ['email' => $this->session->userdata['email']])->row_array();

        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/upload', $data);
        $this->load->view('templates/user_footer');
    }

    public function upload_simpan()
    {
        $data['pelamar'] = $this->db->get_where('pelamar', ['email' => $this->session->userdata['email']])->row_array();

        $upload_pasfoto = $_FILES['pasfoto']['name'];
        $upload_cv = $_FILES['cv']['name'];

        if ($upload_pasfoto) {
            $config['upload_path'] = './assets/img/pasfoto/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('pasfoto')) {
                $old_pasfoto = $data['pelamar']['pasfoto'];
                if ($old_pasfoto != 'user.png') {
                    unlink(FCPATH . 'assets/img/pasfoto/' . $old_pasfoto);
                }

                $new_pasfoto = $this->upload->data('file_name');
                $this->db->set('pasfoto', $new_pasfoto);
            }
        }

        if ($upload_cv) {
            $config['upload_path'] = './assets/dok/';
            $config['allowed_types'] = 'docx|pdf';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('cv')) {
                $old_cv = $data['pelamar']['cv'];
                unlink(FCPATH . 'assets/dok/' . $old_cv);

                $new_cv = $this->upload->data('file_name');
                $this->db->set('cv', $new_cv);
            }
        }

        $this->db->where('email', $this->session->userdata['email']);
        $this->db->update('pelamar');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('user/upload');
    }

    public function ganti_password()
    {
        $this->form_validation->set_rules('old_password', 'PasswordLama', 'required|trim', [
            'required' => '*tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('new_password1', 'PasswordBaru', 'required|trim|min_length[6]|matches[new_password2]', [
            'required' => '*tidak boleh kosong!',
            'min_length' => '*password minimal 6 karater!',
            'matches' => '*password harus sama!'
        ]);
        $this->form_validation->set_rules('new_password2', ' UlangPassword', 'required|trim|matches[new_password1]', [
            'required' => '*tidak boleh kosong!',
            'matches' => '*password harus sama!'
        ]);

        $data['pelamar'] = $this->db->get_where('pelamar', ['email' => $this->session->userdata['email']])->row_array();

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Ganti Password | Recruitment PPSU Cipinang';

            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('user/ganti_password', $data);
            $this->load->view('templates/user_footer');
        } else {
            $password = $this->input->post('old_password');
            $old_password = $data['pelamar']['password'];
            $email = $data['pelamar']['email'];

            if (password_verify($password, $old_password)) {
                if ($password != $this->input->post('new_password1')) {
                    $new_password = password_hash($this->input->post('new_password1'), PASSWORD_DEFAULT);
                    $this->db->set('password', $new_password);
                    $this->db->where('email', $email);
                    $this->db->update('pelamar');
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
                    redirect('user/ganti_password');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password tidak boleh sama dengan sebelumnya!</div>');
                    redirect('user/ganti_password');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Anda salah!</div>');
                redirect('user/ganti_password');
            }
        }
    }
}

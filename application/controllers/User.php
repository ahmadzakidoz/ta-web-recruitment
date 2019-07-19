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
        $data['seleksi_1'] = $this->db->get_where('seleksi_1', ['np' => $data['pelamar']['id']])->row_array();
        $data['seleksi_2'] = $this->db->get_where('seleksi_2', ['np' => $data['pelamar']['id']])->row_array();
        $data['seleksi_3'] = $this->db->get_where('seleksi_3', ['np' => $data['pelamar']['id']])->row_array();
        $data['seleksi_4'] = $this->db->get_where('seleksi_4', ['np' => $data['pelamar']['id']])->row_array();
        $data['seleksi_5'] = $this->db->get_where('seleksi_5', ['np' => $data['pelamar']['id']])->row_array();

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
            'nkk' => $this->input->post('nkk'),
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
            'telp' => $this->input->post('telp')
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

        $upload_lamaran = $_FILES['lamaran']['name'];
        $upload_cv = $_FILES['cv']['name'];
        $upload_ktp = $_FILES['ktp']['name'];
        $upload_ijazah = $_FILES['ijazah']['name'];
        $upload_kk = $_FILES['kk']['name'];
        $upload_npwp = $_FILES['npwp']['name'];
        $upload_kesehatan = $_FILES['kesehatan']['name'];
        $upload_spk = $_FILES['spk']['name'];
        $upload_pasfoto = $_FILES['pasfoto']['name'];

        if ($upload_lamaran) {
            $config['upload_path'] = './assets/dok/';
            $config['allowed_types'] = 'docx|doc|pdf|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('lamaran')) {
                $old_lamaran = $data['pelamar']['lamaran'];
                if ($old_lamaran != null) {
                    unlink(FCPATH . 'assets/dok/' . $old_lamaran);
                }

                $new_lamaran = $this->upload->data('file_name');
                $this->db->set('lamaran', $new_lamaran);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai!</div>');
                redirect('user/upload');
            }
        }

        if ($upload_cv) {
            $config['upload_path'] = './assets/dok/';
            $config['allowed_types'] = 'docx|doc|pdf|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('cv')) {
                $old_cv = $data['pelamar']['cv'];
                if ($old_cv != null) {
                    unlink(FCPATH . 'assets/dok/' . $old_cv);
                }

                $new_cv = $this->upload->data('file_name');
                $this->db->set('cv', $new_cv);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai!</div>');
                redirect('user/upload');
            }
        }

        if ($upload_ktp) {
            $config['upload_path'] = './assets/dok/';
            $config['allowed_types'] = 'docx|doc|pdf|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('ktp')) {
                $old_ktp = $data['pelamar']['ktp'];
                if ($old_ktp != null) {
                    unlink(FCPATH . 'assets/dok/' . $old_ktp);
                }

                $new_ktp = $this->upload->data('file_name');
                $this->db->set('ktp', $new_ktp);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai!</div>');
                redirect('user/upload');
            }
        }

        if ($upload_ijazah) {
            $config['upload_path'] = './assets/dok/';
            $config['allowed_types'] = 'docx|doc|pdf|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('ijazah')) {
                $old_ijazah = $data['pelamar']['ijazah'];
                if ($old_ijazah != null) {
                    unlink(FCPATH . 'assets/dok/' . $old_ijazah);
                }

                $new_ijazah = $this->upload->data('file_name');
                $this->db->set('ijazah', $new_ijazah);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai!</div>');
                redirect('user/upload');
            }
        }

        if ($upload_kk) {
            $config['upload_path'] = './assets/dok/';
            $config['allowed_types'] = 'docx|doc|pdf|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('kk')) {
                $old_kk = $data['pelamar']['kk'];
                if ($old_kk != null) {
                    unlink(FCPATH . 'assets/dok/' . $old_kk);
                }

                $new_kk = $this->upload->data('file_name');
                $this->db->set('kk', $new_kk);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai!</div>');
                redirect('user/upload');
            }
        }

        if ($upload_npwp) {
            $config['upload_path'] = './assets/dok/';
            $config['allowed_types'] = 'docx|doc|pdf|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('npwp')) {
                $old_npwp = $data['pelamar']['npwp'];
                if ($old_npwp != null) {
                    unlink(FCPATH . 'assets/dok/' . $old_npwp);
                }

                $new_npwp = $this->upload->data('file_name');
                $this->db->set('npwp', $new_npwp);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai!</div>');
                redirect('user/upload');
            }
        }

        if ($upload_kesehatan) {
            $config['upload_path'] = './assets/dok/';
            $config['allowed_types'] = 'docx|doc|pdf|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('kesehatan')) {
                $old_kesehatan = $data['pelamar']['kesehatan'];
                if ($old_kesehatan != null) {
                    unlink(FCPATH . 'assets/dok/' . $old_kesehatan);
                }

                $new_kesehatan = $this->upload->data('file_name');
                $this->db->set('kesehatan', $new_kesehatan);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai!</div>');
                redirect('user/upload');
            }
        }

        if ($upload_spk) {
            $config['upload_path'] = './assets/dok/';
            $config['allowed_types'] = 'docx|doc|pdf|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('spk')) {
                $old_spk = $data['pelamar']['spk'];
                if ($old_spk != null) {
                    unlink(FCPATH . 'assets/dok/' . $old_spk);
                }

                $new_spk = $this->upload->data('file_name');
                $this->db->set('spk', $new_spk);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai!</div>');
                redirect('user/upload');
            }
        }

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
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai!</div>');
                redirect('user/upload');
            }
        }

        $this->db->where('email', $this->session->userdata['email']);
        $this->db->update('pelamar');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('user/upload');
    }

    public function dok_pendukung()
    {
        $data['judul'] = 'Dokumen Pendukung';
        $data['pelamar'] = $this->db->get_where('pelamar', ['email' => $this->session->userdata['email']])->row_array();

        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('user/dok_pendukung', $data);
        $this->load->view('templates/user_footer');
    }

    public function dok_simpan()
    {
        $data['pelamar'] = $this->db->get_where('pelamar', ['email' => $this->session->userdata['email']])->row_array();

        $upload_dok_pendukung1 = $_FILES['dok_pendukung1']['name'];
        $upload_dok_pendukung2 = $_FILES['dok_pendukung2']['name'];
        $upload_dok_pendukung3 = $_FILES['dok_pendukung3']['name'];
        $upload_dok_pendukung4 = $_FILES['dok_pendukung4']['name'];

        if ($upload_dok_pendukung1) {
            $config['upload_path'] = './assets/dok/';
            $config['allowed_types'] = 'docx|doc|pdf|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('dok_pendukung1')) {
                $old_dok_pendukung1 = $data['pelamar']['dok_pendukung1'];
                if ($old_dok_pendukung1 != null) {
                    unlink(FCPATH . 'assets/dok/' . $old_dok_pendukung1);
                }

                $new_dok_pendukung1 = $this->upload->data('file_name');
                $this->db->set('dok_pendukung1', $new_dok_pendukung1);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai!</div>');
                redirect('user/upload');
            }
        }

        if ($upload_dok_pendukung2) {
            $config['upload_path'] = './assets/dok/';
            $config['allowed_types'] = 'docx|doc|pdf|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('dok_pendukung2')) {
                $old_dok_pendukung2 = $data['pelamar']['dok_pendukung2'];
                if ($old_dok_pendukung2 != null) {
                    unlink(FCPATH . 'assets/dok/' . $old_dok_pendukung2);
                }

                $new_dok_pendukung2 = $this->upload->data('file_name');
                $this->db->set('dok_pendukung2', $new_dok_pendukung2);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai!</div>');
                redirect('user/upload');
            }
        }

        if ($upload_dok_pendukung3) {
            $config['upload_path'] = './assets/dok/';
            $config['allowed_types'] = 'docx|doc|pdf|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('dok_pendukung3')) {
                $old_dok_pendukung3 = $data['pelamar']['dok_pendukung3'];
                if ($old_dok_pendukung3 != null) {
                    unlink(FCPATH . 'assets/dok/' . $old_dok_pendukung3);
                }

                $new_dok_pendukung3 = $this->upload->data('file_name');
                $this->db->set('dok_pendukung3', $new_dok_pendukung3);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai!</div>');
                redirect('user/upload');
            }
        }

        if ($upload_dok_pendukung4) {
            $config['upload_path'] = './assets/dok/';
            $config['allowed_types'] = 'docx|doc|pdf|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('dok_pendukung4')) {
                $old_dok_pendukung4 = $data['pelamar']['dok_pendukung4'];
                if ($old_dok_pendukung4 != null) {
                    unlink(FCPATH . 'assets/dok/' . $old_dok_pendukung4);
                }

                $new_dok_pendukung4 = $this->upload->data('file_name');
                $this->db->set('dok_pendukung4', $new_dok_pendukung4);
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai!</div>');
                redirect('user/upload');
            }
        }

        $this->db->where('email', $this->session->userdata['email']);
        $this->db->update('pelamar');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
        redirect('user/dok_pendukung');
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

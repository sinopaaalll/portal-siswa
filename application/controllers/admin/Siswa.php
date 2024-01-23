<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data['siswa'] = $this->db->get('siswa')->result();
        $this->load->view('admin/siswa/index', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required|is_unique[siswa.nis]');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required|is_unique[siswa.nik]');
        $this->form_validation->set_rules('email', 'email', 'trim|valid_email');

        if ($this->form_validation->run() == false) {
            $data['provinsi'] = $this->db->get('provinces')->result();
            $this->load->view('admin/siswa/tambah', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nis' => htmlspecialchars($this->input->post('nis', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)) == "" ? NULL : htmlspecialchars($this->input->post('tempat_lahir', true)),
                'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)) == "" ? NULL : htmlspecialchars($this->input->post('tgl_lahir', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)) == "" ? NULL : htmlspecialchars($this->input->post('jk', true)),
                'agama' => htmlspecialchars($this->input->post('agama', true)) == "" ? NULL : htmlspecialchars($this->input->post('agama', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)) == "" ? NULL : htmlspecialchars($this->input->post('alamat', true)),
                'nama_jalan' => htmlspecialchars($this->input->post('nama_jalan', true)) == "" ? NULL : htmlspecialchars($this->input->post('nama_jalan', true)),
                'rt' => htmlspecialchars($this->input->post('rt', true)) == "" ? NULL : htmlspecialchars($this->input->post('rt', true)),
                'rw' => htmlspecialchars($this->input->post('rw', true)) == "" ? NULL : htmlspecialchars($this->input->post('rw', true)),
                'provinsi' => htmlspecialchars($this->input->post('provinsi', true)) == "" ? NULL : htmlspecialchars($this->input->post('provinsi', true)),
                'kabupaten' => htmlspecialchars($this->input->post('kabupaten', true)) == "" ? NULL : htmlspecialchars($this->input->post('kabupaten', true)),
                'kecamatan' => htmlspecialchars($this->input->post('kecamatan', true)) == "" ? NULL : htmlspecialchars($this->input->post('kecamatan', true)),
                'desa' => htmlspecialchars($this->input->post('desa', true)) == "" ? NULL : htmlspecialchars($this->input->post('desa', true)),
                'kode_pos' => htmlspecialchars($this->input->post('kode_pos', true)) == "" ? NULL : htmlspecialchars($this->input->post('kode_pos', true)),
                'telp' => htmlspecialchars($this->input->post('telp', true)) == "" ? NULL : htmlspecialchars($this->input->post('telp', true)),
                'email' => htmlspecialchars($this->input->post('email', true)) == "" ? NULL : htmlspecialchars($this->input->post('email', true)),
                'transportasi' => htmlspecialchars($this->input->post('transportasi', true)) == "" ? NULL : htmlspecialchars($this->input->post('transportasi', true)),
                'urutan_anak' => htmlspecialchars($this->input->post('urutan_anak', true)) == "" ? NULL : htmlspecialchars($this->input->post('urutan_anak', true)),
                'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah', true)) == "" ? NULL : htmlspecialchars($this->input->post('nama_ayah', true)),
                'pekerjaan_ayah' => htmlspecialchars($this->input->post('pekerjaan_ayah', true)) == "" ? NULL : htmlspecialchars($this->input->post('pekerjaan_ayah', true)),
                'penghasilan_ayah' => htmlspecialchars($this->input->post('penghasilan_ayah', true)) == "" ? NULL : htmlspecialchars($this->input->post('penghasilan_ayah', true)),
                'pendidikan_terakhir_ayah' => htmlspecialchars($this->input->post('pendidikan_terakhir_ayah', true)) == "" ? NULL : htmlspecialchars($this->input->post('pendidikan_terakhir_ayah', true)),
                'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu', true)) == "" ? NULL : htmlspecialchars($this->input->post('nama_ibu', true)),
                'pekerjaan_ibu' => htmlspecialchars($this->input->post('pekerjaan_ibu', true)) == "" ? NULL : htmlspecialchars($this->input->post('pekerjaan_ibu', true)),
                'penghasilan_ibu' => htmlspecialchars($this->input->post('penghasilan_ibu', true)) == "" ? NULL : htmlspecialchars($this->input->post('penghasilan_ibu', true)),
                'pendidikan_terakhir_ibu' => htmlspecialchars($this->input->post('pendidikan_terakhir_ibu', true)) == "" ? NULL : htmlspecialchars($this->input->post('pendidikan_terakhir_ibu', true)),
                'nama_wali' => htmlspecialchars($this->input->post('nama_wali', true)) == "" ? NULL : htmlspecialchars($this->input->post('nama_wali', true)),
                'pekerjaan_wali' => htmlspecialchars($this->input->post('pekerjaan_wali', true)) == "" ? NULL : htmlspecialchars($this->input->post('pekerjaan_wali', true)),
                'penghasilan_wali' => htmlspecialchars($this->input->post('penghasilan_wali', true)) == "" ? NULL : htmlspecialchars($this->input->post('penghasilan_wali', true)),
                'pendidikan_terakhir_wali' => htmlspecialchars($this->input->post('pendidikan_terakhir_wali', true)) == "" ? NULL : htmlspecialchars($this->input->post('pendidikan_terakhir_wali', true)),
                'password' => password_hash(htmlspecialchars($this->input->post('nis', true)), PASSWORD_DEFAULT),
                'foto' => "default.png",
                'date_created' => date('Y-m-d H:i:s'),
            ];

            $this->db->insert('siswa', $data);

            $this->session->set_flashdata('success', 'Data berhasil disimpan!');
            redirect('admin/siswa');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('email', 'email', 'trim');

        if ($this->form_validation->run() == false) {
            $data['siswa'] = $this->db->get_where('siswa', ['id' => $id])->row();
            $data['provinsi'] = $this->db->get('provinces')->result();
            $this->load->view('admin/siswa/edit', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nis' => htmlspecialchars($this->input->post('nis', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)) == "" ? NULL : htmlspecialchars($this->input->post('tempat_lahir', true)),
                'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir', true)) == "" ? NULL : htmlspecialchars($this->input->post('tgl_lahir', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)) == "" ? NULL : htmlspecialchars($this->input->post('jk', true)),
                'agama' => htmlspecialchars($this->input->post('agama', true)) == "" ? NULL : htmlspecialchars($this->input->post('agama', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)) == "" ? NULL : htmlspecialchars($this->input->post('alamat', true)),
                'nama_jalan' => htmlspecialchars($this->input->post('nama_jalan', true)) == "" ? NULL : htmlspecialchars($this->input->post('nama_jalan', true)),
                'rt' => htmlspecialchars($this->input->post('rt', true)) == "" ? NULL : htmlspecialchars($this->input->post('rt', true)),
                'rw' => htmlspecialchars($this->input->post('rw', true)) == "" ? NULL : htmlspecialchars($this->input->post('rw', true)),
                'provinsi' => htmlspecialchars($this->input->post('provinsi', true)) == "" ? NULL : htmlspecialchars($this->input->post('provinsi', true)),
                'kabupaten' => htmlspecialchars($this->input->post('kabupaten', true)) == "" ? NULL : htmlspecialchars($this->input->post('kabupaten', true)),
                'kecamatan' => htmlspecialchars($this->input->post('kecamatan', true)) == "" ? NULL : htmlspecialchars($this->input->post('kecamatan', true)),
                'desa' => htmlspecialchars($this->input->post('desa', true)) == "" ? NULL : htmlspecialchars($this->input->post('desa', true)),
                'kode_pos' => htmlspecialchars($this->input->post('kode_pos', true)) == "" ? NULL : htmlspecialchars($this->input->post('kode_pos', true)),
                'telp' => htmlspecialchars($this->input->post('telp', true)) == "" ? NULL : htmlspecialchars($this->input->post('telp', true)),
                'email' => htmlspecialchars($this->input->post('email', true)) == "" ? NULL : htmlspecialchars($this->input->post('email', true)),
                'transportasi' => htmlspecialchars($this->input->post('transportasi', true)) == "" ? NULL : htmlspecialchars($this->input->post('transportasi', true)),
                'urutan_anak' => htmlspecialchars($this->input->post('urutan_anak', true)) == "" ? NULL : htmlspecialchars($this->input->post('urutan_anak', true)),
                'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah', true)) == "" ? NULL : htmlspecialchars($this->input->post('nama_ayah', true)),
                'pekerjaan_ayah' => htmlspecialchars($this->input->post('pekerjaan_ayah', true)) == "" ? NULL : htmlspecialchars($this->input->post('pekerjaan_ayah', true)),
                'penghasilan_ayah' => htmlspecialchars($this->input->post('penghasilan_ayah', true)) == "" ? NULL : htmlspecialchars($this->input->post('penghasilan_ayah', true)),
                'pendidikan_terakhir_ayah' => htmlspecialchars($this->input->post('pendidikan_terakhir_ayah', true)) == "" ? NULL : htmlspecialchars($this->input->post('pendidikan_terakhir_ayah', true)),
                'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu', true)) == "" ? NULL : htmlspecialchars($this->input->post('nama_ibu', true)),
                'pekerjaan_ibu' => htmlspecialchars($this->input->post('pekerjaan_ibu', true)) == "" ? NULL : htmlspecialchars($this->input->post('pekerjaan_ibu', true)),
                'penghasilan_ibu' => htmlspecialchars($this->input->post('penghasilan_ibu', true)) == "" ? NULL : htmlspecialchars($this->input->post('penghasilan_ibu', true)),
                'pendidikan_terakhir_ibu' => htmlspecialchars($this->input->post('pendidikan_terakhir_ibu', true)) == "" ? NULL : htmlspecialchars($this->input->post('pendidikan_terakhir_ibu', true)),
                'nama_wali' => htmlspecialchars($this->input->post('nama_wali', true)) == "" ? NULL : htmlspecialchars($this->input->post('nama_wali', true)),
                'pekerjaan_wali' => htmlspecialchars($this->input->post('pekerjaan_wali', true)) == "" ? NULL : htmlspecialchars($this->input->post('pekerjaan_wali', true)),
                'penghasilan_wali' => htmlspecialchars($this->input->post('penghasilan_wali', true)) == "" ? NULL : htmlspecialchars($this->input->post('penghasilan_wali', true)),
                'pendidikan_terakhir_wali' => htmlspecialchars($this->input->post('pendidikan_terakhir_wali', true)) == "" ? NULL : htmlspecialchars($this->input->post('pendidikan_terakhir_wali', true)),
                'date_updated' => date('Y-m-d H:i:s'),
            ];

            $this->db->update('siswa', $data, ['id' => $id]);
            $this->session->set_flashdata('success', 'Data berhasil diubah!');
            redirect('admin/siswa');
        }
    }

    public function lihat($id)
    {
        $data['siswa'] = $this->db->get_where('siswa', ['id' => $id])->row();
        $data['provinsi'] = $this->db->get('provinces')->result();
        $data['kabupaten'] = $this->db->get('regencies')->result();
        $data['kecamatan'] = $this->db->get('districts')->result();
        $data['desa'] = $this->db->get('villages')->result();

        $this->load->view('admin/siswa/lihat', $data);
    }

    public function hapus($id)
    {
        $foto = $this->db->get_where('siswa', ['id' => $id])->row_array()['foto'];

        // Hapus file foto dari folder uploads
        if ($foto != "default.png") {
            $path = 'assets/uploads/profile/' . $foto;
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $this->db->delete('siswa', ['id' => $id]);

        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('admin/siswa');
    }

    public function get_kabupaten()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->db->get_where('regencies', ['province_id' => $id])->result();
        echo json_encode($data);
    }

    public function get_kecamatan()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->db->get_where('districts', ['regency_id' => $id])->result();
        echo json_encode($data);
    }

    public function get_desa()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->db->get_where('villages', ['district_id' => $id])->result();
        echo json_encode($data);
    }

    public function get_desa_by_id()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->db->get_where('villages', ['id_villages' => $id])->row();
        echo json_encode($data);
    }
}

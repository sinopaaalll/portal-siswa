<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }


    public function edit($nis)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]|matches[pass_conf]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('pass_conf', 'Password Confirm', 'trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['siswa'] = $this->db->get_where('siswa', ['nis' => $nis])->row();

            $this->load->view('siswa/profile/edit', $data);
        } else {

            $this->load->library('upload');

            $upload_data = array();

            $this->upload->initialize(array(
                'allowed_types' => 'png|jpg|jpeg',
                'upload_path' => 'assets/uploads/profile/',
                'encrypt_name'  => TRUE,
                'max_size' => 5048,
            ));

            $old_foto = $this->input->post('old_foto');

            if (empty($_FILES['foto']['name'])) {
                $foto = $old_foto;
            } else {
                if ($old_foto != "default.png") {
                    $old_photo_path = 'assets/uploads/profile/' . $old_foto;
                    if (file_exists($old_photo_path)) {
                        unlink($old_photo_path);
                    }
                }

                // Upload the new photo
                if (!$this->upload->do_upload('foto')) {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('siswa/profile/edit/' . $nis); // Handle the error, you may want to redirect to the previous page or show an error message
                } else {
                    $upload_data['foto'] = $this->upload->data();
                    $foto = $upload_data['foto']['file_name'];
                }
            }

            $data['siswa'] = $this->db->get_where('siswa', ['nis' => $nis])->row();

            if ($this->input->post('password')) {
                $pass = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            } else {
                $pass = $data['siswa']->password;
            }

            $data = [
                'email' => htmlspecialchars($this->input->post('email', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'foto' => $foto,
                'password' => $pass,
            ];

            $this->db->update('siswa', $data, array('nis' => $nis));
            $this->session->set_flashdata('success', 'Data berhasil diupdate!');
            redirect('siswa/profile/edit/' . $nis);
        }
    }
}

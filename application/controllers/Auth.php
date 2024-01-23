<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('auth/index');
    }

    public function login_admin()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login_admin');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->db->get_where('admin', ['email' => $email])->row_array();

            // jika usernya ada
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id' => $user['id'],
                        'email' => $user['email'],
                        'nama' => $user['nama'],
                        'foto' => $user['foto'],
                        'status' => "login",
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('success', 'Anda Berhasil Login.');
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Password Salah!');
                    redirect('auth/login_admin');
                }
            } else {
                $this->session->set_flashdata('error', 'Akun Anda Belum Terdaftar');
                redirect('admin/login_admin');
            }
        }
    }

    public function login_siswa()
    {
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login_siswa');
        } else {
            $nis = $this->input->post('nis');
            $password = $this->input->post('password');

            $user = $this->db->get_where('siswa', ['nis' => $nis])->row_array();

            // jika usernya ada
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id' => $user['id'],
                        'nis' => $user['nis'],
                        'nama' => $user['nama'],
                        'foto' => $user['foto'],
                        'status' => "login",
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('success', 'Anda Berhasil Login.');
                    redirect('siswa/dashboard');
                } else {
                    $this->session->set_flashdata('error', 'Password Salah!');
                    redirect('auth/login_siswa');
                }
            } else {
                $this->session->set_flashdata('error', 'Akun Anda Belum Terdaftar');
                redirect('auth/login_siswa');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();

        $this->session->set_flashdata('error', 'Anda Telah Keluar Dari Halaman');
        redirect('auth');
    }
}

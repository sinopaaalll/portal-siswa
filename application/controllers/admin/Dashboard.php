<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data['siswa'] = $this->db->query("SELECT COUNT(id) as total FROM siswa")->row();
        $this->load->view('admin/dashboard/index', $data);
    }
}

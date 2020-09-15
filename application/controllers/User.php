<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_system');
        $this->load->helper("url");
    }

    public function index()
    {
        $data['title'] = 'Profil ku';

        $data['user'] = $this->db->get_where(
            'tb_user',
            ['email' => $this->session->userdata('email')]
        )->row_array();
        $this->load->view('user/index', $data);
    }

    public function tampilanweb()
    {
        $this->load->view('user/viewhome.php');
    }

    public function insert_data()
    {
        $this->model_system->simpan_pengaduan();
    }

    
}

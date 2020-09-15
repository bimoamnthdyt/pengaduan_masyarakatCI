<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('model_system');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['users'] = $this->model_system->get_user();
        $data['c_user'] = $this->model_system->count_user();
        $data['user'] = $this->db->get_where(
            'tb_user',
            ['email' => $this->session->userdata('email')]
        )->row_array();
        $this->load->view('admin/index', $data);
    }
    public function edit_user($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->model_system->edit_datauser($where, 'tb_user')->result();
        $this->load->view('admin/edit_data_user', $data);
    }
    public function hapus($id)
    {
        $this->model_system->deleteData($id);
    }

    public function pengaduan()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where(
            'tb_user',
            ['email' => $this->session->userdata('email')]
        )->row_array();
        $data['pengaduans'] = $this->db->get('tb_pengaduan')->result();
        $this->load->view('admin/pengaduan', $data);
    }
    public function hapus_pengaduan($id)
    {
        $this->model_system->delete_data_peng($id);
    }


    public function update_user($id)
    {
        $ids = $this->input->post('id');
        $emails = $this->input->post('email');
        $passwords = $this->input->post('pw');
        $role_ids = $this->input->post('roleid');
        $user_aktives = $this->input->post('useraktive');
        $data = [
            'id' => $ids,
            'email' => $emails,
            'password' => $passwords,
            'role_id' => $role_ids,
            'user_aktive' => $user_aktives,

        ];
        $where = ['id' => $id];
        $this->model_system->update_datauser($where, $data, 'tb_user');
    }
}

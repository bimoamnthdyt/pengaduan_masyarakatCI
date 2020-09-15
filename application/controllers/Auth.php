<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('model_system');
		$this->load->helper("url");
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'User Login';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			// lolos
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		// ambil data user
		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		if ($user) {

			if ($user['user_aktive'] == 1) {
				// cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('admin');
					} else {
						redirect('user/tampilanweb');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					password anda salah </div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				email ini sudah tidak aktif </div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			email tidak terdaftar </div>');
			redirect('auth');
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
			'is_unique' => 'email ini sudah terdaftar'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'kata sandi tidak sama',
			'min_length' => 'kata sandi terlalu pendek'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'User Register';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/register');
			$this->load->view('templates/auth_footer');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('name', true)),
				'email' =>  htmlspecialchars($this->input->post('email', true)),
				'gambar' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'user_aktive' => 1,
				'tanggal_buat' => time()
			];

			$this->db->insert('tb_user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			berhasil daftar </div>');
			redirect('auth');
		}
	}

	public function usertable()
	{
		$data['user'] = $this->model_system->get_user();
		$data['c_user'] = $this->model_system->count_user();
		$this->load->view('admin/index', $data);
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Anda berhasil Keluar </div>');
		redirect('auth');
	}
}

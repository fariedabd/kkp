<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("M_master");
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function login_proses(){
		$id_karyawan = $this->input->post('id_karyawan');
		$password = $this->input->post('password');

		$data_login = $this->M_master->get_user_login($id_karyawan,$password);
		
		if(!empty($data_login)){
			$session_data = array(
								'logged_in' => TRUE,
								'id_karyawan' => $id_karyawan
							);
			$this->session->set_userdata($session_data);
			redirect('C_index');
		}else{
			$this->index();
		}
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		redirect('C_login');
	}
}
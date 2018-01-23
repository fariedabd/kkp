<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_index extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("m_master");
	}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){			
			$id_karyawan = $this->session->userdata('id_karyawan');
			$data['karyawan'] = $this->m_master->get_data_karyawan($id_karyawan);
			$this->load->view('v_header', $data);
			$this->load->view('v_index_admin');
			$this->load->view('v_footer');
		}else{
			redirect('C_login');
		
		}
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_jbt extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("m_master");
	}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['data_jbt']=$this->m_master->get_jbt();
			$id_karyawan = $this->session->userdata('id_karyawan');
			$data['karyawan'] = $this->m_master->get_data_karyawan($id_karyawan);
			$this->load->view('v_header',$data);
			$this->load->view('v_jbt', $data);
			$this->load->view('v_footer');
		}else{
			redirect('C_login');
		
		}
	}

	public function add_jbt(){
		$id_jabatan = $this->input->post('id_jabatan');
		$nm_jabatan = $this->input->post('nm_jabatan');

		if ($this->input->post('input')) {
			$datajbt = array(
				'id_jabatan' => $id_jabatan,
				'nm_jabatan' => $nm_jabatan
				);
			$this->m_master->add_data_jbt($datajbt);
		} else if($this->input->post('update')){
			$data = array(
		        'nm_jabatan' => $nm_jabatan
			);
			$this->m_master->update_data_jbt($id_jabatan,$data);
		}
		redirect("C_jbt");
	}

	public function delete($id_jabatan){
		$this->m_master->delete_jabatan($id_jabatan);
		redirect("C_jbt");
	}
}
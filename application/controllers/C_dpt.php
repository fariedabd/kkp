<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_dpt extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("m_master");
	}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['data_dpt']=$this->m_master->get_dpt();
			$id_karyawan = $this->session->userdata('id_karyawan');
			$data['karyawan'] = $this->m_master->get_data_karyawan($id_karyawan);
			$this->load->view('v_header', $data);
			$this->load->view('v_dpt', $data);
			$this->load->view('v_footer');
		}else{
			redirect('C_login');
		
		}
	}

	public function add_dpt(){
		$id_departmen = $this->input->post('id_departmen');
		$nm_departmen = $this->input->post('nm_departmen');
		$id_manager = $this->input->post('id_manager');
		if ($this->input->post('input')) {
			$datadpt = array(
				'id_departmen' => $id_departmen,
				'nm_departmen' => $nm_departmen,
				'id_manager' => $id_manager,
				);
			$this->m_master->add_data_dpt($datadpt);
				}
			 else if($this->input->post('update')){
			$data = array(
		        'nm_departmen' => $nm_departmen,
		        'id_manager' => $id_manager
			);
			$this->m_master->update_data_dpt($id_departmen,$data);
		}
		redirect("C_dpt");
	}

	public function delete($id_departmen){
		$this->m_master->delete_departmen($id_departmen);
		redirect("C_dpt");
	}
}
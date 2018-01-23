<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_karyawan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("m_master");
	}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['data_karyawan']=$this->m_master->get_karyawan();
			$id_karyawan = $this->session->userdata('id_karyawan');
			$data['karyawan'] = $this->m_master->get_data_karyawan($id_karyawan);
			$data['jabatan'] = $this->m_master->get_jbt();
			$data['departmen'] = $this->m_master->get_dpt();
			$this->load->view('v_header',$data);
			$this->load->view('v_data_karyawan', $data);
			$this->load->view('v_footer');
		}else{
			redirect('C_login');
		
		}
	}
	public function add_karyawan(){
		$id_karyawan = $this->input->post('id_karyawan');
		$nm_karyawan = $this->input->post('nm_karyawan');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$id_manager = $this->input->post('id_manager');
		$id_departmen = $this->input->post('id_departmen');
		$sisa_cuti = $this->input->post('sisa_cuti');
		if ($this->input->post('input')) {			
			$datakaryawan = array(
				'id_karyawan' => $id_karyawan,
				'nm_karyawan' => $nm_karyawan,
				'alamat' => $alamat,
				'no_telp' => $telepon,
				'email' => $email,
				'password' => $password,
				'id_manager' => $id_manager,
				'id_departmen' => $id_departmen,
				'sisa_cuti' => $sisa_cuti
				);
			$this->m_master->add_data_karyawan($datakaryawan);
				}else if($this->input->post('update')){
					$data = array(
						'nm_karyawan' => $nm_karyawan,
						'alamat' => $alamat,
						'no_telp' => $telepon,
						'email' => $email,
						'password' => $password,
						'id_manager' => $id_manager,
						'id_departmen' => $id_departmen,
						'sisa_cuti' => $sisa_cuti
			);
			$this->m_master->update_data_karyawan($id_karyawan,$data);
		}
			redirect("C_karyawan");
	}
	public function delete($id_karyawan){
		$this->m_master->delete_karyawan($id_karyawan);
		redirect("C_karyawan");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
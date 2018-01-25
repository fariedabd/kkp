<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_profile extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("M_master");
	}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['data_karyawan']=$this->M_master->get_karyawan();
			$id_karyawan = $this->session->userdata('id_karyawan');
			$data['karyawan'] = $this->M_master->get_data_karyawan($id_karyawan);
			$data['jabatan'] = $this->M_master->get_jbt();
			$data['departmen'] = $this->M_master->get_dpt();
			$this->load->view('v_header',$data);
			$this->load->view('v_profile', $data);
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
		if($this->input->post('update')){
					$data = array(
						'nm_karyawan' => $nm_karyawan,
						'alamat' => $alamat,
						'no_telp' => $telepon,
						'email' => $email,
						'password' => $password
			);
			$this->M_master->update_data_karyawan($id_karyawan,$data);
		}
			redirect("C_karyawan");
	}
	public function delete($id_karyawan){
		$this->M_master->delete_karyawan($id_karyawan);
		redirect("C_karyawan");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_lap_cuti_cetak extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("M_transaksi");
		$this->load->model("M_master");
	}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['data_karyawan']=$this->M_master->get_karyawan();
			$id_karyawan = $this->session->userdata('id_karyawan');
			$data['karyawan'] = $this->M_master->get_data_karyawan($id_karyawan);
			$data['tgl_awal'] = $this->M_transaksi->get_lap_cuti($tgl_awal);
			$data['tgl_akhir'] = $this->M_transaksi->get_lap_cuti($tgl_akhir);
			$this->load->view('v_header', $data);
			$this->load->view('v_lap_cuti_cetak', $data);
			$this->load->view('v_footer');
		}else{
			redirect('C_login');
		
		}
	}
	// public function add_karyawan(){
	// 	if ($this->input->post('input')) {
	// 		$id_karyawan = $this->input->post('id_karyawan');
	// 		$nm_karyawan = $this->input->post('nm_karyawan');
	// 		$alamat = $this->input->post('alamat');
	// 		$telepon = $this->input->post('telepon');
	// 		$email = $this->input->post('email');
	// 		$password = $this->input->post('password');
	// 		$id_manager = $this->input->post('id_manager');
	// 		$id_departmen = $this->input->post('id_departmen');
	// 		$sisa_cuti = $this->input->post('sisa_cuti');
	// 		$datakaryawan = array(
	// 			'id_karyawan' => $id_karyawan,
	// 			'nm_karyawan' => $nm_karyawan,
	// 			'alamat' => $alamat,
	// 			'no_telp' => $telepon,
	// 			'email' => $email,
	// 			'password' => $password,
	// 			'id_manager' => $id_manager,
	// 			'id_departmen' => $id_departmen,
	// 			'sisa_cuti' => $sisa_cuti
	// 			);
	// 		$this->M_master->add_data_karyawan($datakaryawan);
	// 			}
	// 		redirect("C_karyawan");
	// }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_lap_cuti extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("M_master");
		$this->load->model("M_transaksi");
	}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['data_karyawan']=$this->M_master->get_karyawan();
			$id_karyawan = $this->session->userdata('id_karyawan');
			$data['karyawan'] = $this->M_master->get_data_karyawan($id_karyawan);
			$data['jabatan'] = $this->M_master->get_jbt();
			$data['departmen'] = $this->M_master->get_dpt();

			$this->load->view('v_header', $data);
			$this->load->view('v_lap_cuti', $data);
			$this->load->view('v_footer');
		}else{
			redirect('C_login');
		
		}
	}
	public function get_data(){
		$data['data_karyawan']=$this->M_master->get_karyawan();
		$id_karyawan = $this->session->userdata('id_karyawan');
		$data['karyawan'] = $this->M_master->get_data_karyawan($id_karyawan);
		$data['jabatan'] = $this->M_master->get_jbt();
		$data['departmen'] = $this->M_master->get_dpt();
		
		if ($this->input->post('input')) {
			$tgl_awal = date('Y-m-d', strtotime( $this->input->post('tgl_awal') ));
			$tgl_akhir = date('Y-m-d', strtotime( $this->input->post('tgl_akhir') ));
			// echo $tgl_awal ." - " . $tgl_akhir;exit;
			$data['lap_cuti'] = $this->M_transaksi->get_lap_cuti($tgl_awal,$tgl_akhir);
			

			$this->load->view('v_header', $data);
			$this->load->view('v_lap_cuti_cetak', $data);
			$this->load->view('v_footer');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
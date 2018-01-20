<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_form_cuti extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("M_master");
		$this->load->model("M_transaksi");
	}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['data_form_cuti'] = $this->M_transaksi->get_karyawan_cuti();
			$data['data_karyawan'] = $this->M_master->get_karyawan();
			$id_karyawan = $this->session->userdata('id_karyawan');
			$data['karyawan'] = $this->M_master->get_data_karyawan($id_karyawan);
			$this->load->view('v_header',$data);
			$this->load->view('v_form_cuti', $data);
			$this->load->view('v_footer');
		}else{
			redirect('C_login');
		
		}
	}
	public function add_form_cuti(){
		$id_fcuti = $this->input->post('id_fcuti');
		$tgl_fcuti = $this->input->post('tgl_fcuti');
		$jenis_cuti = $this->input->post('jenis_cuti');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$alasan = $this->input->post('alasan');
		$id_karyawan = $this->input->post('id_karyawan');
		if ($this->input->post('input')) {
			$dataform_cuti = array(
				'id_fcuti' => $id_fcuti,
				'tgl_fcuti' => $tgl_fcuti,
				'jenis_cuti' => $jenis_cuti,
				'tgl_mulai' => $tgl_mulai,
				'tgl_akhir' => $tgl_akhir,
				'alasan' => $alasan,
				'id_karyawan' => $id_karyawan
				);
			$this->M_transaksi->add_data_form_cuti($dataform_cuti);
				}
			redirect("C_form_cuti");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
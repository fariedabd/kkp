<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_form_cuti extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("m_master");
		$this->load->model("m_transaksi");
	}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$id_karyawan = $this->session->userdata('id_karyawan');
			// $data['data_form_cuti'] = $this->m_transaksi->get_karyawan_cuti();
			$data['data_karyawan'] = $this->m_master->get_karyawan();
			$data['karyawan'] = $this->m_master->get_data_karyawan($id_karyawan);
			$data['last_id'] = $this->m_transaksi->get_last_id_cuti();
			$data['data_cuti'] = $this->m_transaksi->get_data_cuti($id_karyawan);
			$this->load->view('v_header',$data);
			$this->load->view('v_form_cuti', $data);
			$this->load->view('v_footer');
		}else{
			redirect('C_login');
		
		}
	}
	public function add_form_cuti(){
		$id_karyawan = $this->session->userdata('id_karyawan');
		$tgl_fcuti = $this->input->post('tgl_pengajuan');
		$tgl_mulai = date('Y-m-d', strtotime( $this->input->post('cuti_awal') ));
		$tgl_akhir = date('Y-m-d', strtotime( $this->input->post('cuti_akhir') ));
		$tot_cuti = $this->input->post('tot_cuti');
		$ket = $this->input->post('ket');
		if ($this->input->post('input')) {
			$dataform_cuti = array(
				'id_karyawan' => $id_karyawan,
				'tgl_pengajuan' => $tgl_fcuti,
				'tgl_mulai' => $tgl_mulai,
				'tgl_akhir' => $tgl_akhir,
				'lama_cuti' => $tot_cuti,
				'ket' => $ket,
				'status_pengajuan' => 1
				);
			$this->m_transaksi->add_data_form_cuti($dataform_cuti);
				}
			redirect("C_form_cuti");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
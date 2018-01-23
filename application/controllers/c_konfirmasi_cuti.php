<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_konfirmasi_cuti extends CI_Controller {

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
			$data['data_karyawan'] = $this->m_master->get_karyawan();
			$data['karyawan'] = $this->m_master->get_data_karyawan($id_karyawan);
			$data['last_id'] = $this->m_transaksi->get_last_id_cuti();
			$data['list_cuti'] = $this->m_transaksi->get_list_cuti();

			$this->load->view('v_header',$data);
			$this->load->view('v_konfirmasi_cuti', $data);
			$this->load->view('v_footer');
		}else{
			redirect('C_login');
		}
	}

	public function konfirmasi_cuti(){
		$id_fcuti = $this->input->post("id");
        
        $data = $this->m_transaksi->get_konfirmasi_cuti($id_fcuti);
        
        $x = json_encode($data);
        
        $data = str_replace("[", "", $x);
        $data = str_replace("]", "", $data);
        $c = "test";
        return $x;
	}
}
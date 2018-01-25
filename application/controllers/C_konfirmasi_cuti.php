<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_konfirmasi_cuti extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("M_master");
		$this->load->model("M_transaksi");
	}
	
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$id_karyawan = $this->session->userdata('id_karyawan');
			$data['data_karyawan'] = $this->M_master->get_karyawan();
			$data['karyawan'] = $this->M_master->get_data_karyawan($id_karyawan);
			$data['last_id'] = $this->M_transaksi->get_last_id_cuti();
			$data['list_cuti'] = $this->M_transaksi->get_list_cuti();

			$this->load->view('v_header',$data);
			$this->load->view('v_konfirmasi_cuti', $data);
			$this->load->view('v_footer');
		}else{
			redirect('C_login');
		}
	}

	public function konfirmasi_cuti(){
		$id_fcuti = $this->input->post("id_fcuti");
		$status = $this->input->post("status");
		$ket_dir = $this->input->post("ket_dir");
		$lm_cuti = $this->input->post("lm_cuti");
		$id_karyawan = $this->input->post("id_karyawan");

		if($this->input->post("btn_confirm")){
			$data = array(
				'id_fcuti' => $id_fcuti,
				'status_pengajuan' => $status,
				'ket_dir' => $ket_dir
			);

			$update_cuti = $lm_cuti;
			$this->M_transaksi->update_sisa_cuti($id_karyawan,$update_cuti);
			$this->M_transaksi->update_konfirmasi_cuti($id_fcuti,$data);
		}
		redirect('C_konfirmasi_cuti');
	}

	public function get_konfirmasi_cuti(){
		$id_fcuti = $this->input->post("id_cuti");
        
        $data = $this->M_transaksi->get_konfirmasi_cuti($id_fcuti);
        
        $x = json_encode($data);
        
        $data = str_replace("[", "", $x);
        $data = str_replace("]", "", $data);

        echo $data;
	}
}
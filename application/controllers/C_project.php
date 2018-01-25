<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_project extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("M_master");
		$this->load->model("M_transaksi");
	}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$data['data_project']=$this->M_transaksi->get_project();
			$data['data_karyawan'] = $this->M_master->get_karyawan();
			$id_karyawan = $this->session->userdata('id_karyawan');
			$data['last_project'] = $this->M_transaksi->get_last_id_project();
			$data['karyawan'] = $this->M_master->get_data_karyawan($id_karyawan);
			$data['detil_project'] = $this->M_transaksi->get_detil_project();
			$this->load->view('v_header',$data);
			$this->load->view('v_project', $data);
			$this->load->view('v_footer');
		}else{
			redirect('C_login');
		
		}
	}
	public function add_project(){
		if ($this->input->post('input')) {
			$id_project = $this->input->post('id_project');
			$nm_project = $this->input->post('nm_project');
			$awal_project = $this->input->post('awal_project');
			$akhir_project = $this->input->post('akhir_project');
			$dataproject = array(
				'id_project' => $id_project,
				'nm_project' => $nm_project,
				'awal_project' => $awal_project,
				'akhir_project' => $akhir_project
				);
			$this->M_transaksi->add_data_project($dataproject);
				}
			redirect("C_project");
	}
	public function add_detil_porject(){
		if ($this->input->post('input')) {
			$id_project = $this->input->post('id_project');
			$id_karyawan = $this->input->post('id_karyawan');
			$tgl_awal_kerja = $this->input->post('tgl_awal_kerja');
			$tgl_akhir_kerja = $this->input->post('tgl_akhir_kerja');
			$datadetilproject = array(
				'id_project' => $id_project,
				'id_karyawan' => $id_karyawan,
				'tgl_awal_kerja' => $tgl_awal_kerja,
				'tgl_akhir_kerja' => $tgl_akhir_kerja
				);
			$this->M_transaksi->add_detil_project($datadetilproject);
				}
			redirect("C_project");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
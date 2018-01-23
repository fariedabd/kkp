<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_project extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model("m_transaksi");
	}
	public function index()
	{
		if($this->session->userdata('logged_in') == TRUE){
			$dataproject['data_project']=$this->m_transaksi->get_project();
			$id_karyawan = $this->session->userdata('id_karyawan');
			$data['karyawan'] = $this->m_master->get_data_karyawan($id_karyawan);
			$this->load->view('v_header'$data);
			$this->load->view('v_project', $dataproject);
			$this->load->view('v_footer');
		}else{
			redirect('C_login');
		
		}
	}
	public function add_project(){
		if ($this->input->post('input')) {
			$id_spl = $this->input->post('id_spl');
			$tgl_spl = $this->input->post('tgl_spl');
			$id_karyawan = $this->input->post('id_karyawan');
			$id_departmen = $this->input->post('id_departmen');
			$tugas_lembur = $this->input->post('tugas_lembur');
			$jam_lembur = $this->input->post('jam_lembur');
			$id_project = $this->input->post('id_project');
			$dataspl = array(
				'id_spl' => $id_spl,
				'tgl_spl' => $tgl_spl,
				'id_karyawan' => $id_karyawan,
				'id_departmen' => $id_departmen,
				'tugas_lembur' => $tugas_lembur,
				'jam_lembur' => $jam_lembur,
				'id_project' => $id_project
				);
			$this->m_transaksi->add_data_project($dataproject);
				}
			redirect("C_project");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
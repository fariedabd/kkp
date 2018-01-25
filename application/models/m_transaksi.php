<?php

/**
* 
*/
class M_transaksi extends CI_Model{
	// model add data
	function add_data_spl($dataspl)
	{
		$this->db->insert('spl', $dataspl);
	}
    function add_data_form_cuti($dataform_cuti)
    {
        $this->db->insert('form_cuti', $dataform_cuti);
    }
    function add_data_project($dataproject)
    {
        $this->db->insert('project', $dataproject);
    }
    function add_detil_project($detilproject)
    {
        $this->db->insert('detil_project', $detilproject);
    }
    // model get data
	function get_spl(){
        $query = $this->db->get_where('spl');
        return $query->result();
    }
    function get_form_cuti(){
        $query = $this->db->get_where('form_cuti');
        return $query->result();
    }
    function get_lap_cuti($tgl_awal,$tgl_akhir)
    {
        // $this->db->select('*');
        // $this->db->from('form_cuti'); 
        // $this->db->join('karyawan', 'karyawan.id_karyawan=form_cuti.id_karyawan', 'left');
        // $this->db->where('form_cuti.tgl_mulai >=', $tgl_awal, 'form_cuti.tgl_mulai <=', $tgl_akhir);
        // $this->db->order_by('form_cuti.id_fcuti','asc');

        $query = $this->db->query("SELECT * FROM form_cuti 
                JOIN karyawan ON form_cuti.id_karyawan = karyawan.id_karyawan
                WHERE tgl_mulai >= '$tgl_awal' && tgl_mulai <= '$tgl_akhir'");         
        // $query = $this->db->get(); 
        return $query->result();
        // var_dump($query);exit;
    }
    function get_project(){
        $query = $this->db->get_where('project');
        return $query->result();
    }
    function get_detil_project(){
        $query = $this->db->get_where('detil_project');
        return $query->result();
    }
    function get_last_id_cuti(){
        $this->db->limit(1);
        $this->db->order_by('id_fcuti','desc');  
        $query = $this->db->get_where('form_cuti');
        return $query->result();
    }
    function get_last_id_project(){
        $this->db->limit(1);
        $this->db->order_by('id_project','desc');  
        $query = $this->db->get_where('project');
        return $query->result();
    }

    function get_data_cuti($id_karyawan){
        $query = $this->db->get_where('form_cuti', array('id_karyawan' => $id_karyawan));
        return $query->result();
    }

    function get_list_cuti(){
        $this->db->select('*');
        $this->db->from('form_cuti');
        $this->db->join('karyawan', 'form_cuti.id_karyawan = karyawan.id_karyawan');
        $this->db->join('jabatan', 'karyawan.id_jabatan = jabatan.id_jabatan');
        $query = $this->db->get();
        return $query->result();
    }

    function get_konfirmasi_cuti($id_fcuti){
        $this->db->select('*');
        $this->db->from('form_cuti');
        $this->db->join('karyawan', 'form_cuti.id_karyawan = karyawan.id_karyawan');
        $this->db->where('id_fcuti', $id_fcuti);
        $query = $this->db->get();
        return $query->result();
    }

    function update_konfirmasi_cuti($id_fcuti,$data){
        $this->db->where('id_fcuti', $id_fcuti);
        $this->db->update('form_cuti', $data);
    }

    function update_sisa_cuti($id_karyawan,$data){
        // $this->db->set('sisa_cuti', "sisa_cuti=sisa_cuti-$data");
        // $this->db->where('id_karyawan', $id_karyawan);
        // $this->db->update('karyawan');
        $this->db->query("UPDATE karyawan SET sisa_cuti = sisa_cuti - '$data' WHERE id_karyawan = '0005'");
    }
}
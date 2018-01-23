<?php

/**
* 
*/
class m_master extends CI_Model{
	// model add data
	function add_data_karyawan($datakaryawan)
	{
		$this->db->insert('karyawan', $datakaryawan);
	}
    function add_data_dpt($datadpt)
    {
        $this->db->insert('departmen', $datadpt);
    }
    function add_data_jbt($datajbt)
    {
        $this->db->insert('jabatan', $datajbt);
    }
    // model get data
	function get_karyawan(){
        $query = $this->db->get_where('karyawan');
        return $query->result();
    }
    function get_dpt(){
        $query = $this->db->get_where('departmen');
        return $query->result();
    }
    function get_jbt(){
        $query = $this->db->get_where('jabatan');
        return $query->result();
    }
    // model ubah data
    function update_data_karyawan($id_karyawan,$data)
    {
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->update('karyawan', $data);
    }
    function update_data_departmen($id_departmen,$data)
    {
        $this->db->where('id_departmen', $id_departmen);
        $this->db->update('departmen', $data);
    }
    function update_data_jbt($id_jabatan,$data)
    {
        $this->db->where('id_jabatan', $id_jabatan);
        $this->db->update('jabatan', $data);
    }
    // model delete data
    function delete_karyawan($id_karyawan){
        $this->db->where('id_karyawan', $id_karyawan);
        $this->db->delete('karyawan');
    }
    function delete_departmen($id_departmen){
        $this->db->where('id_departmen', $id_departmen);
        $this->db->delete('departmen');
    }
    function delete_jabatan($id_jabatan){
        $this->db->where('id_jabatan', $id_jabatan);
        $this->db->delete('jabatan');
    }
    // Get karyawan login
    function get_data_karyawan($id_karyawan){
        $query = $this->db->get_where('karyawan', array('id_karyawan' => $id_karyawan));
        return $query->result();
    }
    // model login
    function get_user_login($id_karyawan,$password){
    	$query = $this->db->get_where('karyawan', array('id_karyawan' => $id_karyawan, 'password'=> $password));
    	return $query->result();
    }
}
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
    // model get data
	function get_spl(){
        $query = $this->db->get_where('spl');
        return $query->result();
    }
    function get_form_cuti(){
        $query = $this->db->get_where('form_cuti');
        return $query->result();
    }
    function get_karyawan_cuti()
    {
        $this->db->select('*');
        $this->db->from('form_cuti'); 
        $this->db->join('karyawan', 'karyawan.id_karyawan=form_cuti.id_karyawan', 'left');
        $this->db->where('form_cuti.id_fcuti');
        $this->db->order_by('form_cuti.id_fcuti','asc');         
        $query = $this->db->get(); 
            if($query->num_rows() != 0)
                {
                    return $query->result_array();
                }
                else
                {
                    return false;
                }
    }
    function get_project(){
        $query = $this->db->get_where('project');
        return $query->result();
    }
}
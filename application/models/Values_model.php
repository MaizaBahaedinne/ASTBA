<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Values_model extends CI_Model {

	function valuesInfo(){
		$this->db->select('*');
		$this->db->from('tbl_values as BaseTbl');
		$query = $this->db->get();
		$result = $query->row();
		return $result;

	}

	function editValues($valueId,$valuesInfo){
		$this->db->where('valueId', $valueId);
		$this->db->update('tbl_values', $valuesInfo);
		return TRUE;
	}




}



?>

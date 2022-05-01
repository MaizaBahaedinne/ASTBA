<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Successtory_model extends CI_Model {

	function successtoryInfo(){
		$this->db->select('*');
		$this->db->from('tbl_successtory as BaseTbl');
		$query = $this->db->get();
		$result = $query->row();
		return $result;

	}

	function editSuccesstory($successtoryId,$successtoryInfo){
		$this->db->where('successtoryId', $successtoryId);
		$this->db->update('tbl_successtory', $successtoryInfo);
		return TRUE;
	}




}


?>

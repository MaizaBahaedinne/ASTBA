<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Vision_model extends CI_Model{

	function visionInfo(){
		$this->db->select('*');
		$this->db->from('tbl_vision as BaseTbl');
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	function editVision($visionId,$visionInfo){
		$this->db->where('visionId', $visionId);
		$this->db->update('tbl_vision', $visionInfo);
		return TRUE;
	}



}


?>

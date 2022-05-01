<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Mission_model extends CI_Model {

	function missionInfo(){
		$this->db->select('*');
		$this->db->from('tbl_mission as BaseTbl');
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	function editMission($missionId,$missionInfo){
		$this->db->where('missionId', $missionId);
		$this->db->update('tbl_mission', $missionInfo);
		return TRUE;
	}


}



?>

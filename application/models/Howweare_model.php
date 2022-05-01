<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Howweare_model extends CI_Model {
	function  howweareInfo(){
		$this->db->select('*');
		$this->db->from('tbl_howweare as BaseTbl');
		$this->db->order_by('BaseTbl.updateDTM', 'DESC');
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}



	function editHowweare($howweareInfo ,$howweareId){

		$this->db->where('howweareId', $howweareId);
		$this->db->update('tbl_howweare', $howweareInfo);
		return TRUE;

	}





}

?>

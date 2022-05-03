<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model {


	    function addContact($ContactInfo)
	    {
	        $this->db->trans_start();
	        $this->db->insert('tbl_contact', $ContactInfo);
	        $insert_id = $this->db->insert_id();
	        $this->db->trans_complete();  
	        return $insert_id;
	    }

    function addNotify($notifyInfo)
        {
            $this->db->trans_start();
            $this->db->insert('tbl_notify', $notifyInfo);
            $insert_id = $this->db->insert_id();
            $this->db->trans_complete();  
            return $insert_id;
        }

	



        function checkNotify($email)
            {
                $this->db->select('*');
                $this->db->from('tbl_notify as BaseTbl');
                $this->db->where('BaseTbl.email = ',$email);
                $query = $this->db->get();
                $result = $query->result();
                return $result;
            }
 
}

?>

<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {

        function newsListing()
            {
                $this->db->select('*');
                $this->db->from('tbl_news as BaseTbl');
                $this->db->order_by('BaseTbl.createdDtm', 'DESC');
                $query = $this->db->get();
                $result = $query->result();
                return $result;
            }


        function newsInfo($newsId)
            {
                $this->db->select('*');
                $this->db->from('tbl_news as BaseTbl');
                $this->db->where('BaseTbl.newsId = ',$newsId);
                $query = $this->db->get();
                $result = $query->row();
                return $result;
            }



	    function addNew($NewInfo)
	    {
	        $this->db->trans_start();
	        $this->db->insert('tbl_news', $NewInfo);
	        $insert_id = $this->db->insert_id();
	        $this->db->trans_complete();  
	        return $insert_id;
	    }


	    /**
	     * This function is used to update the user information
	     * @param array $userInfo : This is users updated information
	     * @param number $userId : This is user id
	     */
	    function editNew($newsInfo, $newsId)
	    {
	        $this->db->where('newsId', $newsId);
	        $this->db->update('tbl_news', $newsInfo);
	        return TRUE;
	    }

}

?>

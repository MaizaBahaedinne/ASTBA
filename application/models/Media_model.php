<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Media_model extends CI_Model {


    /**
     * table media_album
     */

        function albumListing()
            {
                 $this->db->select('*');
                $this->db->from('tbl_media_album as BaseTbl');
                $this->db->order_by('BaseTbl.createdDtm', 'DESC');
                $query = $this->db->get();
                $result = $query->result();
                return $result;
            }


        function albumContent($albumId)
            {
                $this->db->select('*');
                $this->db->from('tbl_media_album as BaseTbl');
                $this->db->where('BaseTbl.albumId = ',$albumId);
                $query = $this->db->get();
                $result = $query->row();
                return $result;
            }



	    function addAlbum($albumContent)
	    {
	        $this->db->trans_start();
	        $this->db->insert('tbl_media_album', $albumContent);
	        $insert_id = $this->db->insert_id();
	        $this->db->trans_complete();  
	        return $insert_id;
	    }


	    /**
	     * This function is used to update the user information
	     * @param array $userInfo : This is users updated information
	     * @param number $userId : This is user id
	     */
	    function editAlbum($albumContent, $albumId)
	    {
	        $this->db->where('albumId', $albumId);
	        $this->db->update('tbl_media_album', $albumContent);
	        return TRUE;
        }
        


        /**
         * table media_album_content 
          */


        function contentListing($albumId)
            {
                 $this->db->select('*');
                $this->db->from('tbl_media_album_content as BaseTbl');
                $this->db->where('BaseTbl.albumId = ', $albumId); 
                $this->db->order_by('BaseTbl.createdDtm', 'DESC');
                $query = $this->db->get();
                $result = $query->result();
                return $result;
            }


        function Content($contentId)
            {
                $this->db->select('*');
                $this->db->from('tbl_media_album_content as BaseTbl');
                $this->db->join('tbl_media_album', 'tbl_media_album.albumId = BaseTbl.albumId');
                $this->db->where('BaseTbl.albumId = ',$contentId);
                $query = $this->db->get();
                $result = $query->row();
                return $result;
            }


            function Cover($albumId)
            {
                $this->db->select('*');
                $this->db->from('tbl_media_album_content as BaseTbl');
                $this->db->join('tbl_media_album', 'tbl_media_album.albumId = BaseTbl.albumId');
                $this->db->where('BaseTbl.albumId = ',$albumId);
                $query = $this->db->get();
                $result = $query->row();
                return $result;
            }



	    function addContent($Content)
	    {
	        $this->db->trans_start();
	        $this->db->insert('tbl_media_album_content', $Content);
	        $insert_id = $this->db->insert_id();
	        $this->db->trans_complete();  
	        return $insert_id;
	    }


	    /**
	     * This function is used to update the user information
	     * @param array $content : This is users updated information
	     * @param number $contentId : This is user id
	     */
	    function editContent($Content, $contentId)
	    {
	        $this->db->where('contentId', $contentId);
	        $this->db->update('tbl_media_album_content', $Content);
	        return TRUE;
        }
        



        /**
         * table media_views 
        */
        

        function viewsListing()
        {
             $this->db->select('*');
            $this->db->from('tbl_media_views as BaseTbl');
            $this->db->join('tbl_media_album', 'tbl_media_album.albumId = BaseTbl.albumId');
            $this->db->order_by('BaseTbl.createdDtm', 'DESC');
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }


    function view($viewtId)
        {
            $this->db->select('*');
            $this->db->from('tbl_media_views as BaseTbl');
            $this->db->join('tbl_media_album', 'tbl_media_album.albumId = BaseTbl.albumId');
            $this->db->where('BaseTbl.viewId = ',$viewId);
            $query = $this->db->get();
            $result = $query->row();
            return $result;
        }
}

?>

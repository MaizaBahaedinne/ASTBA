<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Newletter extends BaseController {

public function __construct()
    {
        parent::__construct();
        $this->load->model('newletter_model');



    }



	public function save()
	{
		
		if($this->input->post('abonner'))
		{
		$e=$this->input->post('email');
		$n=$this->input->post('nom');
		$p=$this->input->post('prenom');
		$d=$this->input->post('ddn');
		$g=$this->input->post('gouvernorat');
		
		$que=$this->db->query("select * from tbl_newlettre where email='".$e."'");
		$row = $que->num_rows();
		if($row)
		{
		$data['error']="<h3 style='color:red'>Ce email est deja abonné</h3>";
		}
		else
		{
		$que=$this->db->query("insert into tbl_newlettre values('','$e','$n','$p','$d','$g')");
		
		$data['error']="<h3 style='color:blue'>abonné avec succes</h3>";
		}			
				
		}
		
	$this->load->view('media/view',@$data);
	
	

	}
}
?>



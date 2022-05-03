

	<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';

class Contact extends BaseController{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('contact_model');
	}



	public function addNew ()
	{	

		 $nom = $this->input->post('nom');
		 $email = $this->input->post('email');
		 $text = nl2br($this->input->post('text'));

		  $contentInfo = array(
                                              'nom'=>$nom ,
                                              'email'=>$email ,
                                              'text'=>$text ,
                                             );

		 $this->contact_model->addContact($contentInfo) ; 

		redirect("/?c=1") ;
	}

	public function Notify ()
	{	

		 
		 $email = $this->input->post('email');
		 $ip = $this->input->post('ip');

		  $contentInfo = array(
                                             
                                              'email'=>$email ,
                                              'ip'=> $this->input->ip_address() ,
                                             );

		if( count($this->contact_model->checkNotify($email) )  == 0 ) 
		{  
		 $this->contact_model->addNotify($contentInfo) ; 
				redirect("/?n=1") ;
		}

		else
		{
				redirect("/?n=2") ;
		}

		
	}


}


?>
